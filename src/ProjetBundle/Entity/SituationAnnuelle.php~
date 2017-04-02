<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SituationAnnuelle
 *
 * @ORM\Table(name="situation_annuelle")
 * @ORM\Entity(repositoryClass="ProjetBundle\Repository\SituationAnnuelleRepository")
 */
class SituationAnnuelle
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
     * @ORM\Column(name="annee_sit_an_par_ui", type="string", length=4)
     */
    private $anneeSitAnParUi;

    /**
     * @var string
     *
     * @ORM\Column(name="valeur_cible", type="decimal", precision=10, scale=0)
     */
    private $valeurCible;

    /**
     * @var string
     *
     * @ORM\Column(name="real_glob_sit_an_par_ui", type="decimal", precision=10, scale=0)
     */
    private $realGlobSitAnParUi;

    /**
     * @var string
     *
     * @ORM\Column(name="realisation_cumule", type="decimal", precision=10, scale=0)
     */
    private $realisationCumule;

    /**
     * @var string
     *
     * @ORM\Column(name="ecart_annee", type="decimal", precision=10, scale=0)
     */
    private $ecartAnnee;

    /**
     * @ORM\OneToMany(targetEntity="ProjetBundle\Entity\RealisationTrimestre",mappedBy="situationAnnuelle",cascade={"remove"})
    */
    private $realisationTrimestres;

    /**
     * @ORM\OneToMany(targetEntity="ProjetBundle\Entity\ObjectifTrimestre",mappedBy="situationAnnuelle",cascade={"persist","remove"})
    */
    private $objectifTrimestres;

    /**
     * @ORM\ManyToOne(targetEntity="ProjetBundle\Entity\Descriptif_par_ui",inversedBy="situationAnnuelles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $descriptifParUi;


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
     * Set anneeSitAnParUi
     *
     * @param string $anneeSitAnParUi
     * @return SituationAnnuelle
     */
    public function setAnneeSitAnParUi($anneeSitAnParUi)
    {
        $this->anneeSitAnParUi = $anneeSitAnParUi;

        return $this;
    }

    /**
     * Get anneeSitAnParUi
     *
     * @return string 
     */
    public function getAnneeSitAnParUi()
    {
        return $this->anneeSitAnParUi;
    }

    /**
     * Set valeurCible
     *
     * @param string $valeurCible
     * @return SituationAnnuelle
     */
    public function setValeurCible($valeurCible)
    {
        $this->valeurCible = $valeurCible;

        return $this;
    }

    /**
     * Get valeurCible
     *
     * @return string 
     */
    public function getValeurCible()
    {
        return $this->valeurCible;
    }

    /**
     * Set realGlobSitAnParUi
     *
     * @param string $realGlobSitAnParUi
     * @return SituationAnnuelle
     */
    public function setRealGlobSitAnParUi($realGlobSitAnParUi)
    {
        $this->realGlobSitAnParUi = $realGlobSitAnParUi;

        return $this;
    }

    /**
     * Get realGlobSitAnParUi
     *
     * @return string 
     */
    public function getRealGlobSitAnParUi()
    {
        return $this->realGlobSitAnParUi;
    }

    /**
     * Set realisationCumule
     *
     * @param string $realisationCumule
     * @return SituationAnnuelle
     */
    public function setRealisationCumule($realisationCumule)
    {
        $this->realisationCumule = $realisationCumule;

        return $this;
    }

    /**
     * Get realisationCumule
     *
     * @return string 
     */
    public function getRealisationCumule()
    {
        return $this->realisationCumule;
    }

    /**
     * Set ecartAnnee
     *
     * @param string $ecartAnnee
     * @return SituationAnnuelle
     */
    public function setEcartAnnee($ecartAnnee)
    {
        $this->ecartAnnee = $ecartAnnee;

        return $this;
    }

    /**
     * Get ecartAnnee
     *
     * @return string 
     */
    public function getEcartAnnee()
    {
        return $this->ecartAnnee;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        
    }


    /**
     * Add realisationTrimestres
     *
     * @param \ProjetBundle\Entity\RealisationTrimestre $realisationTrimestres
     * @return SituationAnnuelle
     */
    public function addRealisationTrimestre(\ProjetBundle\Entity\RealisationTrimestre $realisationTrimestres)
    {
        $this->realisationTrimestres[] = $realisationTrimestres;

        return $this;
    }

    /**
     * Remove realisationTrimestres
     *
     * @param \ProjetBundle\Entity\RealisationTrimestre $realisationTrimestres
     */
    public function removeRealisationTrimestre(\ProjetBundle\Entity\RealisationTrimestre $realisationTrimestres)
    {
        $this->realisationTrimestres->removeElement($realisationTrimestres);
    }

    /**
     * Get realisationTrimestres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRealisationTrimestres()
    {
        return $this->realisationTrimestres;
    }

    /**
     * Add objectifTrimestres
     *
     * @param \ProjetBundle\Entity\ObjectifTrimestre $objectifTrimestres
     * @return SituationAnnuelle
     */
    public function addObjectifTrimestre(\ProjetBundle\Entity\ObjectifTrimestre $objectifTrimestres)
    {
        $this->objectifTrimestres[] = $objectifTrimestres;

        return $this;
    }

    /**
     * Remove objectifTrimestres
     *
     * @param \ProjetBundle\Entity\ObjectifTrimestre $objectifTrimestres
     */
    public function removeObjectifTrimestre(\ProjetBundle\Entity\ObjectifTrimestre $objectifTrimestres)
    {
        $this->objectifTrimestres->removeElement($objectifTrimestres);
    }

    /**
     * Get objectifTrimestres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getObjectifTrimestres()
    {
        return $this->objectifTrimestres;
    }

    /**
     * Set descriptifParUi
     *
     * @param \ProjetBundle\Entity\Descriptif_par_ui $descriptifParUi
     * @return SituationAnnuelle
     */
    public function setDescriptifParUi(\ProjetBundle\Entity\Descriptif_par_ui $descriptifParUi)
    {
        $this->descriptifParUi = $descriptifParUi;

        return $this;
    }

    /**
     * Get descriptifParUi
     *
     * @return \ProjetBundle\Entity\Descriptif_par_ui 
     */
    public function getDescriptifParUi()
    {
        return $this->descriptifParUi;
    }
}
