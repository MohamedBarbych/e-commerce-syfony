<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BuyController extends AbstractController
{
    #[Route('/buy', name: 'app_buy')]
    public function index(): Response
    {
        return $this->render('buy/index.html.twig', [
            'controller_name' => 'BuyController',
        ]);
    }
}
