<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Proyecto\ProyectoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ConfiguracionBebidasAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('categoria', 'choice', array(
                'choices' => array(
                'Normal'=>'Normal',
                'Buisness'=>'Buisness',
                'Alta'=>'Alta'
            )))
            ->add("cervezaNombre",'entity',array ('class'=> 'Proyecto\ProyectoBundle\Entity\Configurables_precios'))
            ->add('cantCerveza')
            ->add("vinoNombre",'entity',array ('class'=> 'Proyecto\ProyectoBundle\Entity\Configurables_precios'))
            ->add('cantVino')
                ->add("alcoholicasNombre",'entity',array ('class'=> 'Proyecto\ProyectoBundle\Entity\Configurables_precios'))
            ->add('cantAlcohol')
            ->add('cantRefresco')
            ->add('cantAgua')
            
            ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('categoria')
            ->add("cervezaNombre")
            ->add("vinoNombre")
            ->add("alcoholicasNombre")    
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('categoria')
            ->add("cervezaNombre",'entity',array ('class'=> 'Proyecto\ProyectoBundle\Entity\Habitacion' ))
            ->add('cantCerveza')
            ->add("vinoNombre",'entity',array ('class'=> 'Proyecto\ProyectoBundle\Entity\Habitacion' ))
            ->add('cantVino')
            ->add("alcoholicasNombre",'entity',array ('class'=> 'Proyecto\ProyectoBundle\Entity\Habitacion' ))    
            ->add('cantAlcohol')
            ->add('cantRefresco')
            ->add('cantAgua')
            ;
    }
}