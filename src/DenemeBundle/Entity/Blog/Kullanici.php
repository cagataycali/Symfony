<?php

namespace DenemeBundle\Entity\Blog;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kullanici
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Kullanici
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
     * @ORM\Column(name="kullanici", type="string", length=255)
     */
    private $kullanici;

    /**
     * @var string
     *
     * @ORM\Column(name="sifre", type="string", length=45)
     */
    private $sifre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="yas", type="date")
     */
    private $yas;


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
     * Set kullanici
     *
     * @param string $kullanici
     * @return Kullanici
     */
    public function setKullanici($kullanici)
    {
        $this->kullanici = $kullanici;

        return $this;
    }

    /**
     * Get kullanici
     *
     * @return string 
     */
    public function getKullanici()
    {
        return $this->kullanici;
    }

    /**
     * Set sifre
     *
     * @param string $sifre
     * @return Kullanici
     */
    public function setSifre($sifre)
    {
        $this->sifre = $sifre;

        return $this;
    }

    /**
     * Get sifre
     *
     * @return string 
     */
    public function getSifre()
    {
        return $this->sifre;
    }

    /**
     * Set yas
     *
     * @param \DateTime $yas
     * @return Kullanici
     */
    public function setYas($yas)
    {
        $this->yas = $yas;

        return $this;
    }

    /**
     * Get yas
     *
     * @return \DateTime 
     */
    public function getYas()
    {
        return $this->yas;
    }
}
