<?php

namespace OS\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use OS\GameBundle\Entity\Chars;

/**
 * Position
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OS\GameBundle\Entity\PositionRepository")
 */
class Position
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Map", inversedBy="positions")
     */
    private $map;

    /**
     * @var integer
     *
     * @ORM\Column(name="x", type="integer")
     */
    private $x;

    /**
     * @var integer
     *
     * @ORM\Column(name="y", type="integer")
     */
    private $y;


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
     * Set map
     *
     * @param string $map
     * @return Position
     */
    public function setMap($map)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get map
     *
     * @return string 
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set x
     *
     * @param integer $x
     * @return Position
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x
     *
     * @return integer 
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y
     *
     * @param integer $y
     * @return Position
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get y
     *
     * @return integer 
     */
    public function getY()
    {
        return $this->y;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        //$this->characters = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add characters
     *
     * @param \OS\GameBundle\Entity\Chars $characters
     * @return Position
     */
    /*public function addCharacter(Chars $characters)
    {
        $this->characters[] = $characters;

        return $this;
    }*/

    /**
     * Remove characters
     *
     * @param \OS\GameBundle\Entity\Chars $characters
     */
    /*public function removeCharacter(Chars $characters)
    {
        $this->characters->removeElement($characters);
    }*/

    /**
     * To string
     */
    public function __toString(){
        return $this->getId() . " : " . $this->getX() . "-" . $this->getY();
    }
}
