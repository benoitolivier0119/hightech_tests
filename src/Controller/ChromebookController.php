<?php

namespace App\Controller;

use App\Entity\Chromebook;
use App\Form\ChromebookType;
use App\Repository\ChromebookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/chromebook")
 */
class ChromebookController extends AbstractController
{
    /**
     * @Route("/", name="chromebook_index", methods={"GET"})
     */
    public function index(ChromebookRepository $chromebookRepository): Response
    {
        return $this->render('chromebook/index.html.twig', [
            'chromebooks' => $chromebookRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="chromebook_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $chromebook = new Chromebook();
        $form = $this->createForm(ChromebookType::class, $chromebook);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($chromebook);
            $entityManager->flush();

            return $this->redirectToRoute('chromebook_index');
        }

        return $this->render('chromebook/new.html.twig', [
            'chromebook' => $chromebook,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="chromebook_show", methods={"GET"})
     */
    public function show(Chromebook $chromebook): Response
    {
        return $this->render('chromebook/show.html.twig', [
            'chromebook' => $chromebook,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="chromebook_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Chromebook $chromebook): Response
    {
        $form = $this->createForm(ChromebookType::class, $chromebook);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('chromebook_index');
        }

        return $this->render('chromebook/edit.html.twig', [
            'chromebook' => $chromebook,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="chromebook_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Chromebook $chromebook): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chromebook->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($chromebook);
            $entityManager->flush();
        }

        return $this->redirectToRoute('chromebook_index');
    }
}
