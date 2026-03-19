<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class AdminFiliereController extends AbstractController
{
    /**
     * @Route("/filieres", name="admin_filieres")
     */
    public function index(): Response
    {
        return $this->render("admin/filieres/index.html.twig");
    }
}