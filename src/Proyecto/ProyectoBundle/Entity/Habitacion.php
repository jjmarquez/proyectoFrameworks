<?php
namespace Proyecto\ProyectoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Habitacion
 *
 * @ORM\Table(name="habitacion")
 * @ORM\Entity
 */
class Habitacion
{
    private static $tipos = array('Individual'=>'Individual','Doble'=>'Doble');

    public static function getTipos() {
        return self::$tipos;
    }
    private static $categorias = array('Normal'=>'Normal','Buisness'=>'Buisness','Alta'=>'Alta');

    public static function getCategorias() {
        return self::$categorias;
    }
    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\OneToMany(targetEntity="bebidas", mappedBy="numero",cascade={"remove"})
     * ORM\OneToMany(targetEntity="pide", mappedBy="habitacion",cascade={"remove"})
     * @Assert\NotBlank()
     */
    private $numero;
    /**
     * @var integer
     *
     * @ORM\Column(name="cont_nac", type="integer", nullable=false)
     */
    private $contNac=0;
    /**
     * @var integer
     *
     * @ORM\Column(name="cont_inter", type="integer", nullable=false)
     */
    private $contInter=0;
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
     * @var array
     * @ORM\OneToMany(targetEntity="Pide", mappedBy="habitacion") */
    protected $reservaciones;
    
    public function __construct()
    {
        $this->reservaciones = new ArrayCollection();
    }
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
    /**
     * Get reservaciones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReservaciones()
    {
        return $this->reservaciones;
    }   
    

    /**
     * Add reservacione
     *
     * @param \Proyecto\ProyectoBundle\Entity\Pide $reservacione
     *
     * @return Habitacion
     */
    public function addReservacione(\Proyecto\ProyectoBundle\Entity\Pide $reservacione)
    {
        $this->reservaciones[] = $reservacione;

        return $this;
    }

    /**
     * Remove reservacione
     *
     * @param \Proyecto\ProyectoBundle\Entity\Pide $reservacione
     */
    public function removeReservacione(\Proyecto\ProyectoBundle\Entity\Pide $reservacione)
    {
        $this->reservaciones->removeElement($reservacione);
    }
    /**
     * esta disponible para
     *
     * @param \DateTime $start \DateTime $end
     *
     * @return boolean
     */
    public function isDisponibleFor($start, $end)
    {
        $band = false;

        //Si la Habitacion tiene al menos una reservacion, se valida
        if (count($this->getReservaciones()) > 0) {
            //Se obtienen las reservaciones de la habitacion
            $reservacionesAnteriores = $this->getReservaciones();
            
            $band = false;
            
            foreach ($reservacionesAnteriores as $anterior) {
                $band =(
                    ($anterior->getFInicio() >= $start && $end >= $anterior->getFFin()) ||
                    ($anterior->getFInicio() <= $start && $start <= $anterior->getFFin()) ||
                    ($anterior->getFInicio() <= $end && $end <= $anterior->getFFin()) 
                );
                if($band){
                    break;
                }
            }
        }
        return !$band;
    }
}
