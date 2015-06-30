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

    /*/**
     * @Route("/play", name="play_os")
     */
   /* public function playAction()
    {
        return $this->redirect('/os/index.html');
    }*/

    /**
     * Displays the characters the connected user has.
     *
     * @Route("/choosechar", name="chars_choose_char")
     * @Template("OSGameBundle:Chars:chooseChar.html.twig")
     */
    public function listUserCharsAction()
    {
        $chars = $this->getDoctrine()->getManager()->getRepository('OSGameBundle:Chars')->findByOwner($this->container->get('security.context')->getToken()->getUser());


        return $this->render('OSGameBundle:Chars:chooseChar.html.twig',
            array(
                'chars' => $chars,
                'user' => $this->container->get('security.context')->getToken()->getUser()->getUsername(),
            ));
    }

    /**
     * Displays the characters the connected user has.
     *
     * @Route("/selectchar/{id}", name="select_char")
     * @Template("OSGameBundle:Chars:chooseChar.html.twig")
     */
    public function selectCharAction($id)
    {
        $char = $this->getDoctrine()->getManager()->getRepository('OSGameBundle:Chars')->find($id);
        return $this->redirect('/os/index.html?char=' . $char->getName() . '&user=' .  $this->container->get('security.context')->getToken()->getUser()->getUsername());
    }
}
