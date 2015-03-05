<?php

namespace CagatayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kategori
 *
 * @ORM\Table(name="kategoriler")
 * @ORM\Entity
 */
class Kategori
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="baslik", type="string", length=255)
     */
    private $baslik;

    /**
     * @var string
     *
     * @ORM\Column(name="yazar", type="string", length=255, nullable=true)
     */
    private $yazar;

    /**
     * @var string
     *
     * @ORM\Column(name="aciklama", type="text")
     */
    private $aciklama;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aktif", type="boolean")
     */
    private $aktif;


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
     * Set baslik
     *
     * @param string $baslik
     * @return Kategori
     */
    public function setBaslik($baslik)
    {
        $this->baslik = $baslik;

        return $this;
    }

    /**
     * Get baslik
     *
     * @return string 
     */
    public function getBaslik()
    {
        return $this->baslik;
    }

    /**
     * Set aciklama
     *
     * @param string $aciklama
     * @return Kategori
     */
    public function setAciklama($aciklama)
    {
        $this->aciklama = $aciklama;

        return $this;
    }

    /**
     * Get aciklama
     *
     * @return string 
     */
    public function getAciklama()
    {
        return $this->aciklama;
    }

    /**
     * Set aktif
     *
     * @param boolean $aktif
     * @return Kategori
     */
    public function setAktif($aktif)
    {
        $this->aktif = $aktif;

        return $this;
    }

    /**
     * Get aktif
     *
     * @return boolean 
     */
    public function getAktif()
    {
        return $this->aktif;
    }

    /**
     * Set yazar
     *
     * @param string $yazar
     * @return Kategori
     */
    public function setYazar($yazar)
    {
        $this->yazar = $yazar;

        return $this;
    }

    /**
     * Get yazar
     *
     * @return string 
     */
    public function getYazar()
    {
        return $this->yazar;
    }
}
