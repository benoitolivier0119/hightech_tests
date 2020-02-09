<?php

namespace App\Controller;

use App\Repository\GamerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Gamer2Controller extends AbstractController
{
    /**
     * @Route("/gamer/all", name="gamer")
     */
    public function index(GamerRepository $repository)
    {
        $gamer = $repository->findAll();
        dump($gamer);
        return $this->render('gamer2/gamer.html.twig', [
          'gamer' => $gamer,
        ]);
    }

    /**
     * @Route("/gamer2/{id}", name="afficher_gamer")
     */
    public function afficherGamer($id, GamerRepository $repository)
    {
        $gamer = $repository->find($id);
        return $this->render('gamer2/afficherGamer.html.twig',[
            'gamer'=>$gamer,
        ]
    
    );
    }
}

