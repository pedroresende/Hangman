<?php

namespace Sensio\Bundle\HangmanBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\True;

class PlayerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('email' , 'email')
            ->add('rawPassword', 'repeated', array(
                'type' => 'password',
                'first_options' => array('label' => 'Password'),
                'second_options' => array('label' => 'Confirmation Password') 
                )
            )
            ->add('tos', 'checkbox', array (
                'mapped' => false,
                'label' => 'Agree?',
                'constraints' => array(
                    new True(array('groups' => array('Signup')))
                    )
                )
            )
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sensio\Bundle\HangmanBundle\Entity\Player',
            'validation_groups' => array('Profile'),
            'error_mapping' => array('passwordValid' => 'rawPassword')
        ));
    }

    public function getName()
    {
        return 'player';
    }
}
