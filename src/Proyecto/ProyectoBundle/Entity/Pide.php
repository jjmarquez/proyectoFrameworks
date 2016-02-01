<?php

namespace Proyecto\ProyectoBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pide
 *
 * @ORM\Table(name="pide", indexes={@ORM\Index(name="habitacion", columns={"habitacion_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
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
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User", inversedBy="reservaciones", cascade={"persist"}) 
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id", nullable=false) 
     */
    protected $usuario;

    /** 
     * @ORM\ManyToOne(targetEntity="Habitacion", inversedBy="reservaciones", cascade={"persist"}) 
     * @ORM\JoinColumn(name="habitacion_id", referencedColumnName="numero", nullable=false) 
     */
    protected $habitacion;

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

     public function __toString() {
        return (string)$this->codigo;
    }

    /**
     * @Assert\Callback
     */
    public function validate(ExecutionContextInterface $context)
    {
         
        if ($this->fFin < $this->fInicio) {
            // If you're using the new 2.5 validation API (you probably are!)
            $context->buildViolation('La Fecha Final debe ser Mayor a la inicial!')
                ->atPath('fFin')
                ->addViolation();
        }
        /*validar minimo de tres meses*/

        //Si la Habitacion tiene al menos una reservacion, se valida
        if (count($this->getHabitacion()->getReservaciones()) > 0) {
            //Se obtienen las reservaciones de la habitacion a reservar
            $reservacionesAnteriores = $this->getHabitacion()->getReservaciones();
            
            $band = false;
            
            foreach ($reservacionesAnteriores as $anterior) {
                $band =(
                    ($anterior->getFInicio() <= $this->fInicio && $this->fInicio <= $anterior->getFFin()) ||
                    ($anterior->getFInicio() <= $this->fFin && $this->fFin <= $anterior->getFFin()) 
                );
                if($band){
                    break;
                }
            }
            $reservacionesAnterior = $this->getHabitacion()->getReservaciones()->last();

            //Se obtiene la finalizacion de la reservacion anterior
            $fechaFinalAnterior = $reservacionesAnterior->getFFin();
            
            // Se verifica si la reservacion anterior ya se concreto
            if ($band) {
                
                $context->buildViolation(
                    'Fecha final de reserva anterior: '.
                    $fechaFinalAnterior->format('Y-m-d').
                    ' '.
                    'Fecha inicial de reserva actual: '.
                    $this->fInicio->format('Y-m-d').
                    ' '.
                    $fechaFinalAnterior->diff($this->fInicio)->format('Y-m-d').
                    ' <'.
                    ($fechaFinalAnterior >= $this->fInicio).
                    '> Esta habitación NO esta disponible para la fecha indicada!')
                    ->atPath('habitacion')
                    ->addViolation();
            }
        }
    }
    /**
     * @ORM\PrePersist @ORM\PreUpdate
     */
    public function validate2()
    {
        return;
        if ($this->fFin < $this->fInicio) {
            return;//throw new ValidateException();
        }
        //Si la Habitacion tiene al menos una reservacion, se valida
        if (count($this->getHabitacion()->getReservaciones()) > 0) {
            //Se obtienen las reservaciones de la habitacion a reservar
            $reservacionesAnterior = $this->getHabitacion()->getReservaciones()->first();

            //Se obtiene la finalizacion de la reservacion anterior
            $fechaFinalAnterior = $reservacionesAnterior->getFFin();
            
            // Se verifica si la reservacion anterior ya se concreto
            if (true || $this->getFInicio() < $fechaFinalAnterior ) {            
                throw new ValidateException();
            }
        }
    }

    /**
     * Set habitacion
     *
     * @param \Proyecto\ProyectoBundle\Entity\Habitacion $habitacion
     *
     * @return Pide
     */
    public function setHabitacion(\Proyecto\ProyectoBundle\Entity\Habitacion $habitacion = null)
    {
        $this->habitacion = $habitacion;

        return $this;
    }

    /**
     * Get habitacion
     *
     * @return \Proyecto\ProyectoBundle\Entity\Habitacion
     */
    public function getHabitacion()
    {
        return $this->habitacion;
    }

    /**
     * Set usuario
     *
     * @param \Application\Sonata\UserBundle\Entity\User $usuario
     *
     * @return Pide
     */
    public function setUsuario(\Application\Sonata\UserBundle\Entity\User $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Application\Sonata\UserBundle\Entity\User
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
