<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminEtablissementController extends AbstractController
{    
    /**
     * @Route("/admin/etablissements", name="admin_etablissements")
     */
    public function index(): Response
    {
        return $this->render('admin/etablissement/index.html.twig');
    }
}