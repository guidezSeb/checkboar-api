<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\UserRepository;

class Register extends AbstractController
{
    private $repository;

        public function __construct(UserRepository $repository)
        {
            $this->repository = $repository;
        }
    
        public function __invoke(Request $request)
        {
            $user = $this->getUser();
            $password = $this->getPassword();
            $email = $this->getEmail();
            
           return [$user,$password,$email];
        }
    
}
