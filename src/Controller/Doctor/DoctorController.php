<?php

namespace App\Controller\Doctor;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class DoctorController extends AbstractController
{
    /**
     * @Route("/doctor/main", name="doctor_main")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        return $this->render(
            'admin/index.html.twig',
            array('controller_name'=>'emp nera')
        );
    }
}
