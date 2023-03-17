<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(): Response
    {
        $info = [];
        $info['nom'] = "hadjaj";
        $info['prenom'] = "ratiba";
        $info['age'] = 36;
        return $this->render('home/index.html.twig', [
            'personne' => $info,
        ]);
    }
}
