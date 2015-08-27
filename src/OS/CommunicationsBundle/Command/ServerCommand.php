<?php

/**
 * Created by PhpStorm.
 * User: Thibaut
 * Date: 14/06/2015
 * Time: 15:39
 */
namespace OS\CommunicationsBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

class ServerCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('os:server')
            ->setDescription('Start the Chat server');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        require './vendor/autoload.php';

        //$mb = new MonsterBehavior();

        $chat = $this->getContainer()->get('os_communications.launch');

        $server = IoServer::factory(
            new HttpServer(
                new WsServer(
                    $chat
                )
            ),
            8080
        );

        $server->loop->addPeriodicTimer(5, array($chat, 'monstersMovement'));

        // Changes php's security settings to allow server launch
        set_time_limit(0);

        $server->run();
    }
}