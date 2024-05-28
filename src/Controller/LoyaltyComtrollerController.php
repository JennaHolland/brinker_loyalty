<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseHeaderSame;
use Symfony\Component\Routing\Attribute\Route;

class LoyaltyComtrollerController extends AbstractController
{
    #[Route('/loyalty1', name: 'app_loyalty1')]

    public function index(): Response
    {
        return $this->render('index.html.twig');
    }
   
}
