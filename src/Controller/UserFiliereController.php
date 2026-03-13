<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class   UserFiliereController  extends AbstractController{
    /**
     * @Route("user/filieres", name="filieres")
     */
    public function index():Response{
        return  $this->render("front/filieres/index.html.twig");
    }
}