<?php

namespace Proyecto\ProyectoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HabitacionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero', 'integer', 
                array(  'label' => false,
                        'attr' => array('placeholder' => 'Numero de la habitacion' ) ))
            ->add('contNac')
            ->add('contInter')
            ->add('tipo')
            ->add('categoria')
            ->add('camaInd')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Proyecto\ProyectoBundle\Entity\Habitacion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'proyecto_proyectobundle_habitacion';
    }
}
