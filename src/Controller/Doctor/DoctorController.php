<?php

namespace App\Controller\Doctor;

use App\Entity\Employee;
use App\Managers\EmployeeManager;
use App\Repository\ExaminationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Class DoctorController
 * @package App\Controller\Doctor
 */
class DoctorController extends AbstractController
{
    /**
     * @Route("employee/doctor/main", name="doctor_main")
     */
    public function index(EmployeeManager $employeeManager)
    {
        $doctorList = $employeeManager->findByRole($employeeManager::ROLE_DOCTOR);

        return $this->render(
            'doctor/index.html.twig',[
                'doctors' => $doctorList
            ]
        );
    }


    /**
     * @Route("user/doctor/main", name="doctor_visitation_main")
     */
    public function visitationIndex(EmployeeManager $employeeManager)
    {
        $doctorList = $employeeManager->findByRole($employeeManager::ROLE_DOCTOR);

        return $this->render(
            'doctor/index.html.twig',[
                'doctors' => $doctorList
            ]
        );
    }


    /**
     * @Route("employee/doctor/pacient/main", name="doctor_pacient_main")
     */
    public function pacientIndex(EmployeeManager $employeeManager, ExaminationRepository $examinationRepository)
    {

        /** @var Employee $user */
        $user = $this->getUser();

        if (!$this->isGranted('ROLE_DOCTOR', $user)) {
            throw new NotFoundHttpException("You are not a doctor");
        }

        $userList = $examinationRepository->findAllVisitsForDoctor($user->getId());

        return $this->render(
            'doctor/user_list.html.twig',[
                'users' => $userList
            ]
        );
    }


}
