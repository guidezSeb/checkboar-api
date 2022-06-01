<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\UserRepository;

class RegisterController extends AbstractController
{
    private $repository;

        public function __construct(UserRepository $repository)
        {
            $this->repository = $repository;
        }
    
        public function __invoke(Request $request): Response
        {
            //check format donnée sinon renvoie erreur avec this->json create user
    

            //  verification des données et de leur format
       
            // handle the submit (will only happen on POST)
            $form->handleRequest($request);
            // création d'un objet user et attribution de ses parametres
            $user = new User();
            $username = $doctrine->getRepository(User::class)->find($username);
            $password = $doctrine->getRepository(User::class)->find($password);
            $email = $doctrine->getRepository(User::class)->find($email);


            if ($form->isSubmitted() && $form->isValid()) {
                if (!$username) {
                    $user->setUsername($request->request->get('username'));
                }
                if (!$password) {
                    $user->setPassword($request->request->get('password'));
                }
                if (!$email) {
                    $user->setEmail($request->request->get('email'));
                }
            }

            // envoi dans la bdd (voir entityManager)
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            
            // retourne l'utilisateur
            return new Response('New User:  '.$user->getId());

        }
    
}
