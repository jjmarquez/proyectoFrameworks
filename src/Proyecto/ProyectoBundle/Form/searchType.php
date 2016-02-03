<?php

namespace Proyecto\ProyectoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Proyecto\ProyectoBundle\Entity\Habitacion;

class searchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->setMethod('GET')
            ->add('submit', 'submit', 
                array('label'=> 'Buscar',
                    'attr'=> array('class' => 'btn btn-primary','value'=> 'Buscar'))
            )
            ->add('desde', 'date',
                array(
                    'attr'=> array('class' => 'form-control'),
                    'widget' => 'single_text',
                    'required' => false)
            )
            ->add('hasta', 'date',
                array(       
                    'attr'=> array('class' => 'form-control'),
                    'widget' => 'single_text','required' => false)
            )
            ->add('tipo', 'choice',
                array(
                    'empty_value' => 'Cualquier Tipo',
                    'choices'  => Habitacion::getTipos(),
                    'label' => false,
                    'attr'=> array('class' => 'form-control'),
                    'required' => false
                )
            )
            ->add('categoria', 'choice',
                array(
                    'empty_value' => 'Cualquier Categoria',
                    'choices'  => Habitacion::getCategorias(),
                    'label' => false,
                    'attr'=> array('class' => 'form-control'),
                    'required' => false
                )
            );
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {

    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'search';
    }
}
