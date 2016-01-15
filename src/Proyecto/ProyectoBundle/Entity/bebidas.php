<?php

namespace Proyecto\ProyectoBundle\Entity;

/**
 * bebidas
 */
class bebidas
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
    private $cerveza;

    /**
     * @var integer
     */
    private $vino;

    /**
     * @var integer
     */
    private $agua;

    /**
     * @var integer
     */
    private $refrescos;

    /**
     * @var integer
     */
    private $alcoholicas;


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
     * @return bebidas
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
     * Set cerveza
     *
     * @param integer $cerveza
     *
     * @return bebidas
     */
    public function setCerveza($cerveza)
    {
        $this->cerveza = $cerveza;

        return $this;
    }

    /**
     * Get cerveza
     *
     * @return integer
     */
    public function getCerveza()
    {
        return $this->cerveza;
    }

    /**
     * Set vino
     *
     * @param integer $vino
     *
     * @return bebidas
     */
    public function setVino($vino)
    {
        $this->vino = $vino;

        return $this;
    }

    /**
     * Get vino
     *
     * @return integer
     */
    public function getVino()
    {
        return $this->vino;
    }

    /**
     * Set agua
     *
     * @param integer $agua
     *
     * @return bebidas
     */
    public function setAgua($agua)
    {
        $this->agua = $agua;

        return $this;
    }

    /**
     * Get agua
     *
     * @return integer
     */
    public function getAgua()
    {
        return $this->agua;
    }

    /**
     * Set refrescos
     *
     * @param integer $refrescos
     *
     * @return bebidas
     */
    public function setRefrescos($refrescos)
    {
        $this->refrescos = $refrescos;

        return $this;
    }

    /**
     * Get refrescos
     *
     * @return integer
     */
    public function getRefrescos()
    {
        return $this->refrescos;
    }

    /**
     * Set alcoholicas
     *
     * @param integer $alcoholicas
     *
     * @return bebidas
     */
    public function setAlcoholicas($alcoholicas)
    {
        $this->alcoholicas = $alcoholicas;

        return $this;
    }

    /**
     * Get alcoholicas
     *
     * @return integer
     */
    public function getAlcoholicas()
    {
        return $this->alcoholicas;
    }
}
