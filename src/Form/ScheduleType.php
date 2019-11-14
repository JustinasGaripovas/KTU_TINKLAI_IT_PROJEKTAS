<?php

namespace App\Form;

use App\Entity\Scheduel;
use App\Entity\ScheduelSlot;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ScheduleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('day')
            ->add('timeSlots', EntityType::class,
                array(
                    'class' => ScheduelSlot::class,
                    'label' => 'Schedule slot'
                )
            );;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Scheduel::class,
        ]);
    }
}
