<?php

namespace Proc\IndicateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousSecteur
 *
 * @ORM\Table(name="sous_secteur")
 * @ORM\Entity(repositoryClass="Proc\IndicateurBundle\Repository\SousSecteurRepository")
 */
class SousSecteur
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
     * @ORM\Column(name="libelleSousSecteur", type="string", length=64, unique=true)
     */
    private $libelleSousSecteur;

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
     * Set libelleSousSecteur
     *
     * @param string $libelleSousSecteur
     * @return SousSecteur
     */
    public function setLibelleSousSecteur($libelleSousSecteur)
    {
        $this->libelleSousSecteur = $libelleSousSecteur;

        return $this;
    }

    /**
     * Get libelleSousSecteur
     *
     * @return string 
     */
    public function getLibelleSousSecteur()
    {
        return $this->libelleSousSecteur;
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
     * @return SousSecteur
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
