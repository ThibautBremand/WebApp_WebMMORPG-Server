<?php

/**
 * Created by PhpStorm.
 * User: Thibaut
 * Date: 14/08/2015
 * Time: 19:50
 */
namespace OS\CommunicationsBundle\Command;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class KeepDBCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('os:keepdb')
            ->setDescription('Makes a fake sql query to keep the db connection alive');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        require './vendor/autoload.php';

        $keepdb = $this->getContainer()->get('os_communications.keepdb');
        $keepdb->request();
    }
}