<?php
namespace Proyecto\ProyectoBundle\Entity;
/**
* Config_bebidas
*/
class Config_bebidas
{
/**
* @var string
*/
private $categoria;
/**
* @var string
*/
private $cervezaNombre;
/**
* @var integer
*/
private $cantCerveza;
/**
* @var string
*/
private $vinoNombre;
/**
* @var integer
*/
private $cantVino;
/**
* @var string
*/
private $alcoholicasNombre;
/**
* @var integer
*/
private $cantAlcohol;
/**
* @var integer
*/
private $cantRefresco;
/**
* @var integer
*/
private $cantAgua;
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
$this->alcoholicasNombre = $alcoholicasNmbre;
return $this;
}
/**
* Get alcoholicasNmbre
*
* @return string
*/
public function getAlcoholicasNombre()
{
return $this->alcoholicasNombre;
}
/**
* Set cantCerveza
*
* @param integer $cantCerveza
*
* @return Config_bebidas
*/
public function setCantCerveza($cantCerveza)
{
$this->cantCerveza = $cantCerveza;
return $this;
}
/**
* Get cantCerveza
*
* @return string
*/
public function getCantCerveza()
{
return $this->cantCerveza;
}
/**
* Set cantVino
*
* @param integer $cantVino
*
* @return Config_bebidas
*/
public function setCantVino($cantVino)
{
$this->cantVino = $cantVino;
return $this;
}
/**
* Get cantVino
*
* @return string
*/
public function getCantVino()
{
return $this->cantVino;
}
/**
* Set cantAlcohol
*
* @param integer $cantAlcohol
*
* @return Config_bebidas
*/
public function setCantAlcohol($cantAlcohol)
{
$this->cantAlcohol = $cantAlcohol;
return $this;
}
/**
* Get cantAlcohol
*
* @return string
*/
public function getCantAlcohol()
{
return $this->cantAlcohol;
}
/**
* Set cantRefresco
*
* @param integer $cantRefresco
*
* @return Config_bebidas
*/
public function setCantRefresco($cantRefresco)
{
$this->cantRefresco = $cantRefresco;
return $this;
}
/**
* Get cantRefresco
*
* @return string
*/
public function getCantRefresco()
{
return $this->cantRefresco;
}
/**
* Get cantAgua
*
* @return string
*/
public function getCantAgua()
{
return $this->cantAgua;
}
/**
* Set cantAgua
*
* @param integer $cantAgua
*
* @return Config_bebidas
*/
public function setCantAgua($cantAgua)
{
$this->cantAgua = $cantAgua;
return $this;
}
}