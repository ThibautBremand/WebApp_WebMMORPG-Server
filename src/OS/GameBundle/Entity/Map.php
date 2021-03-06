<?php

namespace OS\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OS\GameBundle\Entity\MapRepository")
 */
class Map
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
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="json", type="string", length=255)
     */
    private $json;

    /**
     * @var string
     *
     * @ORM\Column(name="backgroundMusic", type="string", length=255)
     */
    private $bgMusic;

    /**
     * @ORM\OneToMany(targetEntity="OS\GameBundle\Entity\Position", mappedBy="map")
     */
    private $positions;

    /**
     * @var string
     *
     * @ORM\Column(name="fullJson", type="text")
     */
    private $fullJson;


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
     * Set json
     *
     * @param string $json
     * @return Map
     */
    public function setJson($json)
    {
        $this->json = $json;

        return $this;
    }

    /**
     * Get json
     *
     * @return string 
     */
    public function getJson()
    {
        return $this->json;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->positions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add positions
     *
     * @param \OS\GameBundle\Entity\Position $positions
     * @return Map
     */
    public function addPosition(\OS\GameBundle\Entity\Position $positions)
    {
        $this->positions[] = $positions;

        return $this;
    }

    /**
     * Remove positions
     *
     * @param \OS\GameBundle\Entity\Position $positions
     */
    public function removePosition(\OS\GameBundle\Entity\Position $positions)
    {
        $this->positions->removeElement($positions);
    }

    /**
     * Get positions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPositions()
    {
        return $this->positions;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Map
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    public function __toString(){
        return $this->getJson();
    }

    public function toJSON()
    {
        $str = file_get_contents(__DIR__ . '/../Maps/' . $this->getJson());
        $json = json_decode($str, true);
        $json['bgMusic'] = $this->getBgMusic();
        return $json;
    }

    /**
     * Set bgMusic
     *
     * @param string $bgMusic
     * @return Map
     */
    public function setBgMusic($bgMusic)
    {
        $this->bgMusic = $bgMusic;

        return $this;
    }

    /**
     * Get bgMusic
     *
     * @return string 
     */
    public function getBgMusic()
    {
        return $this->bgMusic;
    }

    /**
     * Set fullJson
     *
     * @param string $fullJson
     * @return Map
     */
    public function setFullJson($fullJson)
    {
        $this->fullJson = $fullJson;

        return $this;
    }

    /**
     * Get fullJson
     *
     * @return string 
     */
    public function getFullJson()
    {
        return $this->fullJson;
    }
}
