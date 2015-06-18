<?php
/**
 * Created by PhpStorm.
 * User: Thibaut
 * Date: 14/06/2015
 * Time: 15:38
 */
namespace OS\CommunicationsBundle\Service;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
use Doctrine\ORM\EntityManager;

class Chat extends ContainerAware implements MessageComponentInterface {

    const separator = "%:%";

    protected $clients;
    protected $em;

    public function __construct(EntityManager $em) {
        $this->clients = new \SplObjectStorage;
        $this->em = $em;
    }

    public function onOpen(ConnectionInterface $conn) {
        // First checks if the user is correctly logged
        $user = $this->em->getRepository('OSUserBundle:User')->findOneByNickname($conn->WebSocket->request->getQuery());
        if (!$user ) {
            $conn->send("ERROR" . self::separator . "Access denied.");
            $conn->close();
        }
        else {
            // The user is registered, we can continue
            // Store the new connection to send messages to later

            // Retrieves characters for the last connected user
            $characters = $this->em->getRepository('OSGameBundle:Chars')->findByOwner($user);

            $this->clients->attach($conn, $characters[0]);
            $conn->send("LAUNCH" . self::separator . $conn->WebSocket->request->getQuery());

            echo "New connection! ({$conn->resourceId})\n";
            echo $this->clients->count() . " players are currently connected ! \n";

            $arrayCharacters = array();
            foreach ( $characters as $char ) {
                array_push($arrayCharacters, $char->toJSON());
            }
            $msg = "ENTER" . self::separator . $conn->resourceId . self::separator . json_encode($arrayCharacters);

            // sends to all the users the new online character
            foreach ($this->clients as $client) {
                if ( $client != $conn ) {
                    $client->send($msg);
                    $conn->send("CHARSCONNECTED" . self::separator . $conn->resourceId . self::separator . json_encode($this->clients->getInfo()->toJSON()));
                }
            }
            $conn->send($msg);
        }
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        $numRecv = count($this->clients) - 1;
        echo sprintf('Connection %d sending message "%s" to %d other connection%s as nickname %s' . "\n"
            , $from->resourceId, $msg, $numRecv, $numRecv == 1 ? '' : 's', $from->WebSocket->request->getQuery());

        foreach ($this->clients as $client) {
            if ($from !== $client) {
                // The sender is not the receiver, send to each client connected
                $client->send($msg);
            }
        }
    }

    public function onClose(ConnectionInterface $conn) {
        // The connection is closed, remove it, as we can no longer send it messages
        $msg = "LEAVE" . self::separator . $conn->resourceId . self::separator . $conn->WebSocket->request->getQuery();
        echo "Connection {$conn->resourceId} has disconnected\n";

        foreach ($this->clients as $client) {
            if ($conn !== $client) {
                $client->send($msg);
            }
        }
        $this->clients->detach($conn);
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "An error has occurred: {$e->getMessage()}\n";

        $conn->close();
    }

}
