<?php

namespace Proyecto\ProyectoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Proyecto\ProyectoBundle\Entity\Habitacion;
use Proyecto\ProyectoBundle\Form\HabitacionType;

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
     * Creates a new Habitacion entity.
     *
     * @Route("/", name="habitacion_create")
     * @Method("POST")
     * @Template("ProyectoProyectoBundle:Habitacion:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Habitacion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('habitacion_show', array('id' => $entity->getNumero())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Habitacion entity.
     *
     * @param Habitacion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Habitacion $entity)
    {
        $form = $this->createForm(new HabitacionType(), $entity, array(
            'action' => $this->generateUrl('habitacion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Habitacion entity.
     *
     * @Route("/new", name="habitacion_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Habitacion();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
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

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Habitacion entity.
     *
     * @Route("/{id}/edit", name="habitacion_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProyectoProyectoBundle:Habitacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Habitacion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Habitacion entity.
    *
    * @param Habitacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Habitacion $entity)
    {
        $form = $this->createForm(new HabitacionType(), $entity, array(
            'action' => $this->generateUrl('habitacion_update', array('id' => $entity->getNumero())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Habitacion entity.
     *
     * @Route("/{id}", name="habitacion_update")
     * @Method("PUT")
     * @Template("ProyectoProyectoBundle:Habitacion:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProyectoProyectoBundle:Habitacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Habitacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('habitacion_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Habitacion entity.
     *
     * @Route("/{id}", name="habitacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProyectoProyectoBundle:Habitacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Habitacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('habitacion'));
    }

    /**
     * Creates a form to delete a Habitacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('habitacion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
