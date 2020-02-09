<?php

namespace App\Controller;

use App\Repository\ChromebookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Chromebook2Controller extends AbstractController
{
    /**
     * @Route("/chromebook/all", name="chromebook")
     */
    public function index(ChromebookRepository $repository)
    {
        $chromebook = $repository->findAll();
        dump($chromebook);
        return $this->render('chromebook2/chromebook.html.twig', [
          'chromebook' => $chromebook,
        ]);
    }

    /**
     * @Route("/chromebook2/{id}", name="afficher_chromebook")
     */
    public function afficherChromebook($id, ChromebookRepository $repository)
    {
        $chromebook = $repository->find($id);
        return $this->render('chromebook2/afficherChromebook.html.twig',[
            'chromebook' => $chromebook,
        ]
    
    );
    }
}
