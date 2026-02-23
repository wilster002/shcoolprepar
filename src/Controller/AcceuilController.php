<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilController extends AbstractController
{
    /**
     * @Route("/accueil", name="acceuill")
     */
    public function accueil(): Response
    {
        return $this->render('pageacceuill.html.twig');
    }
}
?>