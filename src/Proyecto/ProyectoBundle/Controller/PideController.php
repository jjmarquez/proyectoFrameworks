<?php

namespace Proyecto\ProyectoBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Proyecto\ProyectoBundle\Entity\Pide;

/**
 * Pide controller.
 *
 * @Route("/pide")
 */
class PideController extends Controller
{

    /**
     * Lists all Pide entities.
     *
     * @Route("/", name="pide")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProyectoProyectoBundle:Pide')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Pide entity.
     *
     * @Route("/{id}", name="pide_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProyectoProyectoBundle:Pide')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pide entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }
}
