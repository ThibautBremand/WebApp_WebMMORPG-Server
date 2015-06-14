<?php

namespace OS\CommunicationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

use Ratchet\Server\IoServer;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/launch")
     */
    public function launchAction() {
        $chat = $this->get('chat');
        $server = IoServer::factory($chat, 8080);
        $server->run();
        return new Response('');
    }
}
