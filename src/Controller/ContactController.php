<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{
    #[Route('/create-contact', name: 'app_create-contact')]
    public function index(): Response
    {
        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    #[Route('/create-contact', name: 'create-contact')]
    public function createContact()
    {
          $post = new Contact();
          $form = $this->createForm(ContactType::class, $post);

          return $this->render('contact/contact.html.twig' ,[
            'form' => $form->createView()
          ]);
    }
}