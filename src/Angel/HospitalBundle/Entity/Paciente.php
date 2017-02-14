<?php

namespace Angel\HospitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paciente
 *
 * @ORM\Table(name="Paciente")
 * @ORM\Entity
 */
class Paciente
{
    public function __toString() {
        return $this->nombre;
    }
    /**
     * @var integer
     *
     * @ORM\Column(name="IdPaciente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpaciente;

    /**
     * @var string
     *
     * @ORM\Column(name="NumSS", type="string", length=50, nullable=false)
     */
    private $numss;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellidos", type="string", length=50, nullable=false)
     */
    private $apellidos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FNacimiento", type="date", nullable=false)
     */
    private $fnacimiento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Sexo", type="boolean", nullable=false)
     */
    private $sexo;



    /**
     * Get idpaciente
     *
     * @return integer
     */
    public function getIdpaciente()
    {
        return $this->idpaciente;
    }

    /**
     * Set numss
     *
     * @param string $numss
     *
     * @return Paciente
     */
    public function setNumss($numss)
    {
        $this->numss = $numss;

        return $this;
    }

    /**
     * Get numss
     *
     * @return string
     */
    public function getNumss()
    {
        return $this->numss;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Paciente
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
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Paciente
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set fnacimiento
     *
     * @param \DateTime $fnacimiento
     *
     * @return Paciente
     */
    public function setFnacimiento($fnacimiento)
    {
        $this->fnacimiento = $fnacimiento;

        return $this;
    }

    /**
     * Get fnacimiento
     *
     * @return \DateTime
     */
    public function getFnacimiento()
    {
        return $this->fnacimiento;
    }

    /**
     * Set sexo
     *
     * @param boolean $sexo
     *
     * @return Paciente
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return boolean
     */
    public function getSexo()
    {
        return $this->sexo;
    }
}
