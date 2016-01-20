<?php

namespace Proyecto\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pide
 *
 * @ORM\Table(name="pide", indexes={@ORM\Index(name="habitacion", columns={"habitacion"})})
 * @ORM\Entity
 */
class Pide
{
    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="F_inicio", type="date", nullable=false)
     */
    private $fInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="F_fin", type="date", nullable=false)
     */
    private $fFin;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=8, nullable=false)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="usuario", type="integer", nullable=false)
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User", inversedBy="id")
     */
    private $usuario;

    /**
     * @var \Habitacion
     *
     * @ORM\ManyToOne(targetEntity="Habitacion", cascade={"remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="habitacion", referencedColumnName="numero", onDelete="CASCADE")
     * })
     */
    private $habitacion;
    
    /**
     * Set habitacion
     *
     * @param integer $habitacion
     *
     * @return Pide
     */
    public function setHabitacion($habitacion)
    {
        $this->habitacion = $habitacion;
        return $this;
    }
    /**
     * Get habitacion
     *
     * @return integer
     */
    public function getHabitacion()
    {
        return $this->habitacion;
    }
/**
     * Set usuario
     *
     * @param integer $usuario
     *
     * @return Pide
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }
    /**
     * Get usuario
     *
     * @return integer
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
    /**
     * Set codigo
     *
     * @param integer $codigo
     *
     * @return Pide
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
        return $this;
    }
    /**
     * Get codigo
     *
     * @return integer
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
    /**
     * Set fInicio
     *
     * @param \DateTime $fInicio
     *
     * @return Pide
     */
    public function setFInicio($fInicio)
    {
        $this->fInicio = $fInicio;
        return $this;
    }
    /**
     * Get fInicio
     *
     * @return \DateTime
     */
    public function getFInicio()
    {
        return $this->fInicio;
    }
    /**
     * Set fFin
     *
     * @param \DateTime $fFin
     *
     * @return Pide
     */
    public function setFFin($fFin)
    {
        $this->fFin = $fFin;
        return $this;
    }
    /**
     * Get fFin
     *
     * @return \DateTime
     */
    public function getFFin()
    {
        return $this->fFin;
    }
    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Pide
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }
    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
    


