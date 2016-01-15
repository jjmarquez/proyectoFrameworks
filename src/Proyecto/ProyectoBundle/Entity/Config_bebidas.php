<?php

namespace Proyecto\ProyectoBundle\Entity;

/**
 * Config_bebidas
 */
class Config_bebidas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $categoria;

    /**
     * @var string
     */
    private $cervezaNombre;

    /**
     * @var string
     */
    private $vinoNombre;

    /**
     * @var string
     */
    private $alcoholicasNombre;


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
     * Set categoria
     *
     * @param string $categoria
     *
     * @return Config_bebidas
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
     * Set cervezaNombre
     *
     * @param string $cervezaNombre
     *
     * @return Config_bebidas
     */
    public function setCervezaNombre($cervezaNombre)
    {
        $this->cervezaNombre = $cervezaNombre;

        return $this;
    }

    /**
     * Get cervezaNombre
     *
     * @return string
     */
    public function getCervezaNombre()
    {
        return $this->cervezaNombre;
    }

    /**
     * Set vinoNombre
     *
     * @param string $vinoNombre
     *
     * @return Config_bebidas
     */
    public function setVinoNombre($vinoNombre)
    {
        $this->vinoNombre = $vinoNombre;

        return $this;
    }

    /**
     * Get vinoNombre
     *
     * @return string
     */
    public function getVinoNombre()
    {
        return $this->vinoNombre;
    }

    /**
     * Set alcoholicasNmbre
     *
     * @param string $alcoholicasNmbre
     *
     * @return Config_bebidas
     */
    public function setAlcoholicasNombre($alcoholicasNmbre)
    {
        $this->alcoholicasNmbre = $alcoholicasNmbre;

        return $this;
    }

    /**
     * Get alcoholicasNmbre
     *
     * @return string
     */
    public function getAlcoholicasNombre()
    {
        return $this->alcoholicasNmbre;
    }
}
