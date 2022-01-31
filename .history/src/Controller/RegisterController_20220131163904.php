<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     */
    public function index(): Response
    {
        $user = new User(); //création de l'objet User
        $form = $this->createForm();//instancier le formulaire à l'aide de la méthode createForm()
        return $this->render('register/index.html.twig', [
            'controller_name' => 'RegisterController',
        ]);
    }

   

}
