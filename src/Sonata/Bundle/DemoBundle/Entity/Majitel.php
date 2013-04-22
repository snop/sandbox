<?php

namespace Sonata\Bundle\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection as ArrayCollection;

/**
 * Majitel
 *
 * @ORM\Table(name="majitel")
 * @ORM\Entity
 */
class Majitel
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
     * @ORM\Column(name="meno", type="string", length=255)
     */
    private $meno;

    /**
     * @var string
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(name="test", type="string", length=255)
     */
    private $test;

    /**
     * @ORM\OneToMany(targetEntity="Restauracia", mappedBy="majitel")
     */
    private $restauracie;

    public function __construct()
    {
        $this->restauracie = new ArrayCollection();
    }


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
     * Set meno
     *
     * @param string $meno
     * @return Majitel
     */
    public function setMeno($meno)
    {
        $this->meno = $meno;

        return $this;
    }

    /**
     * Get meno
     *
     * @return string
     */
    public function getMeno()
    {
        return $this->meno;
    }

    /**
     * Add restauracie
     *
     * @param \Sonata\Bundle\DemoBundle\Entity\Restauracia $restauracie
     * @return Majitel
     */
    public function addRestauracie(\Sonata\Bundle\DemoBundle\Entity\Restauracia $restauracie)
    {
        $this->restauracie[] = $restauracie;

        return $this;
    }

    /**
     * Remove restauracie
     *
     * @param \Sonata\Bundle\DemoBundle\Entity\Restauracia $restauracie
     */
    public function removeRestauracie(\Sonata\Bundle\DemoBundle\Entity\Restauracia $restauracie)
    {
        $this->restauracie->removeElement($restauracie);
    }

    /**
     * Get restauracie
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRestauracie()
    {
        return $this->restauracie;
    }

    public function __toString() {
        return $this->getMeno() ?: 'n/a';
    }


    /**
     * Set email
     *
     * @param string $email
     * @return Majitel
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set test
     *
     * @param string $test
     * @return Majitel
     */
    public function setTest($test)
    {
        $this->test = $test;
    
        return $this;
    }

    /**
     * Get test
     *
     * @return string 
     */
    public function getTest()
    {
        return $this->test;
    }
}