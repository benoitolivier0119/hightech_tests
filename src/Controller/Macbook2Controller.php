<?php

namespace App\Controller;

use App\Repository\MacbookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Macbook2Controller extends AbstractController
{
    /**
     * @Route("/macbook/all", name="macbook")
     */
    public function index(MacbookRepository $repository)
    {
        $macbook = $repository->findAll();
        dump($macbook);
        return $this->render('macbook2/macbook.html.twig', [
          'macbook' => $macbook,
        ]);
    }

    /**
     * @Route("/macbook2/{id}", name="afficher_macbook")
     */
    public function afficherMacbook($id, MacbookRepository $repository)
    {

        $macbook = $repository->find($id);
        dump($macbook);
        return $this->render('macbook2/afficherMacbook.html.twig',[
            'macbook'=>$macbook,
        ]
    
    );
    }
}

