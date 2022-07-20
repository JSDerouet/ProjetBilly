<?php

namespace App\Form;

use App\Entity\Game;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GameType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('caractere')
            ->add('pv')
            ->add('chance')
            ->add('gloire')
            ->add('richesse')
            ->add('damage')
            ->add('armor')
            ->add('critique')
            ->add('pvmax')
            ->add('habileteBase')
            ->add('habileteCarac')
            ->add('habileteItem')
            ->add('habileteGain')
            ->add('habileteTotal')
            ->add('adresseBase')
            ->add('adresseCarac')
            ->add('adresseItem')
            ->add('adresseGain')
            ->add('adresseTotal')
            ->add('enduranceBase')
            ->add('enduranceCarac')
            ->add('enduranceItem')
            ->add('enduranceGain')
            ->add('enduranceTotal')
            ->add('chanceBase')
            ->add('chanceCarac')
            ->add('chanceItem')
            ->add('chanceGain')
            ->add('chanceTotal')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Game::class,
        ]);
    }
}
