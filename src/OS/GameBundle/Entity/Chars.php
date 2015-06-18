<?php

namespace OS\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use OS\UserBundle\Entity\User as User;
use OS\GameBundle\Entity\Position as Position;

/**
 * Chars
 * Represents the players connected
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OS\GameBundle\Entity\CharsRepository")
 */
class Chars
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
     * @ORM\ManyToOne(targetEntity="OS\UserBundle\Entity\User", inversedBy="characters")
     */
    private $owner;

    /**
     * @ORM\ManyToOne(targetEntity="OS\GameBundle\Entity\Position", inversedBy="characters")
     */
    private $position;

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
     * @return Chars
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
     * Set owner
     *
     * @param User $owner
     * @return Chars
     */
    public function setOwner(User $owner = null)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return User
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set position
     *
     * @param Position $position
     * @return Chars
     */
    public function setPosition(Position $position = null)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return Position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return string
     */
    public function toJSON()
    {
        return (array(
            'id' => $this->getId(),
            'name' => $this->getName(),
            'x' => $this->getPosition()->getX(),
            'y' => $this->getPosition()->getY(),
        ));
    }
}