<?php

namespace Proc\IndicateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activite
 *
 * @ORM\Table(name="activite")
 * @ORM\Entity(repositoryClass="Proc\IndicateurBundle\Repository\ActiviteRepository")
 */
class Activite
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
     * @ORM\Column(name="libelleActivite", type="string", length=76, unique=true)
     */
    private $libelleActivite;

    /**
     * @ORM\OneToMany(targetEntity="Proc\IndicateurBundle\Entity\Indicateur",mappedBy="activite",cascade={"persist","remove"})
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
     * Set libelleActivite
     *
     * @param string $libelleActivite
     * @return Activite
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
     * @return Activite
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
