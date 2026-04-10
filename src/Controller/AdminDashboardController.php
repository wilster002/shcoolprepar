<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\FiliereRepository;
use App\Repository\EtablissementRepository;

class AdminDashboardController extends AbstractController
{
    /**
     * @Route("/admin", name="dashbordadmin")
     */

    public function index(FiliereRepository $filiereRepository,EtablissementRepository $etablissementRepository): Response
    {
        return $this->render('admin/dashboard.html.twig', [
            'filieres' => $filiereRepository->findAll(),
            'etablissements' => $etablissementRepository->findAll(),
        ]);
    }

}


