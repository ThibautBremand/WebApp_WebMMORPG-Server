<?php

namespace OS\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\BrowserKit\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template("OSGameBundle:Default:index.html.twig")
     */
    public function indexAction()
    {
        return $this->render('OSGameBundle:Default:index.html.twig');
    }

    /**
     * @Route("/play", name="play_os")
     */
    public function playAction()
    {
        return $this->redirect('/os/index.html');
    }
}
