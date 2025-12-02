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
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

 #[Route('/CV', name: 'app_cv')]
    public function CV(): Response
    {
        return $this->render('accueil/CV.html.twig', [
            'controller_name' => 'CV',
        ]);
    }

 #[Route('/Login', name: 'app_Login')]
    public function Login(): Response
    {
        return $this->render('accueil/Login.html.twig', [
            'controller_name' => 'Login',
        ]);
    }

#[Route('/Loisir', name: 'app_Loisir')]
    public function Loisir(): Response
    {
        return $this->render('accueil/Loisir.html.twig', [
            'controller_name' => 'Loisir',
        ]);
    }

#[Route('/Mes_info', name: 'app_Mes_info')]
    public function Mes_info(): Response
    {
        return $this->render('accueil/Mes_info.html.twig', [
            'controller_name' => 'Mes_info',
        ]);
    }
    
}
