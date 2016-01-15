<?php

namespace Proyecto\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * bebidas
 *
 * @ORM\Table(name="bebidas", indexes={@ORM\Index(name="numero", columns={"numero"})})
 * @ORM\Entity
 */
class bebidas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cerveza", type="integer", nullable=false)
     */
    private $cerveza;

    /**
     * @var integer
     *
     * @ORM\Column(name="vino", type="integer", nullable=false)
     */
    private $vino;

    /**
     * @var integer
     *
     * @ORM\Column(name="agua", type="integer", nullable=false)
     */
    private $agua;

    /**
     * @var integer
     *
     * @ORM\Column(name="refrescos", type="integer", nullable=false)
     */
    private $refrescos;

    /**
     * @var integer
     *
     * @ORM\Column(name="alcoholicas", type="integer", nullable=false)
     */
    private $alcoholicas;

    /**
     * @var \Habitacion
     *
     * @ORM\ManyToOne(targetEntity="Habitacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="numero", referencedColumnName="numero")
     * })
     */
    private $numero;

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

