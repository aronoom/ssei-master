<?php

namespace Proc\IndicateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subdivision
 *
 * @ORM\Table(name="subdivision")
 * @ORM\Entity(repositoryClass="Proc\IndicateurBundle\Repository\SubdivisionRepository")
 */
class Subdivision
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
     * @ORM\Column(name="libelleSubdivision", type="string", length=64, unique=true)
     */
    private $libelleSubdivision;

    /**
     * @ORM\OneToMany(targetEntity="Proc\IndicateurBundle\Entity\Indicateur",mappedBy="sousSecteur",cascade={"persist","remove"})
     */
    private $indicateurs;


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
     * Set libelleSubdivision
     *
     * @param string $libelleSubdivision
     * @return Subdivision
     */
    public function setLibelleSubdivision($libelleSubdivision)
    {
        $this->libelleSubdivision = $libelleSubdivision;

        return $this;
    }

    /**
     * Get libelleSubdivision
     *
     * @return string 
     */
    public function getLibelleSubdivision()
    {
        return $this->libelleSubdivision;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->indicateurs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add indicateurs
     *
     * @param \Proc\IndicateurBundle\Entity\Indicateur $indicateurs
     * @return Subdivision
     */
    public function addIndicateur(\Proc\IndicateurBundle\Entity\Indicateur $indicateurs)
    {
        $this->indicateurs[] = $indicateurs;

        return $this;
    }

    /**
     * Remove indicateurs
     *
     * @param \Proc\IndicateurBundle\Entity\Indicateur $indicateurs
     */
    public function removeIndicateur(\Proc\IndicateurBundle\Entity\Indicateur $indicateurs)
    {
        $this->indicateurs->removeElement($indicateurs);
    }

    /**
     * Get indicateurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIndicateurs()
    {
        return $this->indicateurs;
    }
}
