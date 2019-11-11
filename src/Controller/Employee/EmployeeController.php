<?php

namespace App\Controller\Employee;

use App\Form\UserType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class EmployeeController extends AbstractController
{
    /**
     * @Route("/employee/main", name="employee_main")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        return $this->render(
            'employee/index.html.twig',
            array('controller_name'=>'emp nera')
        );
    }
}