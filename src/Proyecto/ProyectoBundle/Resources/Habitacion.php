<?php

namespace Proyecto\ProyectoBundle\Entity;

/**
 * Habitacion
 */
class Habitacion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $numero;

    /**
     * @var integer
     */
    private $contNac;

    /**
     * @var integer
     */
    private $contInter;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var string
     */
    private $categoria;

    /**
     * @var binary
     */
    private $camaInd;


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
}
