<?php

namespace ZoneBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region")
 * @ORM\Entity(repositoryClass="ZoneBundle\Repository\RegionRepository")
 */
class Region
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="region_libelle", type="string", length=100)
     */
    private $regionLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="region_code", type="string", length=50)
     */
    private $regionCode;

    /**
     * @ORM\OneToMany(targetEntity="District", mappedBy="region" , cascade={"persist","remove"}, )
     */
    private $districts;

    public function __construct()
    {
        $this->districts = new ArrayCollection();
    }

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
     * Set regionLibelle
     *
     * @param string $regionLibelle
     * @return Region
     */
    public function setRegionLibelle($regionLibelle)
    {
        $this->regionLibelle = $regionLibelle;

        return $this;
    }

    /**
     * Get regionLibelle
     *
     * @return string 
     */
    public function getRegionLibelle()
    {
        return $this->regionLibelle;
    }

    /**
     * Set regionCode
     *
     * @param string $regionLibelle
     * @return Region
     */
    public function setRegionCode($regionCode)
    {
        $this->regionCode = $regionCode;

        return $this;
    }

    /**
     * Get regionCode
     *
     * @return string
     */
    public function getRegionCode()
    {
        return $this->regionCode;
    }

    /**
     * Add districts
     *
     * @param \ZoneBundle\Entity\District $districts
     * @return Region
     */
    public function addDistrict(\ZoneBundle\Entity\District $districts)
    {
        $this->districts[] = $districts;

        return $this;
    }

    /**
     * Remove districts
     *
     * @param \ZoneBundle\Entity\District $districts
     */
    public function removeDistrict(\ZoneBundle\Entity\District $districts)
    {
        $this->districts->removeElement($districts);
    }

    /**
     * Get districts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDistricts()
    {
        return $this->districts;
    }
}
