<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class  enseignantController extends AbstractController {
    /**
     * @Route("/enseignant", name="enseignant")
     */
    public function enseignant():Response{
        return $this->render('enseignant.html.twig');
    }


} 
?>