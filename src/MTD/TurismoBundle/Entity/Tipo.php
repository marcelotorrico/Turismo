<?php

namespace MTD\TurismoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tipo
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="Usuario", mappedBy="tipo")
     */
    private $usuario;
    public function __construct()
    {
        $this->usuario = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * Add usuario
     *
     * @param \MTD\TurismoBundle\Entity\Usuario $usuario
     *
     * @return Tipo
     */
    public function addUsuario(\MTD\TurismoBundle\Entity\Usuario $usuario)
    {
        $this->usuario[] = $usuario;
        return $this;
    }
    /**
     * Remove usuario
     *
     * @param \MTD\TurismoBundle\Entity\Usuario $usuario
     */
    public function removeUsuario(\MTD\TurismoBundle\Entity\Usuario $usuario)
    {
        $this->usuario->removeElement($usuario);
    }
    /**
     * Get usuario
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuario()
    {
        return $this->usuario;
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Tipo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }
}

