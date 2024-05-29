<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;

class ContactController extends AbstractController
{
    private $em;

    public function _contruct(EntityManagerInterface $em){
        $this->em = $em;
    }

    #[Route('/create-contact', name: 'app_create-contact')]
    public function index(): Response
    {
        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    #[Route('/create-post', name: 'create-post')]
    public function createPost(Request $request)
    {
          $post = new Contact();
          //$form ->$this->createForm(PostType;;class, $post);
          $form = $this->createForm(ContactType::class, $post);
          $form->$this->handleRequest($request);
          if($form ->isSubmitted() && $form->isValid()){
           $this->em->persist($post);
           $this->em->flush();
          
             return $this->redirectToRoute('app-loyalty');
          }

          return $this->render('contact/contact.html.twig' ,[
            'form' => $form->createView()
          ]);
    }
}