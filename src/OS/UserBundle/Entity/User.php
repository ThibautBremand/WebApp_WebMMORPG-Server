<?php

namespace OS\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use OS\GameBundle\Entity\Chars as Chars;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OS\UserBundle\Entity\UserRepository")
 */
class User
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
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", length=255)
     */
    private $nickname;

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
     * Set nickname
     *
     * @param string $nickname
     * @return User
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string 
     */
    public function getNickname()
    {
        return $this->nickname;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
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
