<?php

namespace Proyecto\ProyectoBundle\Entity;

/**
 * Pide
 */
class Pide
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \DateTime
     */
    private $fInicio;

    /**
     * @var \DateTime
     */
    private $fFin;

    /**
     * @var string
     */
    private $tipo;


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

