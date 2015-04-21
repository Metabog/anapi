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
