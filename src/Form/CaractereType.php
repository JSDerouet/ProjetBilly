<?php

namespace App\Form;

use App\Entity\Caractere;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CaractereType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('habilete')
            ->add('adresse')
            ->add('endurance')
            ->add('chance')
            ->add('damage')
            ->add('armor')
            ->add('crit')
            ->add('description')
            ->add('game')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Caractere::class,
        ]);
    }
}
