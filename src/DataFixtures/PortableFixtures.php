<?php

namespace App\DataFixtures;

use App\Entity\Portable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PortableFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
            $p1 = new Portable();
            $p1->setMarque("ASUS Vivobook 17 M712DA-BX045T")
            ->setDiagonale("17.3")
            ->setChipset("aucune")
            ->setProcesseur("AMD Ryzen 7 3700U")
            ->setRam("8")
            ->setPrix("799")
            ->setImage("portable-a1.jpg")
            ->setStockage("SSD 128 Go + HDD 1 To")
            ->setDescription("Mince, élégant et discret, le PC portable ASUS Vivobook 17 M712DA vous offre la puissance et la mobilité dont vous avez besoin. Son écran de 17.3\" à cadre mince et son clavier chicklet offrent un excellent confort d'utilisation au quotidien, en mobilité ou à la maison.")
            ;
            $manager->persist($p1);
            $p2 = new Portable();
            $p2->setMarque("ASUS Vivobook S14 S412DA-EK005T avec NumPad")
            ->setDiagonale("14")
            ->setChipset("aucune")
            ->setProcesseur("AMD Ryzen 5 3500U")
            ->setRam("14")
            ->setPrix("599")
            ->setImage("portable-a2.jpg")
            ->setStockage("SSD 256 Go")
            ->setDescription("Emportez le PC portable ASUS Vivobook S14 S412DA partout avec vous ! A la fois reine de beauté, condensé de performance et modèle de légèreté, cette machine répondra parfaitement à tous vos besoins, à domicile ou en déplacement.")
            ;
            $manager->persist($p2);
            $p3 = new Portable();
            $p3->setMarque("ASUS ZenBook Duo UX481FA-BM011T avec ScreenPad")
            ->setDiagonale("14")
            ->setChipset("aucune")
            ->setProcesseur("Intel Core i7-10510U")
            ->setRam("16")
            ->setPrix("1499")
            ->setImage("portable-a3.jpg")
            ->setStockage("SSD 512 Go")
            ->setDescription("L'ordinateur portable ASUS ZenBook Duo UX481 encourage la créativité et la productivité grâce à son écran secondaire ASUS ScreenPad Plus, en harmonie avec l'écran principal. Le confort de travail est aussi maximisé avec la charnière Ergolift.")
            ;
            $manager->persist($p3);
            $p4 = new Portable();
            $p4->setMarque("Acer Aspire 5 A514-52-3633")
            ->setDiagonale("14")
            ->setChipset("aucune")
            ->setProcesseur("Intel Core i3-10110U")
            ->setRam("8")
            ->setPrix("629")
            ->setImage("portable-a4.jpg")
            ->setStockage("SSD 1 To")
            ->setDescription("Gagnez en confort et en mobilité avec le PC portable Acer Aspire 5 A514-52 ! Parfait pour les déplacements, grâce à son format compact avec écran à cadre mince, cet ordinateur portable ne néglige pas pour autant le confort et les performances.")
            ;
            $manager->persist($p4);
            $p5 = new Portable();
            $p5->setMarque("Acer Swift 5 SF514-53T-51L3 Gris")
            ->setDiagonale("14")
            ->setChipset("aucune")
            ->setProcesseur("Intel Core i5-8265U")
            ->setRam("8")
            ->setPrix("949")
            ->setImage("portable-a5.jpg")
            ->setStockage("SSD 256 Go")
            ->setDescription("Le PC portable Acer Swift 5 SF514-53T-51L3 offre de très bonnes performances et un fonctionnement rapide grâce à son processeur Intel Core i5-8265U, ses 8 Go de mémoire DDR4 et son SSD M.2 de 256 Go. Il dispose d'un superbe écran IPS tactile 14\" Full HD et d'un système audio performant.")
            ;
            $manager->persist($p5);
            $p6 = new Portable();
            $p6->setMarque("Dell G3 15 3590")
            ->setDiagonale("15.6")
            ->setChipset("aucune")
            ->setProcesseur("Intel Core i7-9750H")
            ->setRam("8")
            ->setPrix("1379")
            ->setImage("portable-a6.jpg")
            ->setStockage("SSD 512 Go")
            ->setDescription("L'ordinateur portable Dell G3 15 3590 (W3MYP) est équipé d'un écran 144 Hz IPS Full HD de 15.6\", du processeur Intel Core i7-9750H, 8 Go de mémoire, du chipset graphique NVIDIA GeForce GTX 1660 Ti avec 6 Go de mémoire et d'un disque SSD PCIe NVMe de 512 Go.")
            ;
            $manager->persist($p6);
            $p7 = new Portable();
            $p7->setMarque("Dell Inspiron 14 7490")
            ->setDiagonale("14")
            ->setChipset("aucune")
            ->setProcesseur("Intel Core i5-10210U")
            ->setRam("8")
            ->setPrix("1149")
            ->setImage("portable-a7.jpg")
            ->setStockage("SSD 512 Go")
            ->setDescription("Performant et compact, le Dell Inspiron 14 7490 vous permet de travailler et de vous divertir dans de très bonnes conditions. Avec son format compact avec écran 14\" à cadre mince et sa conception robuste, c'est un excellent compagnon mobile.")
            ;
            $manager->persist($p7);
            $p8 = new Portable();
            $p8->setMarque("HP Pavilion x360 14-dh0037nf")
            ->setDiagonale("14")
            ->setChipset("aucune")
            ->setProcesseur("Intel Core i7-8565U")
            ->setRam("8")
            ->setPrix("899")
            ->setImage("portable-a8.jpg")
            ->setStockage("SSD 512 Go")
            ->setDescription("Gagnez en performance et en confort de travail avec le HP Pavilion x360 14-dh0037nf et son écran tactile rotatif sur 360° ! Grâce à sa conception flexible et son écran à bords minces, il s'adaptera à vos besoins et maximisera voter confort.")
            ;
            $manager->persist($p8);
            $p9 = new Portable();
            $p9->setMarque("Lenovo IdeaPad S340-14IWL")
            ->setDiagonale("14")
            ->setChipset("aucune")
            ->setProcesseur("Intel Core i7-8565U")
            ->setRam("14")
            ->setPrix("899")
            ->setImage("portable-a9.jpg")
            ->setStockage("512 Go")
            ->setDescription("Compact et performant, le PC portable Lenovo IdeaPad S340-14IWL est un excellent compagnon mobile. Avec son écran à cadre mince et son clavier rétroéclairé, il offre un confort d'utilisation optimisé.")
            ;
            $manager->persist($p9);
        $manager->flush();
    }

}
