<?php

namespace App\Controller;

use App\Entity\Portable;
use App\Form\PortableType;
use App\Repository\PortableRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/portable")
 */
class PortableController extends AbstractController
{
    /**
     * @Route("/", name="portable_index", methods={"GET"})
     */
    public function index(PortableRepository $portableRepository): Response
    {
        return $this->render('portable/index.html.twig', [
            'portables' => $portableRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="portable_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $portable = new Portable();
        $form = $this->createForm(PortableType::class, $portable);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($portable);
            $entityManager->flush();

            return $this->redirectToRoute('portable_index');
        }

        return $this->render('portable/new.html.twig', [
            'portable' => $portable,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="portable_show", methods={"GET"})
     */
    public function show(Portable $portable): Response
    {
        return $this->render('portable/show.html.twig', [
            'portable' => $portable,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="portable_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Portable $portable): Response
    {
        $form = $this->createForm(PortableType::class, $portable);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('portable_index');
        }

        return $this->render('portable/edit.html.twig', [
            'portable' => $portable,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="portable_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Portable $portable): Response
    {
        if ($this->isCsrfTokenValid('delete'.$portable->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($portable);
            $entityManager->flush();
        }

        return $this->redirectToRoute('portable_index');
    }
}
