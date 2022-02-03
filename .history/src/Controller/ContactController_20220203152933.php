<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/nous-contacter", name="contact")
     */
    public function index(): Response
    {
        $form=$this->createForm(ContactType::class);
        $form->handleRequest($_REQUEST)
        return $this->render('contact/index.html.twig', [
            
        ]);
    }
}
