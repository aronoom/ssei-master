<?php

namespace ProjetBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Descriptif_projet
 *
 * @ORM\Table(name="descriptif_projet")
 * @ORM\Entity(repositoryClass="ProjetBundle\Repository\Descriptif_projetRepository")
 */
class Descriptif_projet
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
     * @ORM\ManyToOne(targetEntity="ProjetBundle\Entity\Projet", inversedBy="descriptif_projets", cascade={"persist"})
     */
    private $projet;

    /**
     * @ORM\OneToMany(targetEntity="ProjetBundle\Entity\Descriptif_par_ui",mappedBy="descriptif_projet", cascade={"persist","remove"})
     */
    private $descriptif_par_uis;

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
     * Set projet
     *
     * @param \ProjetBundle\Entity\Projet $projet
     * @return Descriptif_projet
     */
    public function setProjet(\ProjetBundle\Entity\Projet $projet = null)
    {
        $this->projet = $projet;

        return $this;
    }

    /**
     * Get projet
     *
     * @return \ProjetBundle\Entity\Projet 
     */
    public function getProjet()
    {
        return $this->projet;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->descriptif_par_uis = new ArrayCollection();
    }
    

    

    /**
     * Add descriptif_par_uis
     *
     * @param \ProjetBundle\Entity\Descriptif_par_ui $descriptifParUis
     * @return Descriptif_projet
     */
    public function addDescriptifParUi(\ProjetBundle\Entity\Descriptif_par_ui $descriptifParUis)
    {
        $this->descriptif_par_uis[] = $descriptifParUis;

        return $this;
    }

    /**
     * Remove descriptif_par_uis
     *
     * @param \ProjetBundle\Entity\Descriptif_par_ui $descriptifParUis
     */
    public function removeDescriptifParUi(\ProjetBundle\Entity\Descriptif_par_ui $descriptifParUis)
    {
        $this->descriptif_par_uis->removeElement($descriptifParUis);
    }

    /**
     * Get descriptif_par_uis
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDescriptifParUis()
    {
        return $this->descriptif_par_uis;
    }
}
