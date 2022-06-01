<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\UserRepository;
use App\Entity\User;

class RegisterController extends AbstractController
{
    private $repository;

        public function __construct(UserRepository $repository)
        {
            $this->repository = $repository;
        }
    
        public function __invoke(Request $request)
        {
            //check format donnée sinon renvoie erreur avec this->json create user
    

            //  verification des données et de leur format
       
      
            // création d'un objet user et attribution de ses parametres
            $user = new User();


            if ($username = $request->request->get('username') && $password = $request->request->get('password') && $email = $request->request->get('email') ) {
                $user->setUsername($username);
                $password->setPassword($password);
                $email->setEmail($email);


            }

            // envoi dans la bdd (voir entityManager)
            $entityManager =$doctrine->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            
            // retourne l'utilisateur dans un json
            return $this->json(['user' => $user]);
        }
    
}
