<?php
namespace App\DataFixtures;
use App\Entity\Chromebook;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
class ChromebookFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $c1 = new Chromebook();
            $c1->setMarque("ASUS Chromebook C423NA-EC0109")
            ->setDiagonale("14")
            ->setChipset("aucune")
            ->setProcesseur("Intel Celeron N3350")
            ->setRam("4")
            ->setPrix("399")
            ->setImage("chromebook-a1.jpg")
            ->setStockage("64 Go")
            ->setDescription("Compact et léger, l'ordinateur portable ASUS Chromebook C423NA offre polyvalence et flexibilité avec sa charnière rotative sur 180°. De plus, avec jusqu'à 10 heures d'autonomie, c'est un parfait compagnon mobile ! Un achat idéal pour les étudiants et les utilisateurs souvent en déplacement.")
            ;
            $manager->persist($c1);





            $c2 = new Chromebook();
            $c2->setMarque("ASUS Chromebook Flip 14 C433TA-AJ0034")
            ->setDiagonale("14")
            ->setChipset("aucune")
            ->setProcesseur("Intel Pentium Gold 4415Y")
            ->setRam("8")
            ->setPrix("629")
            ->setImage("chromebook-a2.jpg")
            ->setStockage("128 Go")
            ->setDescription("Avec son format compact, son design convertible et son écran à cadre mince, le PC portable ASUS Chromebook Flip 14 C433TA vous offre le confort et la mobilité dont vous avez besoin au quotidien.")
            ;
            $manager->persist($c2);




            $c3 = new Chromebook();
            $c3->setMarque("ASUS Chromebook C204MA-GJ0074")
            ->setDiagonale("11.6")
            ->setChipset("aucune")
            ->setProcesseur("Intel Celeron N4000")
            ->setRam("4")
            ->setPrix("279")
            ->setImage("chromebook-a3.jpg")
            ->setStockage("32 Go")
            ->setDescription("Robuste et pratique, l'ASUS Chromebook C204MA est conçu pour résister à une utilisation quotidienne. Avec son format compact et son autonomie longue durée, cet ordinateur portable compact sera un achat idéal pour équiper les salles de classe.")
            ;
            $manager->persist($c3);





            $c4 = new Chromebook();
            $c4->setMarque("ASUS Chromebook C423NA-BV0047")
            ->setDiagonale("14")
            ->setChipset("aucune")
            ->setProcesseur("Intel Pentium N4200")
            ->setRam("8")
            ->setPrix("399")
            ->setImage("chromebook-a4.jpg")
            ->setStockage("32 Go")
            ->setDescription("Compact et léger, l'ordinateur portable ASUS Chromebook C423NA offre polyvalence et flexibilité avec sa charnière rotative sur 180°. De plus, avec jusqu'à 10 heures d'autonomie, c'est un parfait compagnon mobile ! Un achat idéal pour les étudiants et les utilisateurs souvent en déplacement.")
            ;
            $manager->persist($c4);


            
            $c5 = new Chromebook();
            $c5->setMarque("ASUS Chromebook C423NA-EB0048")
            ->setDiagonale("14")
            ->setChipset("aucune")
            ->setProcesseur("Intel Pentium N4200")
            ->setRam("8")
            ->setPrix("449")
            ->setImage("chromebook-a5.jpg")
            ->setStockage("64 Go")
            ->setDescription("Compact et léger, l'ordinateur portable ASUS Chromebook C423NA offre polyvalence et flexibilité avec sa charnière rotative sur 180°. De plus, avec jusqu'à 10 heures d'autonomie, c'est un parfait compagnon mobile ! Un achat idéal pour les étudiants et les utilisateurs souvent en déplacement.")
            ;
            $manager->persist($c5);
            $c6 = new Chromebook();
            $c6->setMarque("ASUS Chromebook C523NA-A20033")
            ->setDiagonale("15.6")
            ->setChipset("aucune")
            ->setProcesseur("Intel Pentium N4200 ")
            ->setRam("8")
            ->setPrix("479")
            ->setImage("chromebook-a6.jpg")
            ->setStockage("64 Go")
            ->setDescription("Compact et léger, l'ASUS Chromebook C523NA offre polyvalence et flexibilité avec son écran tactile et sa charnière rotative sur 180°. De plus, avec jusqu'à 10 heures d'autonomie, c'est un parfait compagnon mobile ! Un achat idéal pour les étudiants et les utilisateurs souvent en déplacement.")
            ;
            $manager->persist($c6);
            $c7 = new Chromebook();
            $c7->setMarque("ASUS Chromebook Flip 14 C434TA-AI0030")
            ->setDiagonale("14")
            ->setChipset("aucune")
            ->setProcesseur("Intel Core i5-8200Y")
            ->setRam("14")
            ->setPrix("849")
            ->setImage("chromebook-a7.jpg")
            ->setStockage("32 Go")
            ->setDescription("Avec son format compact, son design convertible et son écran à cadre mince, le PC portable ASUS Chromebook Flip 14 C434TA vous offre le confort et la mobilité dont vous avez besoin au quotidien.")
            ;
            $manager->persist($c7);
            $c8 = new Chromebook();
            $c8->setMarque("Acer Chromebook Spin 11 R751TN-C8GM")
            ->setDiagonale("11.6")
            ->setChipset("aucune")
            ->setProcesseur("Intel Celeron N3350")
            ->setRam("4")
            ->setPrix("399")
            ->setImage("chromebook-a8.jpg")
            ->setStockage("4 Go")
            ->setDescription("A la fois mobile et flexible, le PC portable Acer Chromebook Spin 11 se plie à vos besoins. Avec sa conception convertible, son écran IPS tactile de 11.6 pouces et son stylet Wacom, il répond efficacement aux besoins des étudiants.")
            ;
            $manager->persist($c8);
            $c9 = new Chromebook();
            $c9->setMarque("ASUS Chromebook Flip C302CA-GU009")
            ->setDiagonale("12.5")
            ->setChipset("aucune")
            ->setProcesseur("Intel Core m3-6Y30")
            ->setRam("8")
            ->setPrix("589")
            ->setImage("chromebook-a9.jpg")
            ->setStockage("32 Go")
            ->setDescription("Compact et léger le Chromebook Flip C302 bénéficie de composants performant et offre une excellente flexibilité grâce à sa charnière rotative sur 360°. De plus, grâce à sa batterie longue durée, c'est un parfait compagnon mobile !")
            ;
            $manager->persist($c9);
        $manager->flush();
    }
}