<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MySpaceController extends AbstractController
{
    #[Route('/mySpace', name: 'app_my_space')]
    public function index(): Response
    {
        return $this->render('my_space/index.html.twig', [
            'controller_name' => 'MySpaceController',
        ]);
    }
}
