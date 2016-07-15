<?php

namespace MTD\TurismoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Usuario
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
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255)
     */
    private $apellido;

    /**
     * @var integer
     *
     * @ORM\Column(name="edad", type="integer")
     */
    private $edad;

    /**
     * @var integer
     *
     * @ORM\Column(name="telefono", type="integer")
     */
    private $telefono;

    /**
     * @var integer
     *
     * @ORM\Column(name="ci", type="integer")
     */
    private $ci;

    /**
     * @var string
     *
     * @ORM\Column(name="contrasena", type="string", length=255)
     */
    private $contrasena;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;
    
    /**
     * @ORM\OneToMany(targetEntity="Paquete", mappedBy="usuario")
     */
    private $paquete;
    public function __construct()
    {
        $this->paquete = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * Add paquete
     *
     * @param \MTD\TurismoBundle\Entity\Paquete $paquete
     *
     * @return Usuario
     */
    public function addPaquete(\MTD\TurismoBundle\Entity\Paquete $paquete)
    {
        $this->paquete[] = $paquete;
        return $this;
    }
    /**
     * Remove paquete
     *
     * @param \MTD\TurismoBundle\Entity\Paquete $paquete
     */
    public function removePaquete(\MTD\TurismoBundle\Entity\Paquete $paquete)
    {
        $this->paquete->removeElement($paquete);
    }
    /**
     * Get paquete
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPaquete()
    {
        return $this->paquete;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Tipo", inversedBy="usuario")
     * @ORM\JoinColumn(name="id_tipo", referencedColumnName="id")
     * @return integer
     */
    private $tipo;
    public function setTipo(\MTD\TurismoBundle\Entity\Tipo $tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
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
     * @return Usuario
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

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Usuario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     *
     * @return Usuario
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return Usuario
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set ci
     *
     * @param integer $ci
     *
     * @return Usuario
     */
    public function setCi($ci)
    {
        $this->ci = $ci;

        return $this;
    }

    /**
     * Get ci
     *
     * @return integer
     */
    public function getCi()
    {
        return $this->ci;
    }
    
    /**
     * Set contrasena
     *
     * @param integer $contrasena
     *
     * @return Usuario
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    /**
     * Get contrasena
     *
     * @return integer
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Usuario
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }
}

