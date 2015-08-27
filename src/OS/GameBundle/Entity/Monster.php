<?php

namespace OS\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Monster
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OS\GameBundle\Entity\MonsterRepository")
 */
class Monster
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity="OS\GameBundle\Entity\Position", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="tileFormula", type="text")
     */
    private $tileFormula;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @var boolean
     *
     * @ORM\Column(name="alive", type="boolean")
     */
    private $alive;


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
     * Set name
     *
     * @param string $name
     * @return Monster
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set tileFormula
     *
     * @param string $tileFormula
     * @return Monster
     */
    public function setTileFormula($tileFormula)
    {
        $this->tileFormula = $tileFormula;

        return $this;
    }

    /**
     * Get tileFormula
     *
     * @return string 
     */
    public function getTileFormula()
    {
        return $this->tileFormula;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return Monster
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set position
     *
     * @param \OS\GameBundle\Entity\Position $position
     * @return Monster
     */
    public function setPosition(\OS\GameBundle\Entity\Position $position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return \OS\GameBundle\Entity\Position 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set alive
     *
     * @param boolean $alive
     * @return Monster
     */
    public function setAlive($alive)
    {
        $this->alive = $alive;

        return $this;
    }

    /**
     * Get alive
     *
     * @return \bool 
     */
    public function getAlive()
    {
        return $this->alive;
    }
}
