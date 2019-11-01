<?php

namespace App\Controller\User;

use App\Form\UserType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/user/main", name="user_main")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        return $this->render(
            'main/index.html.twig',
            array('controller_name'=>'nera')
        );
    }
}
