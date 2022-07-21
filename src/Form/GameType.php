<?php

namespace App\Form;

use App\Entity\Caractere;
use App\Entity\Game;
use App\Entity\Item;
use App\Repository\ItemRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GameType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label'=>'Nom du billy'
            ])
            ->add('caracteres',EntityType::class, [
                'class' => Caractere::class,
                'label' => 'Choisis le cararctère de ton billy',
                'choice_label' => 'name',
            ])
            ->add('items',EntityType::class, [
                'class' => Item::class,
                'label' => 'Choisis 3 objets de départ',
                'choice_label' => 'name',
                'multiple'=>true,
                'expanded'=>true,
            ])
            ->add('pv', NumberType::class, [
                'disabled'=>true
            ])
            ->add('chance', NumberType::class, [
                'disabled'=>true
            ])
            ->add('gloire', NumberType::class, [
                'disabled'=>true
            ])
            ->add('richesse', NumberType::class, [
                'disabled'=>true
            ])
            ->add('damage', NumberType::class, [
                'disabled'=>true
            ]
            )
            ->add('armor', NumberType::class, [
                'disabled'=>true
            ])
            ->add('critique', NumberType::class, [
                'disabled'=>true
            ])
            ->add('pvmax', NumberType::class, [
                'disabled'=>true
            ])
            ->add('habileteGain', NumberType::class, [
                'disabled'=>true
            ])
            ->add('habileteTotal', NumberType::class, [
                'disabled'=>true
            ])
            ->add('adresseGain', NumberType::class, [
                'disabled'=>true
            ])
            ->add('adresseTotal', NumberType::class, [
                'disabled'=>true
            ])
            ->add('enduranceGain', NumberType::class, [
                'disabled'=>true
            ])
            ->add('enduranceTotal', NumberType::class, [
                'disabled'=>true
            ])
            ->add('chanceGain', NumberType::class, [
                'disabled'=>true
            ])
            ->add('chanceTotal', NumberType::class, [
                'disabled'=>true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Game::class,
        ]);
    }
}
