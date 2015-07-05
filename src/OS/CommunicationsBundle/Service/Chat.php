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
use OS\GameBundle\Entity\Position as Position;
use OS\CommunicationsBundle\Service\MessagesSender;

class Chat extends ContainerAware implements MessageComponentInterface {

    const separator = "%:%";

    /**
     * @var \SplObjectStorage
     */
    protected $clients;

    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var MessagesSender
     */
    protected $ms;

    /**
     * @var security.encoder_factory
     */
    protected $security;

    /**
     * @param EntityManager $em
     * @param MessagesSender $ms
     */
    public function __construct(EntityManager $em, MessagesSender $ms, $security) {
        $this->clients = new \SplObjectStorage;
        $this->em = $em;
        $this->ms = $ms;
        $this->security = $security;
    }

    /**
     * @param ConnectionInterface $conn
     */
    public function onOpen(ConnectionInterface $conn) {
        $this->ms->initConnection( $conn, $this->em, $this->clients, $this->security );
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        $this->ms->treatMessage( $from, $msg, $this->em, $this->clients );
    }

    public function onClose(ConnectionInterface $conn) {
        $this->ms->logoutUser($conn, $this->em, $this->clients );
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "An error has occurred: {$e->getMessage()}\n";

        $conn->close();
    }

}
