<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActiviteComposante
 *
 * @ORM\Table(name="activite_composante")
 * @ORM\Entity(repositoryClass="ProjetBundle\Repository\ActiviteComposanteRepository")
 */
class ActiviteComposante
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
     * @ORM\Column(name="libelleActivite", type="string", length=100)
     */
    private $libelleActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="codeActivite", type="string", length=10000000)
     */
    private $codeActivite;

    /**
     * @ORM\ManyToOne(targetEntity="Composante", inversedBy="activites" )
     * @ORM\JoinColumn(name="composante_id", referencedColumnName="id")
     */
    private $composante;

    /**
     * @ORM\OneToMany(targetEntity="Descriptif_par_ui", mappedBy="activite" , cascade={"persist","remove"} )
     */
    private $descriptifs;


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
     * Set libelleActivite
     *
     * @param string $libelleActivite
     * @return ActiviteComposante
     */
    public function setLibelleActivite($libelleActivite)
    {
        $this->libelleActivite = $libelleActivite;
    
        return $this;
    }

    /**
     * Get libelleActivite
     *
     * @return string 
     */
    public function getLibelleActivite()
    {
        return $this->libelleActivite;
    }

    /**
     * Set composante
     *
     * @param \ProjetBundle\Entity\Composante $composante
     * @return ActiviteComposante
     */
    public function setComposante(\ProjetBundle\Entity\Composante $composante = null)
    {
        $this->composante = $composante;
    
        return $this;
    }

    /**
     * Get composante
     *
     * @return \ProjetBundle\Entity\Composante 
     */
    public function getComposante()
    {
        return $this->composante;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->descriptifs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add descriptifs
     *
     * @param \ProjetBundle\Entity\Descriptif_par_ui $descriptifs
     * @return ActiviteComposante
     */
    public function addDescriptif(\ProjetBundle\Entity\Descriptif_par_ui $descriptifs)
    {
        $this->descriptifs[] = $descriptifs;

        return $this;
    }

    /**
     * Remove descriptifs
     *
     * @param \ProjetBundle\Entity\Descriptif_par_ui $descriptifs
     */
    public function removeDescriptif(\ProjetBundle\Entity\Descriptif_par_ui $descriptifs)
    {
        $this->descriptifs->removeElement($descriptifs);
    }

    /**
     * Get descriptifs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDescriptifs()
    {
        return $this->descriptifs;
    }

    /**
     * Set codeActivite
     *
     * @param string $codeActivite
     * @return ActiviteComposante
     */
    public function setCodeActivite($codeActivite)
    {
        $this->codeActivite = $codeActivite;

        return $this;
    }

    /**
     * Get codeActivite
     *
     * @return string 
     */
    public function getCodeActivite()
    {
        return $this->codeActivite;
    }
}
