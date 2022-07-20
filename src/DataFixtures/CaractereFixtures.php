<?php

namespace App\DataFixtures;

use App\Entity\Caractere;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CaractereFixtures extends Fixture
{
    public const CARACTERE = [
        ['name'=>'Guerrier', 'damage'=>1, 'habilete'=>2, 'chance'=>-1, 'description'=>'vous infligez +1 DÉGÂTS à toutes vos attaques. Baston!!'],
        ['name'=>'Prudent', 'chance'=>2, 'habilete'=>-1, 'description'=>'lorsque vous êtes face à un combat, vous pouvez utiliser votre CHANCE pour l\'esquiver totalement en le remportant par pur hasard! Pour cela, faites un JET DE CHANCE et dépensez autant de points de CHANCE qu\'indiqué sur la ligne d\'esquive de LA TABLE DES SITUATIONS. Attention cependant, si votre jet de chance échoue, vous devrez jouer le combat normalement, mais perdrez seulement 1 POINT DE CHANCE pour votre essai raté.
        En combat, si l\'attaque d\'un adversaire vous tue, vous pouvez miraculeusement survivre à l\'impact en faisant un JET DE CHANCE dont le coût débute à 1 et augmente d\'un point pour chaque esquive de mort réussie durant le combat.Si votre jet réussit, les dégâts reçus sont annulés et vous vivrez un tour de plus; sinon, vous mourrez. Ce sont des choses qui arrivent.
        Durant la phase d\'attaque, vous pouvez à n\'importe quel moment effectuer un JET DE CHANCE pour DOUBLER les dégâts que vous causer durant ce tour contre seulement 1 point de CHANCE. Si votre jet réussit, les dégâts infligés sont doublés et vous porterez un coup chanceux à votre ennemi. Si votre jet échoue, vous perdrez vorte point de chance et infligez 0 dommages à votre adversaire pour ce tour.'],
        ['name'=>'Paysan', 'endurance'=>2, 'adresse'=>-1, 'description'=>'un paysan, c\'est solide. Genre ultra solide. Vos mains dures et rugueuses peuvent râper du fromage par simple friction. Quoi qu\'il arrive, sans aucune exception, même divine,vous ne pouvez subir plus de 3 points de dommages pendant une phase d\'attaque. Cette réduction s\'effectue APRÈS le calcul des DÉGÂTS bonus de l\'adversaire et de votre ARMURE, en tout dernier. Si une grosse gifle venait vous infliger 5 PV de dommages, vous n\'en perdriez que 3. Attention cependant, les dommages infligés entre les tours s\'appliquent quand même (poison, magie, enchantement, feu, situation spéciale, etc.)'],
        ['name'=>'Débrouillard', 'adresse'=>2, 'endurance'=>-1, 'description'=>'vous êtes un vrai filou et vous êtes assez rapide pour forcer le destin! Vous pouvez relancer votre dé de phase d\'attaque une fois par tour si le montant ne vous convient pas. Attention cependant, le second lancer est définitif. Pratique pour éviter ce triste 1 et avoir une chance d\'obtenir un 6 bien juteux! Ce pouvoir ne s\'applique pas aux phases d\'esquive.'],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::CARACTERE as $key => $caracteres) {
            $caractere = new Caractere();
            $caractere->setName($caracteres['name']);
            $caractere->setDescription($caracteres['description']);
            $caractere->setHabilete($caracteres['habilete'] ?? null);
            $caractere->setAdresse($caracteres['adresse'] ?? null);
            $caractere->setEndurance($caracteres['endurance'] ?? null);
            $caractere->setChance($caracteres['chance'] ?? null);
            $caractere->setDamage($caracteres['damage'] ?? null);
            $caractere->setArmor($caracteres['armor'] ?? null);
            $caractere->setCrit($caracteres['crit'] ?? null);
            $manager->persist($caractere);
        }

        $manager->flush();
    }
}
