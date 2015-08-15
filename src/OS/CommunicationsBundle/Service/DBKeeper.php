<?php
/**
 * Created by PhpStorm.
 * User: Thibaut
 * Date: 14/08/2015
 * Time: 19:47
 */
namespace OS\CommunicationsBundle\Service;

use Doctrine\ORM\EntityManager;

class DBKeeper {

    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function request() {
        //Do the Database stuff
        $query = $this->em->createQuery('SELECT 1 from OSGameBundle:Map')->getResult();
        var_dump($query);
    }

}
