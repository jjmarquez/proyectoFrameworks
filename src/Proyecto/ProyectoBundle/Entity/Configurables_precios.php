<?php

namespace Proyecto\ProyectoBundle\Entity;

/**
 * Configurables_precios
 */
class Configurables_precios
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $valor;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var string
     */
    private $nombre;


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
     * Set valor
     *
     * @param float $valor
     *
     * @return Configurables_precios
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Configurables_precios
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Configurables_precios
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
