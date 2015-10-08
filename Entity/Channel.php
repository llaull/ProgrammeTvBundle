<?php

namespace ProgrammeTvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tv_channel")
 */
class Channel {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**

     * @ORM\Column(type="string", length=15, unique=true)
     */
    protected $idKazer;

    /**
     * @var datetime $ajouter
     *
     * @ORM\Column(type="datetime")
     */
    protected $added;

    /**
     *
     * @ORM\Column(type="string", length=20,unique=true)
     */
    protected $name;

    /**
     *
     * @ORM\Column(type="string", length=13,unique=true, nullable=true)
     */
    protected $codeTV;


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
     * Set idKazer
     *
     * @param string $idKazer
     *
     * @return Channel
     */
    public function setIdKazer($idKazer)
    {
        $this->idKazer = $idKazer;

        return $this;
    }

    /**
     * Get idKazer
     *
     * @return string
     */
    public function getIdKazer()
    {
        return $this->idKazer;
    }

    /**
     * Set added
     *
     * @param \DateTime $added
     *
     * @return Channel
     */
    public function setAdded($added)
    {
        $this->added = $added;

        return $this;
    }

    /**
     * Get added
     *
     * @return \DateTime
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Channel
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set codeTV
     *
     * @param string $codeTV
     *
     * @return Channel
     */
    public function setCodeTV($codeTV)
    {
        $this->codeTV = $codeTV;

        return $this;
    }

    /**
     * Get codeTV
     *
     * @return string
     */
    public function getCodeTV()
    {
        return $this->codeTV;
    }
}
