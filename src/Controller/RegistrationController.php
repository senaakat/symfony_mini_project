<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'register')]
    public function index(UserPasswordHasherInterface $passwaordHasher) : Response
    {
        $user= new User();
        $plainPassword = "";

        $hashedPassword = $passwaordHasher->hashPassword($user, $plainPassword);
        $user->setPassword($hashedPassword);

        return new Response("User created!");
    }

}