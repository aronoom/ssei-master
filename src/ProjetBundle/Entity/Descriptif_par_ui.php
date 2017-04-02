<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Descriptif_par_ui
 *
 * @ORM\Table(name="descriptif_par_ui")
 * @ORM\Entity(repositoryClass="ProjetBundle\Repository\Descriptif_par_uiRepository")
 */
class Descriptif_par_ui
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
     * @ORM\Column(name="explication_desc_par_ui", type="string", length=64, nullable=true)
     */
    private $explicationDescParUi;

    /**
     * @var int
     *
     * @ORM\Column(name="baseline_desc_par_ui", type="integer" ,options={"default" : 0})
     */
    private $baselineDescParUi;

    /**
     * @var int
     *
     * @ORM\Column(name="objectif_desc_par_ui", type="integer" , options={"default" : 0})
     */
    private $objectifDescParUi;

    /**
     * @var int
     *
     * @ORM\Column(name="real_cumul_par_ui", type="integer" ,options={"default" : 0})
     */
    private $realCumulParUi;

    /**
     * @ORM\ManyToMany(targetEntity="ZoneBundle\Entity\Commune",cascade={"persist"})
     */
    private $communes;

    /**
     * @ORM\ManyToMany(targetEntity="Proc\IndicateurBundle\Entity\Unite",cascade={"persist"})
     */
    private $unites;

    /**
     * @ORM\ManyToOne(targetEntity="Proc\IndicateurBundle\Entity\Indicateur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $indicateur;

    /**
    * @ORM\OneToMany(targetEntity="ProjetBundle\Entity\SituationAnnuelle",mappedBy="descriptifParUi", cascade={"persist","remove"})
    */
    private $situationAnnuelles;

    /**
     * @ORM\ManyToOne(targetEntity="ActiviteComposante", inversedBy="descriptifs",cascade={"persist"})
     *
     */
    private $activite;

    /**
     * @ORM\ManyToOne(targetEntity="ProjetBundle\Entity\Descriptif_projet", inversedBy="$descriptif_par_uis",cascade={"persist","remove"})
     *
     */
    private $descriptif_projet;

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
     * Set explicationDescParUi
     *
     * @param string $explicationDescParUi
     * @return Descriptif_par_ui
     */
    public function setExplicationDescParUi($explicationDescParUi)
    {
        $this->explicationDescParUi = $explicationDescParUi;

        return $this;
    }

    /**
     * Get explicationDescParUi
     *
     * @return string 
     */
    public function getExplicationDescParUi()
    {
        return $this->explicationDescParUi;
    }

    /**
     * Set baselineDescParUi
     *
     * @param integer $baselineDescParUi
     * @return Descriptif_par_ui
     */
    public function setBaselineDescParUi($baselineDescParUi)
    {
        $this->baselineDescParUi = $baselineDescParUi;

        return $this;
    }

    /**
     * Get baselineDescParUi
     *
     * @return integer 
     */
    public function getBaselineDescParUi()
    {
        return $this->baselineDescParUi;
    }

    /**
     * Set objectifDescParUi
     *
     * @param integer $objectifDescParUi
     * @return Descriptif_par_ui
     */
    public function setObjectifDescParUi($objectifDescParUi)
    {
        $this->objectifDescParUi = $objectifDescParUi;

        return $this;
    }

    /**
     * Get objectifDescParUi
     *
     * @return integer 
     */
    public function getObjectifDescParUi()
    {
        return $this->objectifDescParUi;
    }

    /**
     * Set realCumulParUi
     *
     * @param integer $realCumulParUi
     * @return Descriptif_par_ui
     */
    public function setRealCumulParUi($realCumulParUi)
    {
        $this->realCumulParUi = $realCumulParUi;

        return $this;
    }

    /**
     * Get realCumulParUi
     *
     * @return integer 
     */
    public function getRealCumulParUi()
    {
        return $this->realCumulParUi;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->communes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add communes
     *
     * @param \ZoneBundle\Entity\Commune $communes
     * @return Descriptif_par_ui
     */
    public function addCommune(\ZoneBundle\Entity\Commune $communes)
    {
        $this->communes[] = $communes;

        return $this;
    }

    /**
     * Remove communes
     *
     * @param \ZoneBundle\Entity\Commune $communes
     */
    public function removeCommune(\ZoneBundle\Entity\Commune $communes)
    {
        $this->communes->removeElement($communes);
    }

    public function removeCommunes()
    {
        $this->communes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get communes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommunes()
    {
        return $this->communes;
    }

    /**
     * Add unites
     *
     * @param \Proc\IndicateurBundle\Entity\Unite $unites
     * @return Descriptif_par_ui
     */
    public function addUnite(\Proc\IndicateurBundle\Entity\Unite $unites)
    {
        $this->unites[] = $unites;

        return $this;
    }

    /**
     * Remove unites
     *
     * @param \Proc\IndicateurBundle\Entity\Unite $unites
     */
    public function removeUnite(\Proc\IndicateurBundle\Entity\Unite $unites)
    {
        $this->unites->removeElement($unites);
    }

    public function removeUnites()
    {
        $this->unites = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * Get unites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUnites()
    {
        return $this->unites;
    }

    

    /**
     * Set indicateur
     *
     * @param \Proc\IndicateurBundle\Entity\Indicateur $indicateur
     * @return Descriptif_par_ui
     */
    public function setIndicateur(\Proc\IndicateurBundle\Entity\Indicateur $indicateur)
    {
        $this->indicateur = $indicateur;

        return $this;
    }

    /**
     * Get indicateur
     *
     * @return \Proc\IndicateurBundle\Entity\Indicateur 
     */
    public function getIndicateur()
    {
        return $this->indicateur;
    }

    /**
     * Add situationAnnuelles
     *
     * @param \ProjetBundle\Entity\SituationAnnuelle $situationAnnuelles
     * @return Descriptif_par_ui
     */
    public function addSituationAnnuelle(\ProjetBundle\Entity\SituationAnnuelle $situationAnnuelles)
    {
        $this->situationAnnuelles[] = $situationAnnuelles;

        return $this;
    }

    /**
     * Remove situationAnnuelles
     *
     * @param \ProjetBundle\Entity\SituationAnnuelle $situationAnnuelles
     */
    public function removeSituationAnnuelle(\ProjetBundle\Entity\SituationAnnuelle $situationAnnuelles)
    {
        $this->situationAnnuelles->removeElement($situationAnnuelles);
    }

    /**
     * Get situationAnnuelles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSituationAnnuelles()
    {
        return $this->situationAnnuelles;
    }

    /**
     * Set activite
     *
     * @param \ProjetBundle\Entity\ActiviteComposante $activite
     * @return Descriptif_par_ui
     */
    public function setActivite(\ProjetBundle\Entity\ActiviteComposante $activite = null)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return \ProjetBundle\Entity\ActiviteComposante 
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Set descriptif_projet
     *
     * @param \ProjetBundle\Entity\Descriptif_projet $descriptifProjet
     * @return Descriptif_par_ui
     */
    public function setDescriptifProjet(\ProjetBundle\Entity\Descriptif_projet $descriptifProjet = null)
    {
        $this->descriptif_projet = $descriptifProjet;

        return $this;
    }

    /**
     * Get descriptif_projet
     *
     * @return \ProjetBundle\Entity\Descriptif_projet 
     */
    public function getDescriptifProjet()
    {
        return $this->descriptif_projet;
    }
}
