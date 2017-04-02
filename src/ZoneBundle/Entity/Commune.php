<?php

namespace ZoneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commune
 *
 * @ORM\Table(name="commune")
 * @ORM\Entity(repositoryClass="ZoneBundle\Repository\CommuneRepository")
 */
class Commune
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
     * @ORM\Column(name="commune_libelle", type="string", length=100)
     */
    private $communeLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="commune_code", type="string", length=50)
     */
    private $communeCode;

    /**
     * @var int
     *
     * @ORM\Column(name="district_id", type="integer")
     */
    private $districtId;

    /**
     * @ORM\ManyToOne(targetEntity="District", inversedBy="communes")
     * @ORM\JoinColumn(name="district_id", referencedColumnName="id")
     */
    private $district;
    
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
     * Set communeLibelle
     *
     * @param string $communeLibelle
     * @return Commune
     */
    public function setCommuneLibelle($communeLibelle)
    {
        $this->communeLibelle = $communeLibelle;

        return $this;
    }

    /**
     * Get communeLibelle
     *
     * @return string 
     */
    public function getCommuneLibelle()
    {
        return $this->communeLibelle;
    }

    /**
     * Set districtId
     *
     * @param integer $districtId
     * @return Commune
     */
    public function setDistrictId($districtId)
    {
        $this->districtId = $districtId;

        return $this;
    }

    /**
     * Get districtId
     *
     * @return integer
     */
    public function getDistrictId()
    {
        return $this->districtId;
    }

    /**
     * Set district
     *
     * @param \ZoneBundle\Entity\District $district
     * @return Commune
     */
    public function setDistrict(\ZoneBundle\Entity\District $district = null)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Get district
     *
     * @return \ZoneBundle\Entity\District 
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set communeCode
     *
     * @param string $communeCode
     * @return Commune
     */
    public function setCommuneCode($communeCode)
    {
        $this->communeCode = $communeCode;
    
        return $this;
    }

    /**
     * Get communeCode
     *
     * @return string 
     */
    public function getCommuneCode()
    {
        return $this->communeCode;
    }
}
