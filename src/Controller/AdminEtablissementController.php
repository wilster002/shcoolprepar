<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class AdminEtablissementController extends AbstractController
{    
    /**
     * @Route("/etablissements", name="admin_etablissements")
     */
    public function index(): Response
    {
        return $this->render('admin/etablissement/index.html.twig');
    }
}