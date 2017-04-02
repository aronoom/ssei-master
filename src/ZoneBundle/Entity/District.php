<?php

namespace ZoneBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * District
 *
 * @ORM\Table(name="district")
 * @ORM\Entity(repositoryClass="ZoneBundle\Repository\DistrictRepository")
 */
class District
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
     * @var int
     *
     * @ORM\Column(name="region_id", type="integer")
     */
    private $regionId;

    /**
     * @var string
     *
     * @ORM\Column(name="district_libelle", type="string", length=100)
     */
    private $districtLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="district_code", type="string", length=50)
     */
    private $districtCode;

    /**
     * @ORM\ManyToOne(targetEntity="Region", inversedBy="districts")
     * @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     */
    private $region;

    /**
     * @ORM\OneToMany(targetEntity="Commune", mappedBy="district", cascade={"persist","remove"})
     */
    private $communes;

    public function __construct()
    {
        $this->communes = new ArrayCollection();
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
     * Set districtLibelle
     *
     * @param string $districtLibelle
     * @return District
     */
    public function setDistrictLibelle($districtLibelle)
    {
        $this->districtLibelle = $districtLibelle;

        return $this;
    }

    /**
     * Get districtLibelle
     *
     * @return string 
     */
    public function getDistrictLibelle()
    {
        return $this->districtLibelle;
    }

    /**
     * Set regionId
     *
     * @param integer $regionId
     * @return District
     */
    public function setRegionId($regionId)
    {
        $this->regionId = $regionId;

        return $this;
    }

    /**
     * Get regionId
     *
     * @return integer 
     */
    public function getRegionId()
    {
        return $this->regionId;
    }

    /**
     * Set region
     *
     * @param \ZoneBundle\Entity\Region $region
     * @return District
     */
    public function setRegion(\ZoneBundle\Entity\Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \ZoneBundle\Entity\Region 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Add communes
     *
     * @param \ZoneBundle\Entity\District $communes
     * @return District
     */
    public function addCommune(\ZoneBundle\Entity\District $communes)
    {
        $this->communes[] = $communes;

        return $this;
    }

    /**
     * Remove communes
     *
     * @param \ZoneBundle\Entity\District $communes
     */
    public function removeCommune(\ZoneBundle\Entity\District $communes)
    {
        $this->communes->removeElement($communes);
    }

    /**
     * Get communes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommunes()
    {
        return $this->communes;
    }

    /**
     * Set districtCode
     *
     * @param string $districtCode
     * @return District
     */
    public function setDistrictCode($districtCode)
    {
        $this->districtCode = $districtCode;
    
        return $this;
    }

    /**
     * Get districtCode
     *
     * @return string 
     */
    public function getDistrictCode()
    {
        return $this->districtCode;
    }
}
