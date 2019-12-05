<?php

namespace App\Controller\Employee;

use App\Form\UserType;
use App\Entity\User;
use phpDocumentor\Reflection\Types\This;
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
    public function main(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {

        if ($this->isGranted("ROLE_DOCTOR"))
            return $this->redirectToRoute('doctor_pacient_main');
        elseif ($this->isGranted('ROLE_LABORANT'))
            return $this->redirectToRoute('laborant_main');
        else
            return $this->redirectToRoute('admin_main');


        return $this->render(
            'employee/index.html.twig',
            array('controller_name'=>'emp nera')
        );
    }
}
