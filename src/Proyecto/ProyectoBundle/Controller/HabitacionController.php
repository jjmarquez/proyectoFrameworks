<?php

namespace Proyecto\ProyectoBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Proyecto\ProyectoBundle\Entity\Habitacion;

/**
 * Habitacion controller.
 *
 * @Route("/habitacion")
 */
class HabitacionController extends Controller
{

    /**
     * Lists all Habitacion entities.
     *
     * @Route("/", name="habitacion")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProyectoProyectoBundle:Habitacion')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Habitacion entity.
     *
     * @Route("/{id}", name="habitacion_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProyectoProyectoBundle:Habitacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Habitacion entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }
}
