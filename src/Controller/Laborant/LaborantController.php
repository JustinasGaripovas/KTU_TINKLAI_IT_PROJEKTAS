<?php

namespace App\Controller\Laborant;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Class LaborantController
 * @package App\Controller\Laborant
 * @Route("employee/laborant/")
 */
class LaborantController extends AbstractController
{
    /**
     * @Route("main", name="laborant_main")
     */
    public function main(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->getDoctrine()->getManager()->getRepository(User::class)->findAll();

        return $this->render(
            'laborant/index.html.twig'
        );
    }
}
