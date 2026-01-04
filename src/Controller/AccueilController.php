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
        return $this->render($_locale === 'en' ? 'accueil/en/index.html.twig' : 'accueil/fr/index.html.twig');
    }

    #[Route('/{_locale}/CV', name: 'app_cv', defaults: ['_locale' => 'fr'], requirements: ['_locale' => 'fr|en'])]
    public function cv(string $_locale = 'fr'): Response
    {
        return $this->render($_locale === 'en' ? 'accueil/en/cv.html.twig' : 'accueil/fr/cv.html.twig');
    }

    #[Route('/{_locale}/Login', name: 'app_login', defaults: ['_locale' => 'fr'], requirements: ['_locale' => 'fr|en'])]
    public function login(string $_locale = 'fr'): Response
    {
        return $this->render($_locale === 'en' ? 'accueil/en/login.html.twig' : 'accueil/fr/login.html.twig');
    }

    #[Route('/{_locale}/Loisir', name: 'app_loisir', defaults: ['_locale' => 'fr'], requirements: ['_locale' => 'fr|en'])]
    public function loisir(string $_locale = 'fr'): Response
    {
        return $this->render($_locale === 'en' ? 'accueil/en/loisir.html.twig' : 'accueil/fr/loisir.html.twig');
    }

    #[Route('/{_locale}/Contact', name: 'app_contact', defaults: ['_locale' => 'fr'], requirements: ['_locale' => 'fr|en'])]
    public function contact(string $_locale = 'fr'): Response
    {
        return $this->render($_locale === 'en' ? 'accueil/en/contacte.html.twig' : 'accueil/fr/contacte.html.twig');
    }

    #[Route('/{_locale}/E-Portfolio', name: 'app_e_portfolio', defaults: ['_locale' => 'fr'], requirements: ['_locale' => 'fr|en'])]
    public function portfolio(string $_locale = 'fr'): Response
    {
        return $this->render($_locale === 'en' ? 'accueil/en/e-portfolio.html.twig' : 'accueil/fr/e-portfolio.html.twig');
    }
}
