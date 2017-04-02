<?php

namespace Proc\IndicateurBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Indicateur
 *
 * @ORM\Table(name="indicateur")
 * @ORM\Entity(repositoryClass="Proc\IndicateurBundle\Repository\IndicateurRepository")
 */
class Indicateur
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
     * @ORM\Column(name="libelleIndicateur", type="string", length=92, unique=true)
     */
    private $libelleIndicateur;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionIndicateur", type="text", length=255, unique=false, nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="Proc\IndicateurBundle\Entity\Type",cascade={"persist"})
     */
    private $types;

    /**
     * @ORM\ManyToOne(targetEntity="Proc\IndicateurBundle\Entity\Activite",cascade={"persist"})
     */
    private $activite;

    /**
     * @ORM\ManyToOne(targetEntity="Proc\IndicateurBundle\Entity\Nature",cascade={"persist"},cascade={"persist"})
     */
    private $nature;

    /**
     * @ORM\ManyToOne(targetEntity="Proc\IndicateurBundle\Entity\Mode_calcul",cascade={"persist"})
     */
    private $modeCalcul;

    /**
     * @ORM\ManyToMany(targetEntity="Proc\IndicateurBundle\Entity\Subdivision",cascade={"persist"})
     */
    private $subdivisions;

    /**
     * @ORM\ManyToOne(targetEntity="Proc\IndicateurBundle\Entity\Periodicite",cascade={"persist"})
     */
    private $periodicite;

    /**
     * @ORM\ManyToOne(targetEntity="Proc\IndicateurBundle\Entity\SousSecteur",cascade={"persist"})
     */
    private $sousSecteur;

    /**
     * @ORM\OneToMany(targetEntity="ProjetBundle\Entity\Descriptif_par_ui",mappedBy="indicateur", cascade={"remove"})
     */
    private $descriptif_par_ui;

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
     * Set description
     *
     * @param string $description
     * @return Indicateur
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

       
    /**
     * Set nature
     *
     * @param \Proc\IndicateurBundle\Entity\Nature $nature
     * @return Indicateur
     */
    public function setNature(\Proc\IndicateurBundle\Entity\Nature $nature = null)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return \Proc\IndicateurBundle\Entity\Nature 
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set modeCalcul
     *
     * @param \Proc\IndicateurBundle\Entity\Mode_calcul $modeCalcul
     * @return Indicateur
     */
    public function setModeCalcul(\Proc\IndicateurBundle\Entity\Mode_calcul $modeCalcul = null)
    {
        $this->modeCalcul = $modeCalcul;

        return $this;
    }

    /**
     * Get modeCalcul
     *
     * @return \Proc\IndicateurBundle\Entity\Mode_calcul 
     */
    public function getModeCalcul()
    {
        return $this->modeCalcul;
    }

    /**
     * Set periodicite
     *
     * @param \Proc\IndicateurBundle\Entity\Periodicite $periodicite
     * @return Indicateur
     */
    public function setPeriodicite(\Proc\IndicateurBundle\Entity\Periodicite $periodicite = null)
    {
        $this->periodicite = $periodicite;

        return $this;
    }

    /**
     * Get periodicite
     *
     * @return \Proc\IndicateurBundle\Entity\Periodicite 
     */
    public function getPeriodicite()
    {
        return $this->periodicite;
    }

    /**
     * Set sousSecteur
     *
     * @param \Proc\IndicateurBundle\Entity\SousSecteur $sousSecteur
     * @return Indicateur
     */
    public function setSousSecteur(\Proc\IndicateurBundle\Entity\SousSecteur $sousSecteur = null)
    {
        $this->sousSecteur = $sousSecteur;

        return $this;
    }

    /**
     * Get sousSecteur
     *
     * @return \Proc\IndicateurBundle\Entity\SousSecteur 
     */
    public function getSousSecteur()
    {
        return $this->sousSecteur;
    }

    /**
     * Set activite
     *
     * @param \Proc\IndicateurBundle\Entity\Activite $activite
     * @return Indicateur
     */
    public function setActivite(\Proc\IndicateurBundle\Entity\Activite $activite = null)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return \Proc\IndicateurBundle\Entity\Activite 
     */
    public function getActivite()
    {
        return $this->activite;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->types = new ArrayCollection();
        $this->subdivisions = new ArrayCollection();
    }

    /**
     * Add types
     *
     * @param \Proc\IndicateurBundle\Entity\Type $types
     * @return Indicateur
     */
    public function addType(\Proc\IndicateurBundle\Entity\Type $types)
    {
        $this->types[] = $types;

        return $this;
    }

    /**
     * Remove types
     *
     * @param \Proc\IndicateurBundle\Entity\Type $types
     */
    public function removeType(\Proc\IndicateurBundle\Entity\Type $types)
    {
        $this->types->removeElement($types);
    }

    /**
     * Get types
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTypes()
    {
        return $this->types;
    }



    /**
     * Add subdivisions
     *
     * @param \Proc\IndicateurBundle\Entity\Subdivision $subdivisions
     * @return Indicateur
     */
    public function addSubdivision(\Proc\IndicateurBundle\Entity\Subdivision $subdivisions)
    {
        $this->subdivisions[] = $subdivisions;

        return $this;
    }

    /**
     * Remove subdivisions
     *
     * @param \Proc\IndicateurBundle\Entity\Subdivision $subdivisions
     */
    public function removeSubdivision(\Proc\IndicateurBundle\Entity\Subdivision $subdivisions)
    {
        $this->subdivisions->removeElement($subdivisions);
    }

    /**
     * Get subdivisions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubdivisions()
    {
        return $this->subdivisions;
    }

    /**
     * Set libelleIndicateur
     *
     * @param string $libelleIndicateur
     * @return Indicateur
     */
    public function setLibelleIndicateur($libelleIndicateur)
    {
        $this->libelleIndicateur = $libelleIndicateur;

        return $this;
    }

    /**
     * Get libelleIndicateur
     *
     * @return string 
     */
    public function getLibelleIndicateur()
    {
        return $this->libelleIndicateur;
    }
}
