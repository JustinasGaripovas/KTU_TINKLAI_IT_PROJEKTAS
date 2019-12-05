<?php

namespace App\Form;

use App\Entity\Employee;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmployeeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class)
            ->add('username', TextType::class)
            ->add('specialty', ChoiceType::class,[
                'choices' => [
                    'Odontologas' => 'Odontologas',
                    'Genekologas' => 'Genekologas',
                    'Logas' => 'Logas'
                ]
            ])
            ->add('phone', TextType::class)
            ->add('roles', ChoiceType::class,[
                'mapped' => false,
                'multiple' => true,
                'choices' => [
                    'Admin' =>  'ROLE_ADMIN',
                    'Laborant' => 'ROLE_LABORANT',
                    'Doctor' => 'ROLE_DOCTOR'
                ]
            ])
            ->add('plain_password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ))
            ->add('save', SubmitType::class, [
                'attr' => ['class' => 'save'],
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Employee::class,
        ]);
    }
}
