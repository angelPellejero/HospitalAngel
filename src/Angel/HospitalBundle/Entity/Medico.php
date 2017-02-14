<?php

namespace Angel\HospitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medico
 *
 * @ORM\Table(name="Medico")
 * @ORM\Entity
 */
class Medico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdMedico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmedico;

     public function __toString() {
        return $this->nombre;
    }
    /**
     * @var integer
     *
     * @ORM\Column(name="Ncolegiado", type="integer", nullable=false)
     */
    private $ncolegiado;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido", type="string", length=50, nullable=false)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=50, nullable=false)
     */
    private $telefono;



    /**
     * Get idmedico
     *
     * @return integer
     */
    public function getIdmedico()
    {
        return $this->idmedico;
    }

    /**
     * Set ncolegiado
     *
     * @param integer $ncolegiado
     *
     * @return Medico
     */
    public function setNcolegiado($ncolegiado)
    {
        $this->ncolegiado = $ncolegiado;

        return $this;
    }

    /**
     * Get ncolegiado
     *
     * @return integer
     */
    public function getNcolegiado()
    {
        return $this->ncolegiado;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Medico
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
     * @return Medico
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
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Medico
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
}
