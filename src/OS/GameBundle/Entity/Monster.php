<?php

namespace OS\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use OS\CommunicationsBundle\Service\MessagesSender;

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
     * @var integer
     *
     * @ORM\Column(name="step", type="integer")
     */
    private $step;


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

    /**
     * Set step
     *
     * @param integer $step
     * @return Monster
     */
    public function setStep($step)
    {
        $this->step = $step;

        return $this;
    }

    /**
     * Get step
     *
     * @return integer
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * Moves a monster
     */
    public function move() {
        $direction = rand(1,4);
        $height = json_decode($this->getPosition()->getMap()->getFullJson())->height;
        $width = json_decode($this->getPosition()->getMap()->getFullJson())->width;
        switch($direction) {
            case MessagesSender::MOV_UP:
                if ($this->getPosition()->getY() >= 0 + $this->step) {
                    $this->getPosition()->setY($this->getPosition()->getY() - $this->step);
                    return true;
                    break;
                }
                break;
            case MessagesSender::MOV_LEFT:
                if ($this->getPosition()->getX() >= 0 + $this->step) {
                    $this->getPosition()->setX($this->getPosition()->getX() - $this->step);
                    return true;
                    break;
                }
                break;
            case MessagesSender::MOV_DOWN:
                if ($this->getPosition()->getY() + $this->step <= $height) {
                    $this->getPosition()->setY($this->getPosition()->getY() + $this->step);
                    return true;
                    break;
                }
                break;
            case MessagesSender::MOV_RIGHT:
                if ($this->getPosition()->getX() + $this->step <= $width) {
                    $this->getPosition()->setX($this->getPosition()->getX() + $this->step);
                    return true;
                    break;
                }
                break;
        }
        return false;
    }

    public function toJSON() {
        return (array(
            'id' => $this->getId(),
            'x' => $this->getPosition()->getX(),
            'y' => $this->getPosition()->getY(),
            'step' => $this->getStep(),
        ));
    }
}
