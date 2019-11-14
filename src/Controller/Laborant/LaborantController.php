<?php

namespace App\Controller\Laborant;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class LaborantController extends AbstractController
{
    /**
     * @Route("/laborant/main", name="laborant_main")
     */
    public function main(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {

        //$this->getDoctrine()->getRepository(User::class)->findOneBy([''=>''])

        return $this->render(
            'laborant/index.html.twig',
            array('controller_name'=>'emp nera')
        );
    }
}
