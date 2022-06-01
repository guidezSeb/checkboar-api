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

        public function __construct(UserRepository $repository, EntityManagerInterface $entityManager,UserPasswordHasherInterface $passwordHasher)
        {
            $this->repository = $repository;
            $this->entityManager = $entityManager;
        }
    
        public function __invoke(Request $request)
        {
            $data = json_decode($request->getContent(), true);


            if (array_key_exists('username', $data) && array_key_exists('password', $data) && array_key_exists('email', $data)) {
                $user = new User();
                $plaintextPassword = $data['password'];
                $hashedPassword = $passwordHasher->hashPassword(
                    $user,
                    $plaintextPassword
                );
                $user->setPassword($hashedPassword);
                $user->setUsername($data['username']);
                $user->setEmail($data['email']);

                $this->entityManager->persist($user);
                $this->entityManager->flush();

                return $this->json(['user' => $user]);
            }
            
            return $this->json(['error' => 'Bad request'], 400);
        }
    
}
