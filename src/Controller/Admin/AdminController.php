<?php

namespace App\Controller\Admin;

use App\Entity\Employee;
use App\Entity\Scheduel;
use App\Entity\ScheduelDay;
use App\Form\ScheduleDayType;
use App\Form\ScheduleType;
use App\Form\UserType;
use App\Entity\User;
use App\Managers\EmployeeManager;
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
    private $employeeManager;

    public function __construct(EmployeeManager $employeeManager)
    {
        $this->employeeManager = $employeeManager;
    }

    /**
     * @Route("main", name="admin_main")
     */
    public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $adminList = $this->employeeManager->findByRole($this->employeeManager::ROLE_ADMIN);

        return $this->render(
            'admin/index.html.twig',[
                "admins" => $adminList
            ]
        );
    }


    /**
     * @Route("doctors/{id}/schedule/create", name="admin_schedule_create")
     */
    public function scheduleCreate(Employee $employee, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        if ($employee->getSchedule() === null)
        {
            $schedule = new Scheduel();

            $employee->setSchedule($schedule);

            $entityManager->persist($schedule);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_edit_schedule_day',array('id'=>$employee->getId()));
    }

    /**
     * @Route("doctors/{id}/schedule", name="admin_schedule")
     */
    public function scheduleIndex(Employee $employee, Request $request)
    {
        if (!$this->isGranted('ROLE_DOCTOR', $employee)) {
            throw new NotFoundHttpException("Person is not a doctor");
        }

        $days = [
            1 => 'Monday',
            2 => 'Tuesday',
            3 => 'Thursday',
            4 => 'Wednesday',
            5 => 'Friday',
            6 => 'Saturday',
            7 => 'Sunday',
        ];

        return $this->render(
            'admin/shedule_index.html.twig', [
                'schedule' => $employee->getSchedule(),
                'employee' => $employee,
                'days' => $days
            ]
        );
    }

    /**
     * @Route("doctors/{id}/schedule/{day}/day", name="admin_delete_schedule_day")
     */
    public function deleteSchedule(Employee $employee, $day)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $scheduleDay = $entityManager->getRepository(ScheduelDay::class)->find($day);
        $employee->getSchedule()->removeScheduleDay($scheduleDay);

        $entityManager->remove($scheduleDay);
        $entityManager->flush();

        return $this->redirectToRoute('admin_schedule', ['id'=>$employee->getId()]);
    }

    /**
     * @Route("doctors/{id}/schedule/day", name="admin_edit_schedule_day")
     */
    public function editSchedule(Request $request,Employee $employee)
    {
        $scheduleDay = new ScheduelDay();
        $form = $this->createForm(ScheduleDayType::class, $scheduleDay);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if ($this->checkIfDayIsAlreadyInScheduel($employee->getSchedule(), $scheduleDay->getDay()))
            {
                throw new NotFoundHttpException("That day is use");
            }

            $entityManager = $this->getDoctrine()->getManager();
            $employee->getSchedule()->addScheduleDay($scheduleDay);
            $entityManager->flush();

            return $this->redirectToRoute('admin_schedule',['id'=>$employee->getId()]);
        }

        return $this->render(
            'registration/register.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @param Scheduel $schedule
     * @param int $day
     * @return bool
     */
    private function checkIfDayIsAlreadyInScheduel(Scheduel $schedule, int $day)
    {
        /** @var ScheduelDay $scheduleDay */
        foreach ($schedule->getScheduleDays() as $scheduleDay)
        {
            if ($scheduleDay->getDay() === $day)
                return true;
        }

        return false;
    }
}
