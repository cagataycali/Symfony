<?php

namespace CagatayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Yazi
 *
 * @ORM\Table(name="yazi")
 * @ORM\Entity
 */
class Yazi
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
     * @ORM\Column(name="metin", type="text")
     */
    private $metin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;
    /**
     * @var string
     *
     * @ORM\Column(name="ali", type="text")
     */
    private $ali;


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
     * @return Yazi
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
     * Set metin
     *
     * @param string $metin
     * @return Yazi
     */
    public function setMetin($metin)
    {
        $this->metin = $metin;

        return $this;
    }

    /**
     * Get metin
     *
     * @return string 
     */
    public function getMetin()
    {
        return $this->metin;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Yazi
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set ali
     *
     * @param string $ali
     * @return Yazi
     */
    public function setAli($ali)
    {
        $this->ali = $ali;

        return $this;
    }

    /**
     * Get ali
     *
     * @return string 
     */
    public function getAli()
    {
        return $this->ali;
    }
}
