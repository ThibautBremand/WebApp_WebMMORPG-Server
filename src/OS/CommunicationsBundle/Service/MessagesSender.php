<?php
/**
 * Created by PhpStorm.
 * User: Thibaut
 * Date: 25/06/2015
 * Time: 19:56
 */

namespace OS\CommunicationsBundle\Service;

use Ratchet\ConnectionInterface;
use Doctrine\ORM\EntityManager;


class MessagesSender {

    const separator = "%:%";

    public function initConnection(ConnectionInterface $conn, EntityManager $em, \SplObjectStorage $clients) {
        // First checks if the user is correctly logged
        $user = $em->getRepository('OSUserBundle:User')->findOneByNickname($conn->WebSocket->request->getQuery());
        if (!$user ) {
            $conn->send("ERROR" . self::separator . "Access denied.");
            $conn->close();
        }
        else {
            // The user is registered, we can continue
            // Stores the new connection to send it messages later

            // Retrieves characters for the last connected user
            $characters = $em->getRepository('OSGameBundle:Chars')->findByOwner($user);

            $clients->attach($conn, $characters[0]);

            // Sends to the user information about his character
            $conn->send("LAUNCH" . self::separator . json_encode($characters[0]->toJSON()));

            echo "New connection! ({$conn->resourceId})\n";
            echo $clients->count() . " players are currently connected ! \n";

            // Builds information about the new character online to send it to the already connected users
            $arrayCharacters = array();
            foreach ( $characters as $char ) {
                array_push($arrayCharacters, $char->toJSON());
            }
            $msg = "ENTER" . self::separator . $conn->resourceId . self::separator . json_encode($arrayCharacters[0]);

            // Sends to all the users the new online character
            foreach ($clients as $client) {
                if ( $client == $conn ) {
                    $currentMapChar = $clients->getInfo()->getPosition()->getMap();
                    break;
                }
            }

            foreach ($clients as $client) {
                if ( $client != $conn ) {
                    if(strcmp($clients->getInfo()->getPosition()->getMap(), $currentMapChar) == 0) {
                        $client->send($msg);
                        $conn->send("CHARSCONNECTED" . self::separator . $conn->resourceId . self::separator . json_encode($clients->getInfo()->toJSON()));
                    }
                }
            }
        }
    }

    public function treatMessage( ConnectionInterface $from, $msg, EntityManager $em, \SplObjectStorage $clients ) {
        /*$numRecv = count($this->clients) - 1;
        echo sprintf('Connection %d sending message "%s" to %d other connection%s as nickname %s' . "\n"
            , $from->resourceId, $msg, $numRecv, $numRecv == 1 ? '' : 's', $from->WebSocket->request->getQuery());*/
        $message = explode(self::separator, $msg);

        // Resends the message to the clients
        if ( $message[0] == "MOVE" ) {
            // If a user moved, informs the other users that he moved
            foreach ($clients as $client) {
                if ($from !== $client) {
                    // The sender is not the receiver, send to each client connected
                    $client->send($msg);
                }
            }

            // Saves the movement in db
            $movingChar = $em->getRepository('OSGameBundle:Chars')->findOneByName($message[2]);
            $position = $movingChar->getPosition();
            $x = $position->getX();
            $y = $position->getY();

            switch ($message[1]) {
                case 0: //down
                    $movingChar->getPosition()->setY($y + 1);
                    break;
                case 1: //left
                    $movingChar->getPosition()->setX($x - 1);
                    break;
                case 2: //right
                    $movingChar->getPosition()->setX($x + 1);
                    break;
                case 3: //up
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
                case 0: //down
                    $movingChar->getPosition()->setY(1);   //TODO : Map attribute width height : -2 to each number <> 0
                    break;
                case 1: //left
                    $movingChar->getPosition()->setX(23);
                    break;
                case 2: //right
                    $movingChar->getPosition()->setX(1);
                    break;
                case 3: //up
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

            foreach ($clients as $client) {
                if ( $client != $from ) {
                    if(strcmp($clients->getInfo()->getPosition()->getMap(), $newMap->getJson()) == 0) {
                        $msg = "ENTER" . self::separator . $client->resourceId . self::separator . json_encode($userLeaving);
                        $client->send($msg);
                        $from->send("CHARSCONNECTED" . self::separator . $from->resourceId . self::separator . json_encode($clients->getInfo()->toJSON()));
                    }
                    else {
                        $msg = "LEAVE" . self::separator . $from->resourceId . self::separator . $from->WebSocket->request->getQuery() . self::separator . json_encode($userLeaving);
                        $client->send($msg);
                    }
                }
            }
        }
    }

    public function logoutUser (ConnectionInterface $conn, EntityManager $em, \SplObjectStorage $clients) {
        // The connection is closed, remove it, as we can no longer send it messages
        echo "Connection {$conn->resourceId} has disconnected\n";

        $user = $em->getRepository('OSUserBundle:User')->findOneByNickname($conn->WebSocket->request->getQuery());

        $characters = $em->getRepository('OSGameBundle:Chars')->findByOwner($user);
        $msg = "LOGOUT" . self::separator . $conn->resourceId . self::separator . $conn->WebSocket->request->getQuery() . self::separator . json_encode($characters[0]->toJSON());

        foreach ($clients as $client) {
            if ($conn !== $client) {
                $client->send($msg);
            }
        }
        $clients->detach($conn);
    }

}