<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EtablissementRepository;
/**
 * @Route("/user")
 */
class UserEtablissementController extends AbstractController
{    
    /**
     * @Route("/etablissements", name="user_etablissements")
     */

    public function index(EtablissementRepository $etablissementRepository): Response
    {
        return $this->render('front/etablissement/index.html.twig', [
            'etablissements' => $etablissementRepository->findAll(),
        ]);
    }
}