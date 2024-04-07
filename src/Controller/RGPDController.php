<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RGPDController extends AbstractController
{
    #[Route('/r/g/p/d', name: 'app_r_g_p_d')]
    public function index(): Response
    {
        return $this->render('rgpd/index.html.twig', [
            'controller_name' => 'RGPDController',
        ]);
    }
}
