<?php

namespace Sonata\Bundle\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Restauracia
 *
 * @ORM\Table(name="restauracia")
 * @ORM\Entity
 */
class Restauracia
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
     * @ORM\Column(name="nazov", type="string", length=255)
     */
    private $nazov;

    /**
     * @var string
     *
     * @ORM\Column(name="popis", type="string", length=255)
     */
    private $popis;

    /**
     * @ORM\ManyToOne(targetEntity="Majitel", inversedBy="restauracie")
     * @ORM\JoinColumn(name="majitel_id", referencedColumnName="id")
     */
    protected $majitel;


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
     * Set nazov
     *
     * @param string $nazov
     * @return Restauracia
     */
    public function setNazov($nazov)
    {
        $this->nazov = $nazov;

        return $this;
    }

    /**
     * Get nazov
     *
     * @return string
     */
    public function getNazov()
    {
        return $this->nazov;
    }

    /**
     * Set popis
     *
     * @param string $popis
     * @return Restauracia
     */
    public function setPopis($popis)
    {
        $this->popis = $popis;

        return $this;
    }

    /**
     * Get popis
     *
     * @return string
     */
    public function getPopis()
    {
        return $this->popis;
    }

    /**
     * Set majitel
     *
     * @param \Sonata\Bundle\DemoBundle\Entity\Majitel $majitel
     * @return Restauracia
     */
    public function setMajitel(\Sonata\Bundle\DemoBundle\Entity\Majitel $majitel = null)
    {
        $this->majitel = $majitel;

        return $this;
    }

    /**
     * Get majitel
     *
     * @return \Sonata\Bundle\DemoBundle\Entity\Majitel
     */
    public function getMajitel()
    {
        return $this->majitel;
    }

    public function __toString()
    {
        return $this->getNazov() ?: 'n/a';
    }
}