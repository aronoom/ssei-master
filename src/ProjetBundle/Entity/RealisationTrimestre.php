<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RealisationTrimestre
 *
 * @ORM\Table(name="realisation_trimestre")
 * @ORM\Entity(repositoryClass="ProjetBundle\Repository\RealisationTrimestreRepository")
 */
class RealisationTrimestre
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
     * @ORM\Column(name="valeur", type="decimal", precision=10, scale=0)
     */
    private $valeur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="ProjetBundle\Entity\SituationAnnuelle",inversedBy="realisationTrimestre")
     * @ORM\JoinColumn(nullable=false)
    */
    private $situationAnnuelle;

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
     * Set valeur
     *
     * @param string $valeur
     * @return RealisationTrimestre
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return string 
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return RealisationTrimestre
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set situationAnnuelle
     *
     * @param \ProjetBundle\Entity\SituationAnnuelle $situationAnnuelle
     * @return RealisationTrimestre
     */
    public function setSituationAnnuelle(\ProjetBundle\Entity\SituationAnnuelle $situationAnnuelle)
    {
        $this->situationAnnuelle = $situationAnnuelle;

        return $this;
    }

    /**
     * Get situationAnnuelle
     *
     * @return \ProjetBundle\Entity\SituationAnnuelle 
     */
    public function getSituationAnnuelle()
    {
        return $this->situationAnnuelle;
    }
}
