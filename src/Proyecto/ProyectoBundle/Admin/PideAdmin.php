<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Proyecto\ProyectoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PideAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
           ->add('fInicio', 'date', array(
                //'pattern' => 'dd MMM y G',
                //'widget' => 'single_text',
                'years' => range(date('Y'),date('Y')+3)

            ))
           ->add('fFin', 'date', array(
                'pattern' => 'dd MMM y G',
                //'widget' => 'single_text',
                'years' => range(date('Y'),date('Y')+3)
            ))
            ->add('tipo', 'choice', array(
                    'choices' => array(
                    'Reservar'=>'Reservar',
                    'Ocupar'=>'Ocupar',
                    )))
            ->add('habitacion','entity',array ('class'=> 'Proyecto\ProyectoBundle\Entity\Habitacion' ))
            ->add('usuario','entity',array ('class'=> 'Application\Sonata\UserBundle\Entity\User' ))
            
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('codigo')
            ->add('fInicio')
            ->add('fFin')
            ->add('tipo')
            ->add('habitacion')
            ->add('usuario')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('codigo')
           ->add('fInicio')
           ->add('fFin')
            ->add('tipo')
            ->add('habitacion','entity',array ('class'=> 'Proyecto\ProyectoBundle\Entity\Habitacion' ))
            ->add('usuario')
        ;
    }
}