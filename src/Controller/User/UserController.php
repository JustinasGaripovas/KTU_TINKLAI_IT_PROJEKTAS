<?php

namespace App\Controller\User;

use App\Form\UserType;
use App\Entity\User;
use App\Repository\ExaminationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/user/main", name="user_main")
     */
    public function register(Request $request, ExaminationRepository $examinationRepository)
    {
        return $this->redirectToRoute('doctor_visitation_main');
    }

    /**
     * @Route("/user/examinations", name="user_examinations")
     */
    public function userExaminations(ExaminationRepository $examinationRepository)
    {

        /** @var User $user */
        $user = $this->getUser();

        if (!$this->isGranted('ROLE_USER', $user)) {
            throw new NotFoundHttpException("You are not a user");
        }

        $userList = $examinationRepository->findAllVisitsForUser($user->getId());

        return $this->render(
            'doctor/user_list.html.twig',[
                'users' => $userList
            ]
        );
    }

}
