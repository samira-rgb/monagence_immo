<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{
    #[Route('/properties', name: 'app_property')]
    public function index(): Response
    {
        return $this->render('property/index.html.twig', [
            'current_menu' => 'properties',

        ]);
    }
}
