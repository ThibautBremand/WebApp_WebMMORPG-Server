<?php
/**
 * Created by PhpStorm.
 * User: Thibaut
 * Date: 25/06/2015
 * Time: 19:56
 */

namespace OS\CommunicationsBundle\Service;

use Doctrine\ORM\Query;
use OS\GameBundle\Entity\Monster;
use Ratchet\ConnectionInterface;
use Doctrine\ORM\EntityManager;


class MessagesSender {

    const separator = "%:%";
    const MOV_UP = 0;
    const MOV_LEFT = 1;
    const MOV_DOWN = 2;
    const MOV_RIGHT = 3;

    public function initConnection(ConnectionInterface $conn, EntityManager $em, \SplObjectStorage $clients, $security) {
        // First checks if the user is correctly logged
        $req = $conn->WebSocket->request->getQuery();
        $req = explode("&", urldecode($req));
        $req[0] = substr($req[0],5);
        $req[1] = substr($req[1],5);
        //$req[2] = substr($req[2],5);

        $user = $em->getRepository('OSUserBundle:User')->findOneByUsername($req[1]);
        if (!$user ) {
            $conn->send("ERROR" . self::separator . "Access denied. You need to register before playing.");
            $conn->close();
        }
        else {
            // Checks if the password entered is the right one.
            $encoder_service = $security;
            $encoder = $encoder_service->getEncoder($user);
            //if ($encoder->isPasswordValid($user->getPassword(), $req[2], $user->getSalt())) {
                // Checks if the user is already connected
            $alreadyConnected = 0;
            foreach ($clients as $client) {
                $name = $clients->getInfo()->getOwner()->getUsername();
                if (strcmp($name, $req[1]) == 0) {
                    $conn->send("ERROR" . self::separator . "You are already connected with a character !");
                    $conn->close();
                    $alreadyConnected = 1;
                    break;
                }
            }
            if ( $alreadyConnected == 0 ) {
                // The user is registered, we can continue
                // Stores the new connection to send it messages later
                $connectedChar = $em->getRepository('OSGameBundle:Chars')->findOneByName($req[0]);   //todo : rechercher parmi les characters du user uniquement avec un repo
                $clients->attach($conn, $connectedChar);

                // Sends to the user information about his character
                $conn->send("LAUNCH" . self::separator . json_encode($connectedChar->toJSON()));

                echo "New connection! ({$conn->resourceId})\n";
                echo $clients->count() . " players are currently connected ! \n";

                // Builds information about the new character online to send it to the already connected users
                $req = explode("&", urldecode($conn->WebSocket->request->getQuery()));
                $req[1] = substr($req[1],5);
                $msg = "ENTER" . self::separator . $conn->resourceId . self::separator . $req[1] . self::separator . json_encode($connectedChar->toJSON());
                $msgComing = "COMING" . self::separator . $conn->resourceId . self::separator . json_encode($connectedChar->toJSON());
                // Sends to all the users the new online character
                foreach ($clients as $client) {
                    if ($client == $conn) {
                        $currentMapChar = $clients->getInfo()->getPosition()->getMap();
                        break;
                    }
                }
                // Retrieves connected users & their characters in order to send them to the new user
                $arrayConnectedChars = array();
                foreach ($clients as $client) {
                    if ($client != $conn) {
                        $client->send($msg);
                        $mapToCompare = $clients->getInfo()->getPosition()->getMap();
                        if (strcmp($mapToCompare, $currentMapChar) == 0) {
                            array_push($arrayConnectedChars, $clients->getInfo()->toJSON());
                            $client->send($msgComing);
                        }
                    }
                }
                if ( count ($arrayConnectedChars) > 0 ) {
                    $conn->send("CHARSCONNECTED" . self::separator . $conn->resourceId . self::separator . json_encode($arrayConnectedChars));
                }
                //Retrieves the monsters placed on the same map as the new connected user in order to send the data to the user
                $this->_sendMonsters($conn, $em, $currentMapChar);
            }
            /*}
            else {
                $conn->send("ERROR" . self::separator . "Wrong password.");
                $conn->close();
            }*/
        }
    }

