<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReportsController extends AbstractController
{
    #[Route('/', name: 'reports')]
    public function index(): Response
    {
        return $this->render('reports/index.html.twig', [
            'controller_name' => 'ReportsController',
        ]);
    }
}
