<?php

namespace Proc\IndicateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mode_calcul
 *
 * @ORM\Table(name="mode_calcul")
 * @ORM\Entity(repositoryClass="Proc\IndicateurBundle\Repository\Mode_calculRepository")
 */
class Mode_calcul
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
     * @ORM\Column(name="libelle_Mode_calcul", type="string", length=88, unique=true)
     */
    private $libelleModeCalcul;

    /**
     * @ORM\OneToMany(targetEntity="Proc\IndicateurBundle\Entity\Indicateur",mappedBy="modeCalcul",cascade={"persist","remove"})
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
     * Set libelleModeCalcul
     *
     * @param string $libelleModeCalcul
     * @return Mode_calcul
     */
    public function setLibelleModeCalcul($libelleModeCalcul)
    {
        $this->libelleModeCalcul = $libelleModeCalcul;

        return $this;
    }

    /**
     * Get libelleModeCalcul
     *
     * @return string 
     */
    public function getLibelleModeCalcul()
    {
        return $this->libelleModeCalcul;
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
     * @return Mode_calcul
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
