<?php

namespace Proyecto\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Habitacion
 *
 * @ORM\Table(name="habitacion")
 * @ORM\Entity
 */
class Habitacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="cont_nac", type="integer", nullable=false)
     */
    private $contNac;

    /**
     * @var integer
     *
     * @ORM\Column(name="cont_inter", type="integer", nullable=false)
     */
    private $contInter;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=10, nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=8, nullable=false)
     */
    private $categoria;

    /**
     * @var string
     *
     * @ORM\Column(name="cama_ind", type="string", length=2, nullable=false)
     */
    private $camaInd;

   /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Habitacion
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set contNac
     *
     * @param integer $contNac
     *
     * @return Habitacion
     */
    public function setContNac($contNac)
    {
        $this->contNac = $contNac;

        return $this;
    }

    /**
     * Get contNac
     *
     * @return integer
     */
    public function getContNac()
    {
        return $this->contNac;
    }

    /**
     * Set contInter
     *
     * @param integer $contInter
     *
     * @return Habitacion
     */
    public function setContInter($contInter)
    {
        $this->contInter = $contInter;

        return $this;
    }

    /**
     * Get contInter
     *
     * @return integer
     */
    public function getContInter()
    {
        return $this->contInter;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Habitacion
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

    /**
     * Set categoria
     *
     * @param string $categoria
     *
     * @return Habitacion
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set camaInd
     *
     * @param binary $camaInd
     *
     * @return Habitacion
     */
    public function setCamaInd($camaInd)
    {
        $this->camaInd = $camaInd;

        return $this;
    }

    /**
     * Get camaInd
     *
     * @return binary
     */
    public function getCamaInd()
    {
        return $this->camaInd;
    }
    
    public function __toString() {
        return (string)$this->numero;
    } 
}

