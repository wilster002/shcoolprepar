<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class   AdminFiliereController  extends AbstractController{
    /**
     * @Route("admin/filieres", name="admin_filieres")
     */
    public function index():Response{
        return  $this->render("admin/filieres/index.html.twig");
    }
}