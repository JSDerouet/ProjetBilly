<?php

namespace App\DataFixtures;

use App\Entity\Livre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LivreFixtures extends Fixture
{
        public const LIVRES = [
            [
                'numero' => 1,
                'title' => 'La Forteresse Du Chaudron Noir',
                'description' => 'Au fin fond de la contrée d’Errener, le jeune Billy pensait déjà sa route toute tracée.
                Mais le destin est souvent taquin. Et quand ressurgit un mal ancien menaçant l’équilibre de tout le royaume,
                c’est entre ses mains que repose soudainement le sort de tous.
                Vous ne serez pas seul dans votre quête car à  vos côtés se tient un puissant allié : le Pyro-Barbare !
                Votre Billy parviendra-t-il à sauver le royaume de l’apocalypse ?
                Ou périra-t-il honteusement face à l’adversité pour finir dans un caniveau ?
                Il ne tient qu’à vous de le découvrir puisque : VOUS ÊTES BILLY !',
                'image' => 'pyrobilly.jpeg',
            ],
            [
                'numero' => 2,
                'title' => 'La Corne Des Sables d\'Ivoire',
                'description' => 'Cap donc sur le désert de Stia à la recherche de la mystérieuse Corne des Sables d’Ivoire.
                Après leurs aventures incroyables en Erenner face au terrible Virilus,
                Billy et le Pyro-Barbare partent à la recherche du mystérieux Fanta, qu’ils attendent désormais à Nouvelle-Nouvelle Azur,
                un paisible village de pêcheurs où boire en attendant la mort est l’unique distraction.
                Très vite, la tranquilité balnéaire des lieux est troublée par l’arrivée d’une faction de soldats venus interpeller nos deux héros.
                Pourquoi ? Qu’importe. Seule compte la fuite et, dans son sillage,
                le début d’une nouvelle odyssée qui vous mènera sur les terres arides de Stia où règne un peuple nain aux us et coutumes étranges. ',
                'image' => 'ouiiii.png',
            ],
        ];

            public function load(ObjectManager $manager): void
            {
                foreach (self::LIVRES as $key => $livrea) {
                    $livre = new Livre();
                    $livre->setNumero($livrea['numero']);
                    $livre->setTitle($livrea['title']);
                    $livre->setDescription($livrea['description']);
                    $livre->setImage($livrea['image']);
                    $manager->persist($livre);
                }
                $manager->flush();
            }
}
