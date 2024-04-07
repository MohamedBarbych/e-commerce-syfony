<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CGVController extends AbstractController
{
    #[Route('/c/g/v', name: 'app_c_g_v')]
    public function index(): Response
    {
        return $this->render('cgv/index.html.twig', [
            'controller_name' => 'CGVController',
        ]);
    }
}
