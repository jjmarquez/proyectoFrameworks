<?php

namespace Proyecto\ProyectoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Proyecto\ProyectoBundle\Form\searchType;
use Doctrine\Common\Collections\ArrayCollection;


class DefaultController extends Controller
{
	/**
     * @Route("/", name="home")
     * @Template()
     */
    public function indexAction()
    {
    	// Se crea el formulario para el filtrado
        $form = $this->createForm(new searchType(), null, array(
            'action' => $this->generateUrl('habitacion_search'),
            'attr'   => array('class' => 'holas')));

        return array(
            'form'=> $form->createView()
        );
    }


    /**
     * search a habitacion entity.
     *
     * @Route("/search", name="habitacion_search")
     * @Method("GET")
     * @Template("ProyectoProyectoBundle:Habitacion:index.html.twig")
     */
    public function searchAction(Request $request)
    {
        
        // Se crea el formulario para el filtrado
        $form = $this->createForm(new searchType(), null, array(
            'action' => $this->generateUrl('habitacion_search'),
            'attr'   => array('class' => '')));
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $data = $form->getData();
            $arrayBusqueda = array();
            if (isset($data['categoria'])){
            	$arrayBusqueda['categoria'] = $data['categoria'];
            }
            if (isset($data['tipo'])){
            	$arrayBusqueda['tipo'] = $data['tipo'];
            }

            $habitaciones = $this->getDoctrine()->getRepository('ProyectoProyectoBundle:Habitacion')->findBy($arrayBusqueda);
            $habitacionesDisponibles = array();
	        foreach ($habitaciones as $key => $value) {
            	if ($value->isDisponibleFor($data['desde'], $data['hasta'])) {
            		array_push($habitacionesDisponibles,$value);
            	}
            }
            return array(
                    'form' => $form->createView(),
                    'entities' => $habitacionesDisponibles
                );
        
        }

        return $this->redirect($this->generateUrl('home'));
        
    }
}
