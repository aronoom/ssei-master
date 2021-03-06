<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="ProjetBundle\Repository\ProjetRepository")
 */
class Projet
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
     * @ORM\Column(name="nom_projet", type="string", length=100)
     */
    private $nomProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="objectif_projet", type="text")
     */
    private $objectifProjet;

    /**
     * @var datetime
     *
     * @ORM\Column(name="date_projet", type="datetime")
     */
    protected $dateProjet;

    /**
     * @ORM\ManyToMany(targetEntity="ZoneBundle\Entity\Region", cascade={"persist"}, )
     */
    private $regions;

    /**
     * @ORM\ManyToMany(targetEntity="Proc\UserBundle\Entity\Entite", mappedBy="projets", cascade={"persist"}, )
     */
    private $entites;

    /**
     * @ORM\OneToMany(targetEntity="Composante", mappedBy="projet", cascade={"persist","remove"}, )
     */
    private $composantes;

    /**
     * @ORM\OneToMany(targetEntity="ProjetBundle\Entity\Descriptif_projet", mappedBy="projet", cascade={"persist","remove"})
     */
    private $descriptifProjets;


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
     * Set nomProjet
     *
     * @param string $nomProjet
     * @return Projet
     */
    public function setNomProjet($nomProjet)
    {
        $this->nomProjet = $nomProjet;

        return $this;
    }

    /**
     * Get nomProjet
     *
     * @return string
     */
    public function getNomProjet()
    {
        return $this->nomProjet;
    }

    /**
     * Set objectifProjet
     *
     * @param string $objectifProjet
     * @return Projet
     */
    public function setObjectifProjet($objectifProjet)
    {
        $this->objectifProjet = $objectifProjet;

        return $this;
    }

    /**
     * Get objectifProjet
     *
     * @return string
     */
    public function getObjectifProjet()
    {
        return $this->objectifProjet;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dateProjet = new \DateTime();
        $this->regions = new ArrayCollection();
        $this->entites = new ArrayCollection();
        $this->composantes = new ArrayCollection();
    }

    /**
     * Add regions
     *
     * @param \ZoneBundle\Entity\Region $regions
     * @return Projet
     */
    public function addRegion(\ZoneBundle\Entity\Region $regions)
    {
        $this->regions[] = $regions;

        return $this;
    }

    /**
     * Remove regions
     *
     * @param \ZoneBundle\Entity\Region $regions
     */
    public function removeRegion(\ZoneBundle\Entity\Region $regions)
    {
        $this->regions->removeElement($regions);
    }

    /**
     * Get regions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * Add entites
     *
     * @param \Proc\UserBundle\Entity\Entite $entites
     * @return Projet
     */
    public function addEntite(\Proc\UserBundle\Entity\Entite $entites)
    {
        $this->entites[] = $entites;

        return $this;
    }

    /**
     * Remove entites
     *
     * @param \Proc\UserBundle\Entity\Entite $entites
     */
    public function removeEntite(\Proc\UserBundle\Entity\Entite $entites)
    {
        $this->entites->removeElement($entites);
    }

    /**
     * Get entites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEntites()
    {
        return $this->entites;
    }

    /**
     * Add composantes
     *
     * @param \ProjetBundle\Entity\Composante $composantes
     * @return Projet
     */
    public function addComposante(\ProjetBundle\Entity\Composante $composantes)
    {
        $this->composantes[] = $composantes;

        return $this;
    }

    /**
     * Remove composantes
     *
     * @param \ProjetBundle\Entity\Composante $composantes
     */
    public function removeComposante(\ProjetBundle\Entity\Composante $composantes)
    {
        $this->composantes->removeElement($composantes);
    }

    /**
     * Get composantes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComposantes()
    {
        return $this->composantes;
    }

    /**
     * Set dateProjet
     *
     * @param \DateTime $dateProjet
     * @return Projet
     */
    public function setDateProjet($dateProjet)
    {
        $this->dateProjet = $dateProjet;

        return $this;
    }

    /**
     * Get dateProjet
     *
     * @return \DateTime
     */
    public function getDateProjet()
    {
        return $this->dateProjet;
    }

    /**
     * Add descriptifProjets
     *
     * @param \ProjetBundle\Entity\Descriptif_projet $descriptifProjets
     * @return Projet
     */
    public function addDescriptifProjet(\ProjetBundle\Entity\Descriptif_projet $descriptifProjets)
    {
        $this->descriptifProjets[] = $descriptifProjets;

        return $this;
    }

    /**
     * Remove descriptifProjets
     *
     * @param \ProjetBundle\Entity\Descriptif_projet $descriptifProjets
     */
    public function removeDescriptifProjet(\ProjetBundle\Entity\Descriptif_projet $descriptifProjets)
    {
        $this->descriptifProjets->removeElement($descriptifProjets);
    }

    /**
     * Get descriptifProjets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDescriptifProjets()
    {
        return $this->descriptifProjets;
    }
}
