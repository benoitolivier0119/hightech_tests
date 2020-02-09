<?php
namespace App\DataFixtures;
use App\Entity\Gamer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
class GamerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $g1 = new Gamer();
            $g1->setMarque("ASUS ROG Zephyrus S GX535GV-ES005T")
            ->setDiagonale("17.3")
            ->setChipset("RTX 2060 6 Go")
            ->setProcesseur("Intel Core i7-9750H")
            ->setRam("16")
            ->setPrix("1799")
            ->setImage("gamer-a1.jpg")
            ->setStockage("SSD 512 Go")
            ->setDescription("Taillé pour les Gamers nomades, le PC portable ASUS ROG Zephyrus S GX535 offre de hautes performances de jeu dans un châssis de moins de 16 mm d'épaisseur ! Grâce à sa finesse et son fonctionnement très silencieux il vous accompagnera dans tous vos déplacements.")
            ;
            $manager->persist($g1);
            $g2 = new Gamer();
            $g2->setMarque("ASUS ROG STRIX HERO III G531GV-ES316T")
            ->setDiagonale("15.6")
            ->setChipset("RTX 2060 6 Go")
            ->setProcesseur("Intel Core i7-9750H")
            ->setRam("16")
            ->setPrix("1649")
            ->setImage("gamer-a2.jpg")
            ->setStockage("SSD 512 Go")
            ->setDescription("Le PC Portable Gaming ASUS ROG STRIX HERO III G531GV-ES316T vous permettra de jouer dans les meilleurs conditions à vos jeux PC favoris grâce à des composants ultra-performants et à une conception haut de gamme qui ne laisse rien au hasard.")
            ;
            $manager->persist($g2);
            $g3 = new Gamer();
            $g3->setMarque("ASUS ROG Zephyrus M GU532GU-AZ084T")
            ->setDiagonale("15.6")
            ->setChipset("GTX 1660 Ti 6 Go")
            ->setProcesseur("Intel Core i7-9750H")
            ->setRam("16")
            ->setPrix("1799")
            ->setImage("gamer-a3.jpg")
            ->setStockage("SSD 512 Go")
            ->setDescription("Taillé le divertissement numérique mobile, le PC portable ASUS ROG Zephyrus M GU532GU vous offre à la fois la puissance, la mobilité et le confort dont vous avez besoin pour jouer dans d'excellentes conditions partout !")
            ;
            $manager->persist($g3);
            $g4 = new Gamer();
            $g4->setMarque("MSI GE75 Raider 8RE-068XFR")
            ->setDiagonale("17.3")
            ->setChipset("GTX 1060 6 Go")
            ->setProcesseur("Intel Core i7-8750H ")
            ->setRam("16")
            ->setPrix("1299")
            ->setImage("gamer-a4.jpg")
            ->setStockage("SSD 256 Go + HDD 1 To")
            ->setDescription("Profitez d'excellentes performances de jeu grâce au PC portable MSI GE75 Raider 8RE ! Conçu pour les gamers, cet ordinateur portable MSI bénéficie d'un châssis compact grâce à son écran de 17 pouces aux bords ultra-minces avec résolution Full HD et fréquence de 144 Hz.")
            ;
            $manager->persist($g4);
            $g5 = new Gamer();
            $g5->setMarque("MSI GS65 Stealth Thin 9SD-640FR")
            ->setDiagonale("15.6")
            ->setChipset("GTX 1660 Ti 6 Go")
            ->setProcesseur("Intel Core i7-9750H")
            ->setRam("16")
            ->setPrix("1549")
            ->setImage("gamer-a5.jpg")
            ->setStockage("SSD 512 Go")
            ->setDescription("Gagnez en mobilité et profitez de hautes performances avec le PC portable MSI GS65 Stealth Thin 9SD ! Malgré son design élégant et ultra-mince, il offre de hautes performances et un confort exceptionnel notamment grâce à son écran IPS 144 Hz, son clavier Gamer et son système audio de qualité.")
            ;
            $manager->persist($g5);
            $g6 = new Gamer();
            $g6->setMarque("MSI GT76 Titan DT 9SF-017FR")
            ->setDiagonale("17.3")
            ->setChipset("RTX 2070 8 Go")
            ->setProcesseur("Intel Core i7-9700K")
            ->setRam("32")
            ->setPrix("3499")
            ->setImage("gamer-a6.jpg")
            ->setStockage("SSD 1 To (2x 512 Go) + HDD 1 To")
            ->setDescription("Repoussez les limites de la performance et de la qualité d'image avec le PC portable MSI GT76 Titan DT 9SF ! Conçu pour les gamers, il offre un parfait confort de jeu grâce à ses composants ultra-performants, son grand écran 144 Hz, son système audio 2.1 de qualité et son clavier Gamer SteelSeries.")
            ;
            $manager->persist($g6);
            $g7 = new Gamer();
            $g7->setMarque("Gigabyte Aero 17 SA-7FR1020SO")
            ->setDiagonale("17.3")
            ->setChipset("GTX 1660 Ti 6")
            ->setProcesseur("Intel Core i7-9750H")
            ->setRam("8")
            ->setPrix("1899")
            ->setImage("gamer-a7.jpg")
            ->setStockage("SSD 256 Go")
            ->setDescription("Gagnez en confort et jouez ou travaillez dans d'excellentes conditions avec le PC portable Gigabyte Aero 17 ! Son écran à cadre mince, fréquence de 144 Hz et certification X-Rite Pantone offre un affichage ultra-fluide !")
            ;
            $manager->persist($g7);
            $g8 = new Gamer();
            $g8->setMarque("Alienware m15 R2 (PT3K2)")
            ->setDiagonale("15.6")
            ->setChipset("RTX 2070 8 Go")
            ->setProcesseur("Intel Core i7-9750H")
            ->setRam("16")
            ->setPrix("2999")
            ->setImage("gamer-a8.jpg")
            ->setStockage("SSD 1 To (2x 512 Go)")
            ->setDescription("Gagnez en mobilité sans négliger les performances avec le PC portable Alienware m15 R2 ! Ne dépassant pas 2 cm d'épaisseur, ce poids plume sera un compagnon mobile idéal pour les gamers. Pour votre confort, il dispose d'un clavier rétroéclairé et d'un écran OLED Ultra HD à bordure fine.")
            ;
            $manager->persist($g8);
            $g9 = new Gamer();
            $g9->setMarque("Lenovo Legion Y740-15IRHg (81UH001BFR)")
            ->setDiagonale("15.6")
            ->setChipset("RTX 2060 6 Go")
            ->setProcesseur("Intel Core i7-9750H")
            ->setRam("16")
            ->setPrix("1799")
            ->setImage("gamer-a9.jpg")
            ->setStockage("SSD 256 Go + HDD 1 To")
            ->setDescription("Gagnez en confort de jeu avec le PC portable Gamer Lenovo Legion Y740 ! Avec ses composants performants, son écran 144 Hz HDR 400 compatible G-SYNC, son sytème de rétroéclairage Corsair iCUE, il vous offre la puissance et le confort dont vous avez besoin !")
            ;
            $manager->persist($g9);
        $manager->flush();
    }
}