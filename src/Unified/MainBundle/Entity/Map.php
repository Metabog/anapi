<?php

namespace Unified\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map
 *
 * @ORM\Table()
 * @ORM\Entity
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
     * @ORM\Column(name="prettyName", type="string", length=255)
     */
    private $prettyName;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="mapData", type="string", length=255)
     */
    private $mapData;


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
     * Set prettyName
     *
     * @param string $prettyName
     * @return Map
     */
    public function setPrettyName($prettyName)
    {
        $this->prettyName = $prettyName;

        return $this;
    }

    /**
     * Get prettyName
     *
     * @return string 
     */
    public function getPrettyName()
    {
        return $this->prettyName;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Map
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set mapData
     *
     * @param string $mapData
     * @return Map
     */
    public function setMapData($mapData)
    {
        $this->mapData = $mapData;

        return $this;
    }

    /**
     * Get mapData
     *
     * @return string 
     */
    public function getMapData()
    {
        return $this->mapData;
    }
}
