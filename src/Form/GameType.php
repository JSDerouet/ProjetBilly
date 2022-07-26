<?php

namespace App\Form;

use App\Entity\Caractere;
use App\Entity\Game;
use App\Entity\Item;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
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
            //->add('items',EntityType::class, [
            //    'class' => Item::class,
            //    'label' => 'Choisis 3 objets de départ',
            //    'choice_label' => 'name',
            //    'multiple'=>true,
            //    'expanded'=>true,
            //])
            ->add('pv', NumberType::class, [
            ])
            ->add('chance', NumberType::class, [
            ])
            ->add('gloire', NumberType::class, [
            ])
            ->add('richesse', NumberType::class, [
            ])
            ->add('damage', NumberType::class, [
            ])
            ->add('armor', NumberType::class, [
            ])
            ->add('critique', NumberType::class, [
            ])
            ->add('pvmax', NumberType::class, [
            ])
            ->add('habileteCarac', NumberType::class, [
            ])
            ->add('habileteItem', NumberType::class, [
            ])
            ->add('habileteGain', NumberType::class, [
            ])
            ->add('adresseCarac', NumberType::class, [
            ])
            ->add('adresseItem', NumberType::class, [
            ])
            ->add('adresseGain', NumberType::class, [
            ])
            ->add('enduranceCarac', NumberType::class, [
            ])
            ->add('enduranceItem', NumberType::class, [
            ])
            ->add('enduranceGain', NumberType::class, [
            ])
            ->add('chanceCarac', NumberType::class, [
            ])
            ->add('chanceItem', NumberType::class, [
            ])
            ->add('chanceGain', NumberType::class, [
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
