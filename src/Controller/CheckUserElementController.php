<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\UserRepository;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class CheckUserElementController extends AbstractController
{
    // private $repository;
    // private $entityManager;

    //     public function __construct(UserRepository $repository, EntityManagerInterface $entityManager)
    //     {
    //         $this->repository = $repository;
    //         $this->entityManager = $entityManager;
    //     }
    
    //     public function __invoke(Request $request)
    //     {
    //         //verif json avec array_key_exist
    //         $data = json_decode($request->getContent(), true);

    //         //verif .find()
            
    //         $userElement->findBy(array('id' => $data['id']));

    //         if (array_key_exists('elementId', $data) && array_key_exists('userid', $data) ) {
    //             $userElement = new UserElement();
                
    //             $userElement ->setUsername($data['username']);
    //             $userElement ->setEmail($data['email']);

    //             $this->entityManager->persist($userElement);
    //             $this->entityManager->flush();

    //             return $this->json(['userElement' => $userElement]);
    //         }
            
    //         return $this->json(['error' => 'Bad request'], 400);
    //     }
    
}
