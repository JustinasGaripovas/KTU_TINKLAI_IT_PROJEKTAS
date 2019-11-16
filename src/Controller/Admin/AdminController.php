<?php

namespace App\Controller\Admin;

use App\Entity\Employee;
use App\Entity\Scheduel;
use App\Form\ScheduleType;
use App\Form\UserType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


/**
 * Class AdminController
 * @package App\Controller\Admin
 * @Route("employee/admin/")
 * @isGranted("ROLE_ADMIN")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("main", name="admin_main")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        //TODO: Should be able to add new doctor with schedule
        //TODO: Should be able to see whole list of doctors
        //TODO: Optional add pagination to doctor list
        //TODO: Add schedule button on each doctor in the list

        $doctorList = $this->getDoctrine()->getManager()->getRepository(Employee::class)->findAllByRole('ROLE_DOCTOR');

        return $this->render(
            'admin/index.html.twig',[
                "doctors" => $doctorList
            ]
        );
    }

    /**
     * @Route("doctors/{id}/schedule", name="admin_edit_schedule")
     */
    public function editSchedule(Employee $employee, Request $request)
    {
        if (!$this->isGranted('ROLE_DOCTOR', $employee)) {
            throw new NotFoundHttpException("Person is not a doctor");
        }

        //TODO: Add list of existing schedule

        $schedule = new Scheduel();
        $form = $this->createForm(ScheduleType::class, $schedule);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($schedule);
            $entityManager->flush();
            return $this->redirectToRoute('admin_main');
        }

        return $this->render(
            'registration/register.html.twig',
            array('form' => $form->createView())
        );
    }
}
