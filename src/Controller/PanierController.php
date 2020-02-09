<?php

namespace App\Controller;

use App\Repository\PortableRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
     * @Route("/panier")
     */
class PanierController extends AbstractController
{
    /**
     * @Route("/", name="panier_index")
     */
    public function index(SessionInterface $session, PortableRepository $portableRepository)
    {
        $panier = $session->get('panier', []);

$panierWithData = [];

foreach($panier as $id => $quantity) {
$panierWithData[] = [
'product' => $portableRepository->find($id),
'quantity' => $quantity
];
}

$total = 0;

//foreach($panierWithData as $item) {
//$totalItem = $item['product']->getPrix() * $item['quantity'];
//$total += $totalItem;
//}

return $this->render('panier/index.html.twig', [
'items' => $panierWithData,
'total' => $total
]);
    }
/**
     * @Route("/add/{id}", name="panier_ajout")
     */
    public function add($id, SessionInterface $session) {


        $panier = $session->get('panier', []);

        if(!empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }



        $session->set('panier', $panier);

        return $this->redirectToroute("panier_index");

    }

/**
     * @Route("/remove/{id}", name="panier_supprime")
     */
    public function remove($id, SessionInterface $session) {
        $panier = $session->get('panier', []);
        if(!empty($panier[$id])) {
            unset($panier[$id]);
        }
        $session->set('panier', $panier);

        return $this->redirectToRoute("panier_index");
    }


}

