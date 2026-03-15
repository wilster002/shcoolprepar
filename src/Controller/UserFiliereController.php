<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/user")
 */
class UserFiliereController extends AbstractController
{
    /**
     * @Route("/filieres", name="user_filieres")
     */
    public function index(): Response
    {
        return $this->render("front/filiere/index.html.twig");
    }
}