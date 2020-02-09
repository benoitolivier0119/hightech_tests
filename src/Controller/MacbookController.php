<?php

namespace App\Controller;

use App\Entity\Macbook;
use App\Form\MacbookType;
use App\Repository\MacbookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/macbook")
 */
class MacbookController extends AbstractController
{
    /**
     * @Route("/", name="macbook_index", methods={"GET"})
     */
    public function index(MacbookRepository $macbookRepository): Response
    {
        return $this->render('macbook/index.html.twig', [
            'macbooks' => $macbookRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="macbook_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $macbook = new Macbook();
        $form = $this->createForm(MacbookType::class, $macbook);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($macbook);
            $entityManager->flush();

            return $this->redirectToRoute('macbook_index');
        }

        return $this->render('macbook/new.html.twig', [
            'macbook' => $macbook,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="macbook_show", methods={"GET"})
     */
    public function show(Macbook $macbook): Response
    {
        return $this->render('macbook/show.html.twig', [
            'macbook' => $macbook,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="macbook_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Macbook $macbook): Response
    {
        $form = $this->createForm(MacbookType::class, $macbook);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('macbook_index');
        }

        return $this->render('macbook/edit.html.twig', [
            'macbook' => $macbook,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="macbook_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Macbook $macbook): Response
    {
        if ($this->isCsrfTokenValid('delete'.$macbook->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($macbook);
            $entityManager->flush();
        }

        return $this->redirectToRoute('macbook_index');
    }
}
