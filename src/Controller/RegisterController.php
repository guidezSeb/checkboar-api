<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\UserRepository;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class RegisterController extends AbstractController
{
    private $repository;
    private $entityManager;

        public function __construct(UserRepository $repository, EntityManagerInterface $entityManager)
        {
            $this->repository = $repository;
            $this->entityManager = $entityManager;
        }
    
        public function __invoke(Request $request)
        {
            //check format donnée sinon renvoie erreur avec this->json create user
    

            //  verification des données et de leur format
       
      
            // création d'un objet user et attribution de ses parametres


            if (($username = $request->request->get('username')) && ($password = $request->request->get('password')) && ($email = $request->request->get('email'))) {
                $user = new User();
                
                $user->setUsername($username);
                $password->setPassword($password);
                $email->setEmail($email);

                $this->entityManager->persist($user);
                $this->entityManager->flush();
            }

            
            // retourne l'utilisateur dans un json
            return $this->json(['user' => $user]);
        }
    
}
