<?php

namespace App\Controller;

use App\Repository\PortableRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Portable2Controller extends AbstractController
{
    /**
     * @Route("/portable/all", name="portable")
     */
    public function index(PortableRepository $repository)
    {
        $portable = $repository->findAll();
        dump($portable);
        return $this->render('portable2/portable.html.twig', [
          'portable' => $portable,
        ]);
    }

    /**
     * @Route("/portable2/{id}", name="afficher_portable")
     */
    public function afficherPortable($id, PortableRepository $repository)
    {
        $portable = $repository->find($id);
        return $this->render('portable2/afficherPortable.html.twig',[
            'portable'=>$portable,
        ]
    
    );
    }
}
