<?php

namespace App\Controller\User;

use App\Entity\Examination;
use App\Form\ExaminationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class VisitationController
 * @package App\Controller\User
 * @Route("user")
 */
class VisitationController extends AbstractController
{
    /**
     * @Route("/visitation", name="visitation")
     */
    public function index()
    {
        return $this->render('visitation/index.html.twig', [
            'controller_name' => 'VisitationController',
        ]);
    }

    /**
     * @Route("/examination/register", name="register_examination")
     */
    public function registerExamination(Request $request)
    {
        $examination = new Examination();

        $form = $this->createForm(ExaminationType::class, $examination);

        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($examination);
            $em->flush();
            return $this->redirectToRoute('user_main');
        }

        return $this->render('examination/form.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}
