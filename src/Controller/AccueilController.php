<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class AccueilController extends AbstractController
{
    #[Route('/{_locale}', name: 'app_accueil', defaults: ['_locale' => 'fr'], requirements: ['_locale' => 'fr|en'])]
    public function index(string $_locale = 'fr'): Response
    {
        return $this->render($_locale === 'en' ? 'accueil/index-en.html.twig' : 'accueil/index.html.twig');
    }

    #[Route('/{_locale}/CV', name: 'app_cv', defaults: ['_locale' => 'fr'], requirements: ['_locale' => 'fr|en'])]
    public function cv(string $_locale = 'fr'): Response
    {
        return $this->render($_locale === 'en' ? 'accueil/cv-en.html.twig' : 'accueil/cv.html.twig');
    }

    #[Route('/{_locale}/Login', name: 'app_login', defaults: ['_locale' => 'fr'], requirements: ['_locale' => 'fr|en'])]
    public function login(string $_locale = 'fr'): Response
    {
        return $this->render($_locale === 'en' ? 'accueil/login-en.html.twig' : 'accueil/login.html.twig');
    }

    #[Route('/{_locale}/Loisir', name: 'app_loisir', defaults: ['_locale' => 'fr'], requirements: ['_locale' => 'fr|en'])]
    public function loisir(string $_locale = 'fr'): Response
    {
        return $this->render($_locale === 'en' ? 'accueil/loisir-en.html.twig' : 'accueil/loisir.html.twig');
    }

    #[Route('/{_locale}/Contact', name: 'app_contact', defaults: ['_locale' => 'fr'], requirements: ['_locale' => 'fr|en'])]
    public function contact(string $_locale = 'fr'): Response
    {
        return $this->render($_locale === 'en' ? 'accueil/contacte-en.html.twig' : 'accueil/contacte.html.twig');
    }

    #[Route('/{_locale}/E-Portfolio', name: 'app_e_portfolio', defaults: ['_locale' => 'fr'], requirements: ['_locale' => 'fr|en'])]
    public function portfolio(string $_locale = 'fr'): Response
    {
        return $this->render($_locale === 'en' ? 'accueil/e-portfolio-en.html.twig' : 'accueil/e-portfolio.html.twig');
    }
}
