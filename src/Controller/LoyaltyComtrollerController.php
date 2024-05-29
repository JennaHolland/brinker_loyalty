<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseHeaderSame;
use Symfony\Component\Routing\Attribute\Route;

class LoyaltyComtrollerController extends AbstractController
{
    #[Route('/loyalty', name: 'app_loyalty')]

    public function index(): Response
    {
        return $this->render('index.html.twig');
    }
   
}
