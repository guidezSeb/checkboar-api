<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\UserRepository;

class GetMyUserController extends AbstractController
{
    private $repository;

        public function __construct(UserRepository $repository)
        {
            $this->repository = $repository;
        }
    
        public function __invoke(Request $request)
        {
            if ($user = $this->getUser()) {
                return $this->repository->find($user);
            }
            return $this->json(['error' => 'Unauthorized.', 403]);
        }
    
}
