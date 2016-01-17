<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Proyecto\ProyectoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class HabitacionAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('numero')
            ->add('tipo', 'choice', array(
            'choices' => array(
                'Individual'=>'Individual',
                'Doble'=>'Doble'         
            )))
            ->add('categoria', 'choice', array(
                'choices' => array(
                'Normal'=>'Normal',
                'Buisness'=>'Buisness',
                'Alta'=>'Alta'
            )))
            ->add('camaInd', 'choice', array(
            'choices' => array(
                'No'=>'No',
                'Si'=>'Si'         
            )))            
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('numero')
            ->add('categoria')
            ->add('tipo')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('numero')
            ->add('categoria')
            ->add('contNac')
            ->add('contInter')    
            ->add('tipo') 
            ->add('camaInd')
        ;
    }
}