<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Proyecto\ProyectoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class BebidasAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('numero','entity',array ('class'=> 'Proyecto\ProyectoBundle\Entity\Habitacion' ))
            ->add("cerveza")
            ->add("vino")
            ->add("agua")
            ->add("refrescos")
            ->add("alcoholicas")
            
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('numero')
            ->add("cerveza")
            ->add("vino")
            ->add("agua")
            ->add("refrescos")
            ->add("alcoholicas")
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('numero','entity',array ('class'=> 'Proyecto\ProyectoBundle\Entity\Habitacion' ))
            ->add("cerveza")
            ->add("vino")
            ->add("agua")
            ->add("refrescos")
            ->add("alcoholicas")
        ;
    }
}