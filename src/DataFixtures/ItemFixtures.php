<?php

namespace App\DataFixtures;

use App\Entity\Item;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ItemFixtures extends Fixture
{
    public const ITEMS = [
        ['is_start' => true, 'name'=>'l\'épée', 'habilete'=> 4, 'description'=>'une ancienne épée qui appartenait à votre grand-père. Son acier est plutôt bon et elle a été relativement bien entretenue. Lorsque vous jouiez avec étant enfant, personne ne vous interrompait étrangement. L\'utiliser vous confère +4HAB.', 'typage'=>'ARME'],
        ['is_start' => true, 'name'=>'la lance', 'habilete'=> 3, 'adresse'=> 1, 'description'=>'une bonne lance à la hampe solide et à l\'équilibrage satisfaisant. Elleservait à bloquer la porte de la grange, et son maniement est intuitif. Elle vous donne +3HAB et +1ADR', 'typage'=>'ARME'],
        ['is_start' => true, 'name'=>'la morgenstern', 'habilete'=> 1, 'endurance'=> 1, 'damage'=> 1, 'description'=>'une masse à embout étoilé impressionnante. Vous ne sauriez dire si elle est en bon état ou non, et ça n\'a que peu d\'importance. Son manche en métal et son poids dans votre main promettent des dégâts ravageurs. Vous gagnez +1HAB, +1END, +1DEG.', 'typage'=>'ARME'],
        ['is_start' => true, 'name'=>'l\'arc', 'habilete'=> 3, 'adresse'=> 1, 'crit'=> 4, 'description'=>'un ancien arc de guerre, reconverti en arc de chasse. Vous vous souvenez du jour où votre grand-père a tenté de vous apprendre à tirer avec. Si elle peut pulvériser une citrouille aussi bien que la tête d\'une personne, cette arme nécessite cependant d\'utiliser ses deux mains et de n\'équiper aucune autre ARME. Il vous donne cependant +3HAB, +1ADR et +4CRIT.', 'typage'=>'ARME'],
        ['is_start' => true, 'name'=>'la cotte de maille', 'habilete'=> -1, 'adresse'=> -1, 'endurance'=> 1, 'armor'=> 2, 'description'=>'cette armure indémodable appartenait à votre grand-père et est maintenant à votre taille. Elle a servi longtemps à récurer des casseroles, mais ne semble pas avoir souffert, ce qui témoigne de sa solidité et de son poids. Protège beaucoup et peut faire disparaïtre les traces de gras les plus récalcitrantes : -1HAB, -1ADR, +1END, +2ARM.', 'typage'=>'EQUIPEMENT'],
        ['is_start' => true, 'name'=>'la marmite', 'endurance'=> 2, 'armor'=> 1, 'description'=>'cette marmite n\'a rien de magique, mais vous avez appris au fi des années comment la remplir d\'ingrédients pour mitonner des plats délicieux et nourrissants qui vous ont permis une croissance solide et sans (trop) de carences alimentaires. L\'outil idéal pour un chef en herbe! Peut aussi servir (et a servi) de casque de fortune : +2END, +1ARM.', 'typage'=>'EQUIPEMENT'],
        ['is_start' => true, 'name'=>'le pamphlet touristique', 'chance'=> 4, 'description'=>'un guide de la capitale de Lennonia. Rempli d\'informations plus ou moins crédibles et illustré avec un personnage attachant. Choisir ce pamphlet implique cependant quelque chose de beaucoup plus important : que vous savez lire! Et ça, à cette époque, ce n\'est pas donné à tout le monde : +4CHA.', 'typage'=>'EQUIPEMENT'],
        ['is_start' => true, 'name'=>'le kit de soin','chance'=> 1, 'description'=>'en réalité un kit de couture qui a mal tourné. Idéal pour recoudre vos vêtements ou soigner les petits bobos. Nécessite cependant d\'être au calme : DOUBLE LES POINTS DE VIE RÉCUPÉRÉS NATURELLEMENT AU COURS DE L\'AVENTURE (n\'inclut pas les PV récupérés via des artefacts, items ou magies, seulement ceux mentionnés dans le texte) et +1CHA.', 'typage'=>'EQUIPEMENT'],
        ['is_start' => true, 'name'=>'la fourche', 'habilete'=> 1, 'endurance'=> 3, 'description'=>'offerte pour votre cinqième anniversaire par le forgeron du hameau voisin, cette fourche fut votre seule compagnonne durant des années entières de labeur. Arme de fortune, pied de biche improvisé ou outil de terrassement hostile, votre bonne vielle fourche pourrait servir. +1HAB, +3END. Compte comme un objet tenu à la main.', 'typage'=>'OUTILS'],
        ['is_start' => true, 'name'=>'la dague', 'habilete'=> 1, 'crit'=> 6, 'description'=>'habilement dissimulée en couteau à pain par votre papy, ce couteau (ou du moins sa lame) a mis fin à la vie de plusieurs guerriers aguerris en son temps, avant de passer à l\'éxecution systématique de tous les fromages qu\'elle croise sur la table, son ultime champs de bataille. +1HAB +6CRIT. Si vous êtes équipé de l\'ARC ou de deux ARMES, alors le bonus de +6CRIT est quand même appliqué, mais pas le bonus de +1HAB.', 'typage'=>'OUTILS'],
        ['is_start' => true, 'name'=>'le kit d\'escalade', 'adresse'=> 1, 'description'=>'une corde solide attachée à un embout de houe cassée. Vous vous en serviez pour grimper aux arbres ou sur le toit quand vous étiez petit. Pour une raison qui vous échappe, elle semble toujours se fixer du premier coup et se détacher ensuite sans aucun problème. +1ADR', 'typage'=>'OUTILS'],
        ['is_start' => true, 'name'=>'le sac de grains', 'chance'=> 2, 'endurance'=> 2, 'description'=>'un sac de taille moyenne rempli d\'un mélange de grains dont seul votre grand-père avait le secret. Vous avez grandi entouré de ce genre de grains différents et de l\'odeur du pain fraîchement cuit. Les animaux semblent raffoler de ce mélange, et plonger la main dans ce sac vous octroie toujours une grande satisfaction. +2END, +2CHA.', 'typage'=>'OUTILS'],
        ['is_start' => false, 'name' => 'écusson d\'orc déchiré'],
        ['is_start' => false, 'name' => 'boule à neige'],
        ['is_start' => false, 'name' => 'philtre d\'amour', 'description'=>'En commençant par t\'aimer toi même, petit ingrat!! Mais si tu souhaites faire comme tous les autres imbéciles et ignorer mes conseils, prends ceci! C\'est aussi puissant que ton coeur sonne creux!'],
        ['is_start' => false, 'name' => 'écaille de dragon'],
        ['is_start' => false, 'name' => 'lettre de recommandation'],
        ['is_start' => false, 'name' => 'fer à cheval'],
        ['is_start' => false, 'name' => 'petit médaillon', 'description' =>'Son pouvoir protecteur restaurera 2 POINTS DE VIE après chaque combat gagné.'],
        ['is_start' => false, 'name' => 'médaillon de runir', 'description' => 'Le précieux objet vous emplit d\'une énergie nouvelle et vous octroie 1 POINT D\'ENDURANCE supplémentaire.'],
        ['is_start' => false, 'name' => 'grosse clé'],
        ['is_start' => false, 'name' => 'bracelet de contrôle'],
        ['is_start' => false, 'name' => 'passe-partout'],
        ['is_start' => false, 'name' => 'broche dorée'],
        ['is_start' => false, 'name' => 'petite massue', 'description'=>'Si tu n\'as rien d\'autre, ça peut toujours te sauver!'],
        ['is_start' => false, 'name' => 'tresse de centauresse'],
        ['is_start' => false, 'name' => 'flacon d\'acide'],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::ITEMS as $key => $items) {
            $item = new Item();
            $item->setName($items['name']);
            $item->setDescription($items['description'] ?? null);
            $item->setIsStart($items['is_start']);
            $item->setTypage($items['typage'] ?? null);
            $item->setHabilete($items['habilete'] ?? null);
            $item->setAdresse($items['adresse'] ?? null);
            $item->setEndurance($items['endurance'] ?? null);
            $item->setChance($items['chance'] ?? null);
            $item->setDamage($items['damage'] ?? null);
            $item->setArmor($items['armor'] ?? null);
            $item->setCrit($items['crit'] ?? null);
            $manager->persist($item);
        }

        $manager->flush();
    }
}
