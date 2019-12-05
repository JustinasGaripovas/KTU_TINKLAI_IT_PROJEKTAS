<?php

namespace App\Form;

use App\Entity\Employee;
use App\Entity\Examination;
use App\Entity\ScheduelDay;
use App\Entity\ScheduelSlot;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;

class ExaminationType extends AbstractType
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $query = $builder;

        if ($this->security->isGranted('ROLE_LABORANT')) {
            $query
                ->add('name', ChoiceType::class,[
                    'choices' => [
                        'Kraujo tyrimas' => 'Kraujo tyrimas',
                        'Kitas tyrimas' => 'Kitas tyrimas',
                        'Penktas tyrimas' => 'Penktas tyrimas',
                    ]
                ])
                ->add('result');
        }

       if ($this->security->isGranted('ROLE_DOCTOR')) {
            $query
                ->add('comment');
        }

       if ($this->security->isGranted('ROLE_USER')) {
            $query
                ->add('name', ChoiceType::class,[
                    'choices' => [
                        'Kraujo tyrimas' => 'Kraujo tyrimas',
                        'Kitas tyrimas' => 'Kitas tyrimas',
                        'Penktas tyrimas' => 'Penktas tyrimas',
                    ]
                ]);
        }



        $query
            ->add('save', SubmitType::class, [
                'attr' => ['class' => ' mt-2 save btn btn-success ',],
            ]);

        return $query;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Examination::class,
        ]);
    }
}
