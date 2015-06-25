<?php

namespace OS\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use OS\GameBundle\Entity\Chars as Chars;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="OS\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @ORM\OneToMany(targetEntity="OS\GameBundle\Entity\Chars", mappedBy="owner")
    */
    private $characters;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->characters = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add characters
     *
     * @param Chars $characters
     * @return User
     */
    public function addCharacter(Chars $characters)
    {
        $this->characters[] = $characters;

        return $this;
    }

    /**
     * Remove characters
     *
     * @param Chars $characters
     */
    public function removeCharacter(Chars $characters)
    {
        $this->characters->removeElement($characters);
    }

    /**
     * Get characters
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCharacters()
    {
        return $this->characters;
    }

    /**
     * To string
     */
    public function __toString(){
        return $this->getId() . "-" . $this->getNickname();
    }
}
