<?php

namespace Proc\IndicateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Periodicite
 *
 * @ORM\Table(name="periodicite")
 * @ORM\Entity(repositoryClass="Proc\IndicateurBundle\Repository\PeriodiciteRepository")
 */
class Periodicite
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
     * @ORM\Column(name="libellePeriodicite", type="string", length=64, unique=true)
     */
    private $libellePeriodicite;

    /**
     * @ORM\OneToMany(targetEntity="Proc\IndicateurBundle\Entity\Indicateur",mappedBy="periodicite",cascade={"persist","remove"})
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
     * Set libellePeriodicite
     *
     * @param string $libellePeriodicite
     * @return Periodicite
     */
    public function setLibellePeriodicite($libellePeriodicite)
    {
        $this->libellePeriodicite = $libellePeriodicite;

        return $this;
    }

    /**
     * Get libellePeriodicite
     *
     * @return string 
     */
    public function getLibellePeriodicite()
    {
        return $this->libellePeriodicite;
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
     * @return Periodicite
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
