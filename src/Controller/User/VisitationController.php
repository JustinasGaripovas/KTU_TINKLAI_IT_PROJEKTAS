<?php

namespace App\Controller\User;

use App\Entity\Employee;
use App\Entity\Examination;
use App\Entity\ScheduelDay;
use App\Entity\ScheduelSlot;
use App\Entity\User;
use App\Form\ExaminationType;
use App\Repository\ExaminationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use function mysql_xdevapi\expression;

/**
 * Class VisitationController
 * @package App\Controller\User
 */
class VisitationController extends AbstractController
{
    private $security;

    public function __construct(Security $security)
    {
        // Avoid calling getUser() in the constructor: auth may not
        // be complete yet. Instead, store the entire Security object.
        $this->security = $security;
    }

    /**
     * @Route("user/visitation", name="visitation")
     */
    public function index()
    {
        return $this->render('visitation/index.html.twig', [
            'controller_name' => 'VisitationController',
        ]);
    }

    /**
     * @Route("employee/examination/edit/{id}", name="edit_examination")
     */
    public function editExamination(Request $request, Examination $examination, EntityManagerInterface $entityManager)
    {
        $form = $this->createForm(ExaminationType::class, $examination);

        $form->handleRequest($request);

        if ($form->isSubmitted())
        {
            $entityManager->flush();

            if ($this->isGranted('ROLE_LABORANT'))
                return $this->redirectToRoute('laborant_main');
            elseif ($this->isGranted('ROLE_USER'))
                return $this->redirectToRoute('user_main');
            else
                return $this->redirectToRoute('admin_main');
        }


        return $this->render('examination/form.html.twig', [
            'form' => $form->createView(),
        ]);


    }

    /**
     * @Route("user/examination/delete/{id}", name="delete_examination")
     */
    public function deleteExamination(Request $request, Examination $examination, EntityManagerInterface $entityManager)
    {
        $entityManager->remove($examination);
        $entityManager->flush();

        return $this->redirectToRoute('user_examinations');
    }


    /**
     * @Route("/examination/register/{id}", name="register_examination")
     */
    public function registerExamination(Employee $employee,Request $request, ExaminationRepository $examinationRepository)
    {
        if (!$this->isGranted('ROLE_DOCTOR', $employee)) {
            throw new NotFoundHttpException("Person is not a doctor");
        }

        /** @var User $user */
        $user = $this->security->getUser();

        /** @var Employee $doctor */
        $doctor = $employee;

        $allowedDays = [];
        $allowedHours = [];

        /** @var ScheduelDay $day */
        foreach ($doctor->getSchedule()->getScheduleDays() as $day) {
            $allowedDays[] = $day->getDay();

            /** @var ScheduelSlot $slot */
            foreach ($day->getSlots() as $slot)
            {
                $allowedHours[$day->getDay()][] = $slot->__toString();
            }
        }

        $formattedAllowedDays = [];


        foreach ( $allowedDays as $allowedDay)
        {
            if ($allowedDay == 7)
            {
                $formattedAllowedDays[] = 0;
                break;
            }else{
                $formattedAllowedDays[] = $allowedDay;
            }
        }


        $examination = new Examination();

        $form = $this->createForm(ExaminationType::class, $examination);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $hour = $request->request->get('hours');
            $date = $request->request->get('date');

            $examination->setDate(new \DateTime($date));
            $examination->setHours($hour);

            $examination->setEmployee($employee);
            $examination->setUser($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($examination);
            $em->flush();
            return $this->redirectToRoute('user_main');
        }

        return $this->render('examination/form.html.twig', [
            'form' => $form->createView(),
            'allowedDays' => $allowedDays,
            'allowedHours' => $allowedHours,
        ]);

    }
}
