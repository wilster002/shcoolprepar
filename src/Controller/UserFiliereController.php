<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\FiliereRepository;

/**
 * @Route("/user")
 */
class UserFiliereController extends AbstractController
{
    /**
     * @Route("/filieres", name="user_filieres")
     */
    public function index(FiliereRepository $filiereRepository): Response
    {
        return $this->render('front/filieres/index.html.twig', [
            'filieres' => $filiereRepository->findAll(),
        ]);
    }
}