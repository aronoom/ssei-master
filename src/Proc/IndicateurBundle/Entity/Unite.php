<?php

namespace Proc\IndicateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unite
 *
 * @ORM\Table(name="unite")
 * @ORM\Entity(repositoryClass="Proc\IndicateurBundle\Repository\UniteRepository")
 */
class Unite
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
     * @ORM\Column(name="libelleUnite", type="string", length=53, unique=true)
     */
    private $libelleUnite;


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
     * Set libelleUnite
     *
     * @param string $libelleUnite
     * @return Unite
     */
    public function setLibelleUnite($libelleUnite)
    {
        $this->libelleUnite = $libelleUnite;

        return $this;
    }

    /**
     * Get libelleUnite
     *
     * @return string 
     */
    public function getLibelleUnite()
    {
        return $this->libelleUnite;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->descriptif_par_ui = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
