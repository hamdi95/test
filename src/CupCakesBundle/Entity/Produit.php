<?php

namespace CupCakesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="CupCakesBundle\Repository\produitRepository")
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="idProd", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomProd", type="string", length=500, nullable=true)
     */
    private $nomProd;

    /**
     * @var string
     *
     * @ORM\Column(name="qteStockProd", type="float", nullable=true)
     */
    private $qteStockProd;

    /**
     * @var float
     *
     * @ORM\Column(name="typeProd", type="string",length=255, nullable=true)
     */
    private $typeProd;

    /**
     * @var float
     *
     * @ORM\Column(name="prixProd", type="float", nullable=true)
     */
    private $prixProd;

    /**
     * @var string
     *
     * @ORM\Column(name="etatProd", type="string", length=255, nullable=true)
     */
    private $etatProd;

    /**
     * @ORM\ManyToOne(targetEntity="CupCakesBundle\Entity\User")
     *
     * @ORM\JoinColumn(name="idUser",referencedColumnName="id")
     */
    private $idUser;

    /**
     * @ORM\ManyToOne(targetEntity="CupCakesBundle\Entity\Categorie")
     *
     * @ORM\JoinColumn(name="idCat",referencedColumnName="idCat")
     */
    private $idCat;

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
     * Set nomProd
     *
     * @param string $nomProd
     *
     * @return produit
     */
    public function setNomProd($nomProd)
    {
        $this->nomProd = $nomProd;
    
        return $this;
    }

    /**
     * Get nomProd
     *
     * @return string
     */
    public function getNomProd()
    {
        return $this->nomProd;
    }

    /**
     * Set qteStockProd
     *
     * @param float $qteStockProd
     *
     * @return produit
     */
    public function setQteStockProd($qteStockProd)
    {
        $this->qteStockProd = $qteStockProd;
    
        return $this;
    }

    /**
     * Get qteStockProd
     *
     * @return float
     */
    public function getQteStockProd()
    {
        return $this->qteStockProd;
    }

    /**
     * Set prixProd
     *
     * @param float $prixProd
     *
     * @return produit
     */
    public function setPrixProd($prixProd)
    {
        $this->prixProd = $prixProd;
    
        return $this;
    }

    /**
     * Get prixProd
     *
     * @return float
     */
    public function getPrixProd()
    {
        return $this->prixProd;
    }

    /**
     * Set etatProd
     *
     * @param string $etatProd
     *
     * @return produit
     */
    public function setEtatProd($etatProd)
    {
        $this->etatProd = $etatProd;
    
        return $this;
    }

    /**
     * Get etatProd
     *
     * @return string
     */
    public function getEtatProd()
    {
        return $this->etatProd;
    }

    /**
     * Set idUser
     *
     * @param \CupCakesBundle\Entity\User $idUser
     *
     * @return produit
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

    /**
     * Set idCat
     *
     * @param \CupCakesBundle\Entity\Categorie $idCat
     *
     * @return produit
     */
    public function setIdCat(\CupCakesBundle\Entity\Categorie $idCat = null)
    {
        $this->idCat = $idCat;
    
        return $this;
    }

    /**
     * Get idCat
     *
     * @return \CupCakesBundle\Entity\Categorie
     */
    public function getIdCat()
    {
        return $this->idCat;
    }

    /**
     * Set typeProd
     *
     * @param string $typeProd
     *
     * @return Produit
     */
    public function setTypeProd($typeProd)
    {
        $this->typeProd = $typeProd;
    
        return $this;
    }

    /**
     * Get typeProd
     *
     * @return string
     */
    public function getTypeProd()
    {
        return $this->typeProd;
    }
}
