<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Proyecto\PBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PersonaAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nombre')
            ->add('cedula')
            ->add('direccion') //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nombre')
            ->add('cedula')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nombre')
            ->add('cedula')
            ->add('direccion')
        ;
    }
}