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
           ->add('fInicio', 'sonata_type_date_picker', array(
                    'dp_use_current'        => false,
            ))
           ->add('fFin', 'sonata_type_date_picker', array(
                    'dp_use_current'        => false,
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
            ->add('fInicio', 'doctrine_orm_date_range', array('label' => 'Fecha inicial de Reservacion',
                'field_type' => 'sonata_type_date_range_picker',
            ))
            ->add('fFin', 'doctrine_orm_date_range', array('label' => 'Fecha final de Reservacion',
                'field_type' => 'sonata_type_date_range_picker',
            ))
            ->add('tipo', 'doctrine_orm_choice', array('label' => 'Tipo',
                    'field_options' => array(
                        'required' => false,
                        'choices' => array('Individual'=>'Individual','Doble'=>'Doble')
                    ),
                    'field_type' => 'choice'
                ))
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