<?php
namespace Proc\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;

/**
* @ORM\Entity
* @ORM\Table(name="agent")
*/
class Agent extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @ORM\Column(type="integer",nullable=true) 
     * @Assert\Regex("/^[0-9 ]+$/") 
     * @Assert\Regex(
     *     pattern="/\t | \b/",
     *     match=false,
     *     message="Espace blanc ou tabulation non-autorisé"
     * )     
    */

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     *
     * @var string
     */
    private $prenom_user;


    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     *
     * @var string
     */
    private $contactAgent;
    
     /**
     * @ORM\Column(type="string", length=30, nullable=true)
     *
     * @var string
     * @Assert\Regex("/^[a-zA-Z0-9 ]+$/",
     *     pattern=true,
     *     message="Cette valeur ne doit pas contenir des métacaractères."
     * )    
     */
    protected $adresseAgent;

    /**
     * @ORM\ManyToMany(targetEntity="Proc\UserBundle\Entity\Entite", cascade={"persist"})
     */
    private $entites;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $imageName;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     *
     * @var string
     */
    private $fonction_user;


    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     *
     * @var string
     */
    private $service_user;


    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     *
     * @var string
     */
    private $direction_user;

    /**
     * @ORM\Column(type="boolean", nullable=true, options ={"default" : 0})
     *
     */
    private $status_user;

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Product
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageName
     *
     * @return Product
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageName()
    {
        return $this->imageName;
    }


    /**
     * Set contactAgent
     *
     * @param integer $contactAgent
     * @return Agent
     */
    public function setContactAgent($contactAgent)
    {
        $this->contactAgent = $contactAgent;

        return $this;
    }

    /**
     * Get contactAgent
     *
     * @return integer 
     */
    public function getContactAgent()
    {
        return $this->contactAgent;
    }

    /**
     * Set adresseAgent
     *
     * @param string $adresseAgent
     * @return Agent
     */
    public function setAdresseAgent($adresseAgent)
    {
        $this->adresseAgent = $adresseAgent;

        return $this;
    }

    /**
     * Get adresseAgent
     *
     * @return string 
     */
    public function getAdresseAgent()
    {
        return $this->adresseAgent;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Agent
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set fonction_user
     *
     * @param string $fonctionUser
     * @return Agent
     */
    public function setFonctionUser($fonctionUser)
    {
        $this->fonction_user = $fonctionUser;

        return $this;
    }

    /**
     * Get fonction_user
     *
     * @return string 
     */
    public function getFonctionUser()
    {
        return $this->fonction_user;
    }

    /**
     * Set service_user
     *
     * @param string $serviceUser
     * @return Agent
     */
    public function setServiceUser($serviceUser)
    {
        $this->service_user = $serviceUser;

        return $this;
    }

    /**
     * Get service_user
     *
     * @return string 
     */
    public function getServiceUser()
    {
        return $this->service_user;
    }

    /**
     * Set direction_user
     *
     * @param string $directionUser
     * @return Agent
     */
    public function setDirectionUser($directionUser)
    {
        $this->direction_user = $directionUser;

        return $this;
    }

    /**
     * Get direction_user
     *
     * @return string 
     */
    public function getDirectionUser()
    {
        return $this->direction_user;
    }


    public function __construct()
    {
        parent::__construct();
        $this->entites = new ArrayCollection();
    }
    

    /**
     * Add entites
     *
     * @param \Proc\UserBundle\Entity\Entite $entites
     * @return Agent
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
     * Set status_user
     *
     * @param boolean $statusUser
     * @return Agent
     */
    public function setStatusUser($statusUser)
    {
        $this->status_user = $statusUser;

        return $this;
    }

    /**
     * Get status_user
     *
     * @return boolean 
     */
    public function getStatusUser()
    {
        return $this->status_user;
    }

    /**
     * Set prenom_user
     *
     * @param string $prenomUser
     * @return Agent
     */
    public function setPrenomUser($prenomUser)
    {
        $this->prenom_user = $prenomUser;

        return $this;
    }

    /**
     * Get prenom_user
     *
     * @return string 
     */
    public function getPrenomUser()
    {
        return $this->prenom_user;
    }
}
