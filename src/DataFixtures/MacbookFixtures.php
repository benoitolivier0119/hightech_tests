<?php

namespace App\DataFixtures;

use App\Entity\Macbook;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class MacbookFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $m1 = new Macbook();
        $m1->setMarque("Apple MacBook Air 13")
        ->setDiagonale("13")
        ->setChipset("aucune")
        ->setProcesseur("Intel Core m3")
        ->setRam("8")
        ->setPrix("1099")
        ->setImage("macbook1.jpg")
        ->setStockage("SSD 128 Go")
        ->setDescription("Utilisez le MacBook Air toute la journée grâce à son autonomie maximale de 12 heures ! Compact et performant, il vous accompagnera dans tous vos déplacements et vous permettra de travailler efficacement et de profiter d'un divertissement de qualité.")
        ;
        $manager->persist($m1);
        $m2 = new Macbook();
        $m2->setMarque("Apple macbook Air 13 pouces Argent")
        ->setDiagonale("13")
        ->setChipset("aucune")
        ->setProcesseur("intel")
        ->setRam("16")
        ->setPrix("1239")
        ->setImage("macbook2.jpg")
        ->setStockage(" SSD 128 Go")
        ->setDescription("Le nouveau MacBook Air (2019) c'est : Un écran Retina avec affichage True Tone, un processeur Intel Core i5, 8 Go de RAM, un SSD 128 Go, le trackpad Force Touch, deux ports Thunderbolt 3 et le capteur d'empreinte digitale Touch ID. Performances, élégance et mobilité sont réunies en un seul appareil.")
        ;
        $manager->persist($m2);
        $m3 = new Macbook();
        $m3->setMarque("Apple MacBook Air 13 avec écran Retina True Tone Gris sidéral")
        ->setDiagonale("13")
        ->setChipset("aucune")
        ->setProcesseur("intel")
        ->setRam("8")
        ->setPrix("1489")
        ->setImage("macbook3.jpg")
        ->setStockage("SSD 256 Go")
        ->setDescription("Le nouveau MacBook Air (2019) c'est : Un écran Retina avec affichage True Tone, un processeur Intel Core i5, 8 Go de RAM, un SSD 256 Go, le trackpad Force Touch, deux ports Thunderbolt 3 et le capteur d'empreinte digitale Touch ID. Performances, élégance et mobilité sont réunies en un seul appareil.")
        ;
        $manager->persist($m3);
        $m4 = new Macbook();
        $m4->setMarque("Apple MacBook Pro 13 pouces")
        ->setDiagonale("15")
        ->setChipset("aucune")
        ->setProcesseur("intel")
        ->setRam("8")
        ->setPrix("1739")
        ->setImage("macbook4.jpg")
        ->setStockage("SSD 256 ")
        ->setDescription("L'Apple MacBook Pro dans sa version 2019 est plus puissant et plus performant que jamais. Équipé d'un processeur Intel Core 4 coeurs, de 8 Go de RAM, d'un SSD 256 Go, d'un écran Retina True Tone et d'une Touch Bar, il dispose de tous les ingrédients pour vous rendre plus productifs.")
        ;
        $manager->persist($m4);
        $m5 = new Macbook();
        $m5->setMarque("Apple MacBook Pro 13 pouces Gris sidéral")
        ->setDiagonale("13")
        ->setChipset("aucune")
        ->setProcesseur("intel")
        ->setRam("8")
        ->setPrix("2239")
        ->setImage("macbook5.jpg")
        ->setStockage("SSD 512")
        ->setDescription("L'Apple MacBook Pro dans sa version 2019 est plus puissant et plus performant que jamais. Équipé d'un processeur Intel Core 4 coeurs, de 8 Go de RAM, d'un SSD 512 Go, d'un écran Retina True Tone et d'une Touch Bar, il dispose de tous les ingrédients pour vous rendre plus productifs.")
        ;
        $manager->persist($m5);
        $m6 = new Macbook();
        $m6->setMarque("Apple MacBook Pro 16 pouces Bar Argent")
        ->setDiagonale("16")
        ->setChipset("radeon pro 5300M")
        ->setProcesseur("intel")
        ->setRam("16")
        ->setPrix("2689")
        ->setImage("macbook6.jpg")
        ->setStockage("SSD 512")
        ->setDescription("Gagnez en confort avec l'Apple MacBook Pro avec écran Retina de 16 pouces ! Avec un affichage de haute qualité, une autonomie longue durée et un clavier Magic Keyboard avec Touch Bar, il offre un parfait confort de travail !")
        ;
        $manager->persist($m6);
        $m7 = new Macbook();
        $m7->setMarque("Apple MacBook Pro 16 pouces Gris Sidéral")
        ->setDiagonale("16")
        ->setChipset("radeon pro 5500M")
        ->setProcesseur("intel")
        ->setRam("16")
        ->setPrix("3189")
        ->setImage("macbook7.jpg")
        ->setStockage("SSD 1 To")
        ->setDescription("Gagnez en confort avec l'Apple MacBook Pro avec écran Retina de 16 pouces ! Avec un affichage de haute qualité, une autonomie longue durée et un clavier Magic Keyboard avec Touch Bar, il offre un parfait confort de travail !")
        ;
        $manager->persist($m7);
        $m8 = new Macbook();
        $m8->setMarque("Apple macbook 15 pouces Gris Sidéral")
        ->setDiagonale("15")
        ->setChipset("radeon pro 560x")
        ->setProcesseur("intel")
        ->setRam("16")
        ->setPrix("6299")
        ->setImage("macbook8.jpg")
        ->setStockage("SSD 4 To")
        ->setDescription("D'une finesse et d'une légèreté hors du commun, le MacBook Pro est encore plus rapide et plus puissant qu'avant. Son écran Retina, particulièrement lumineux et coloré, offre une image sublime. Innovant et créatif, le MacBook Pro a été inventé pour que vous puissiez tout réinventer.")
        ;
        $manager->persist($m8);
        $m9 = new Macbook();
        $m9->setMarque("Apple MacBook Pro 15 pouces Gris Sidéral")
        ->setDiagonale("15")
        ->setChipset("radeon pro 560x")
        ->setProcesseur("intel")
        ->setRam("15")
        ->setPrix("6599")
        ->setImage("macbook9.jpg")
        ->setStockage("SSD 4 To")
        ->setDescription("D'une finesse et d'une légèreté hors du commun, le MacBook Pro est encore plus rapide et plus puissant qu'avant. Son écran Retina, particulièrement lumineux et coloré, offre une image sublime. Innovant et créatif, le MacBook Pro a été inventé pour que vous puissiez tout réinventer.")
        ;
        $manager->persist($m9);
        $manager->flush();
    }
}