    public function treatMessage( ConnectionInterface $from, $msg, EntityManager $em, \SplObjectStorage $clients ) {
        $message = explode(self::separator, $msg);

        // todo : check if legal move here
        // Resends the message to the clients
        if ( $message[0] == "MOVE" ) {
            $movingChar = $em->getRepository('OSGameBundle:Chars')->findOneByName($message[2]);
            $position = $movingChar->getPosition();
            // If a user moved, informs the other users that he moved
            foreach ($clients as $client) {
                if ($from !== $client) {
                    // todo : send the info for the users in the current and the neighbours maps only
                    // We don't send the moving message to the characters that are on another map
                    //if (strcmp($clients->getInfo()->getPosition()->getMap(), $position->getMap()) == 0) {
                        // The sender is not the receiver, send to each client connected
                        $client->send($msg);
                    //}
                }
            }

            // Saves the movement in db
            $x = $position->getX();
            $y = $position->getY();

            switch ($message[1]) {
                case self::MOV_DOWN: //down
                    $movingChar->getPosition()->setY($y + 1);
                    break;
                case self::MOV_LEFT: //left
                    $movingChar->getPosition()->setX($x - 1);
                    break;
                case self::MOV_RIGHT: //right
                    $movingChar->getPosition()->setX($x + 1);
                    break;
                case self::MOV_UP: //up
                    $movingChar->getPosition()->setY($y - 1);
                    break;
                default:
                    break;
            }
            $em->flush();
        }

        if ( $message[0] == "TP" ) {
            echo "A player is changing map heading to map no " . $message[1] . "\n";

            $newMap = $em->getRepository('OSGameBundle:Map')->findOneByCode($message[1]);
            $movingChar = $em->getRepository('OSGameBundle:Chars')->findOneByName($message[3]);

            switch ($message[2]) {
                case self::MOV_DOWN: //down
                    $movingChar->getPosition()->setY(1);   //TODO : Map attribute width height : -2 to each number <> 0
                    break;
                case self::MOV_LEFT: //left
                    $movingChar->getPosition()->setX(23);
                    break;
                case self::MOV_RIGHT: //right
                    $movingChar->getPosition()->setX(1);
                    break;
                case self::MOV_UP: //up
                    $movingChar->getPosition()->setY(18);
                    break;
                default:
                    break;
            }
            $movingChar->getPosition()->setMap( $newMap );
            $em->flush();

            $from->send("CHANGEMAP" . self::separator . json_encode($movingChar->toJSON()));

            foreach ($clients as $client) {
                if ( $client == $from ) {
                    $userLeaving = $clients->getInfo()->toJSON();
                    break;
                }
            }

            $arrayConnectedChars = array();
            foreach ($clients as $client) {
                if ( $client != $from ) {
                    if(strcmp($clients->getInfo()->getPosition()->getMap(), $newMap->getJson()) == 0) {
                        $msg = "COMING" . self::separator . $client->resourceId . self::separator . json_encode($userLeaving);
                        $client->send($msg);
                        array_push($arrayConnectedChars, $clients->getInfo()->toJSON());
                    }
                    else {
                        $req = $from->WebSocket->request->getQuery();
                        $req = explode("&", urldecode($req));
                        $msg = "LEAVE" . self::separator . $from->resourceId . self::separator . $req[1] . self::separator . json_encode($userLeaving);
                        $client->send($msg);
                    }
                }
            }
            if ( count ($arrayConnectedChars) > 0 ) {
                $from->send("CHARSCONNECTED" . self::separator . $from->resourceId . self::separator . json_encode($arrayConnectedChars));
            }
        }
    }

    public function logoutUser (ConnectionInterface $conn, EntityManager $em, \SplObjectStorage $clients) {
        // The connection is closed, remove it, as we can no longer send it messages
        echo "Connection {$conn->resourceId} has disconnected\n";
        $req = explode("&", urldecode($conn->WebSocket->request->getQuery()));
        $req[0] = substr($req[0],5);
        $req[1] = substr($req[1],5);

        $char = $em->getRepository('OSGameBundle:Chars')->findOneByName($req[0]);

        if ($char != null) {
            try {
                $charjson = $char->toJSON();
                $msg = "LOGOUT" . self::separator . $conn->resourceId . self::separator . $req[1] . self::separator . json_encode($charjson);

                foreach ($clients as $client) {
                    if ($conn !== $client) {
                        $client->send($msg);
                    }
                }
                $clients->detach($conn);
            } catch (Exception $e) {
                echo "Error sur le logout ! \n";
            }
        }
    }

    public function moveMonsters(EntityManager $em, \SplObjectStorage $clients) {
        $monsters = $em->getRepository('OSGameBundle:Monster')->findAll();
        $movingMonsters = array_rand($monsters, ceil(count($monsters) / 10));
        if (count($movingMonsters) > 0) {
            $movingMonstersJson = array();
            foreach($monsters as $mm) {
                if ($mm->move()) {
                    $em->flush();
                    array_push($movingMonstersJson, $mm->toJSON(Monster::FORMAT_MOVE));
                }
            }
            if (count($movingMonstersJson) > 0) {
                $msg = "MONSTERSMOVEMENT" . self::separator . json_encode($movingMonstersJson);
                foreach ($clients as $client) {
                    $client->send($msg);
                }
            }
        }
    }

    /**
     * Sends monsters placed on the same map as the user $conn
     *
     * @param ConnectionInterface $conn
     * @param EntityManager $em
     * @param $currentMapChar
     */
    private function _sendMonsters(ConnectionInterface $conn, EntityManager $em, $currentMapChar) {
        $monsters = $em->getRepository('OSGameBundle:Monster')->findByMap($currentMapChar);
        $monstersJson = array();
        foreach ($monsters as $m) {
            array_push($monstersJson, $m->toJSON(Monster::FORMAT_CONNECT));
        }
        $msg = "MONSTERSTODRAW" . self::separator . json_encode($monstersJson);
        $conn->send($msg);
    }
}