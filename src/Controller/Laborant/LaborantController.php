<?php

namespace App\Controller\Laborant;

use App\Entity\Employee;
use App\Entity\User;
use App\Repository\ExaminationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
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
    public function main(Request $request, ExaminationRepository $examinationRepository)
    {
        $this->getDoctrine()->getManager()->getRepository(User::class)->findAll();


        /** @var Employee $user */
        $user = $this->getUser();

        if (!$this->isGranted('ROLE_LABORANT', $user)) {
            throw new NotFoundHttpException("You are not a doctor");
        }

        $userList = $examinationRepository->findAll();

        return $this->render(
            'laborant/index.html.twig', [
                "users" => $userList
            ]
        );
    }
}
