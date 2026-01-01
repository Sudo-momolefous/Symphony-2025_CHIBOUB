<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('accueil/index.html.twig');
    }
    #[Route('/{_locale<fr|en>}', name: 'homepage')]
    public function indgex(): Response
    {
    return $this->render('accueil/index.html.twig');
    }



    #[Route('/CV', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('accueil/cv.html.twig');
    }



    #[Route('/Login', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('accueil/login.html.twig');
    }



    #[Route('/Loisir', name: 'app_loisir')]
    public function loisir(): Response
    {
        return $this->render('accueil/loisir.html.twig');
    }



    #[Route('/Contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('accueil/contacte.html.twig');
    }


    
    #[Route('/E-Portfolio', name: 'app_e_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('accueil/e-portfolio.html.twig');
    }
}



