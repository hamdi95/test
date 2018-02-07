<?php

namespace CupCakesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity(repositoryClass="CupCakesBundle\Repository\formationRepository")
 */
class Formation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idFor", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomFor", type="string", length=500, nullable=true)
     */
    private $nomFor;

    /**
     * @var string
     *
     * @ORM\Column(name="etatFor", type="string", length=255, nullable=true)
     */
    private $etatFor;

    /**
     * @ORM\ManyToOne(targetEntity="CupCakesBundle\Entity\User")
     *
     * @ORM\JoinColumn(name="idUser",referencedColumnName="id")
     */
    private $idUser;

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
     * Set nomFor
     *
     * @param string $nomFor
     *
     * @return formation
     */
    public function setNomFor($nomFor)
    {
        $this->nomFor = $nomFor;
    
        return $this;
    }

    /**
     * Get nomFor
     *
     * @return string
     */
    public function getNomFor()
    {
        return $this->nomFor;
    }

    /**
     * Set etatFor
     *
     * @param string $etatFor
     *
     * @return formation
     */
    public function setEtatFor($etatFor)
    {
        $this->etatFor = $etatFor;
    
        return $this;
    }

    /**
     * Get etatFor
     *
     * @return string
     */
    public function getEtatFor()
    {
        return $this->etatFor;
    }

    /**
     * Set idUser
     *
     * @param \CupCakesBundle\Entity\User $idUser
     *
     * @return formation
     */
    public function setIdUser(\CupCakesBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;
    
        return $this;
    }

    /**
     * Get idUser
     *
     * @return \CupCakesBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
