<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LoyaltyController extends AbstractController
{
    #[Route('/loyalty', name: 'app_loyalty')]
    public function index(): Response
    {
        return $this->render('loyalty/index.html.twig', [
            'controller_name' => 'LoyaltyController',
        ]);
    }
}
