<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/service", name="service")
     */
    public function service()
    {
        return $this->render('pages/service.html.twig');
    }
}
