<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AskController extends AbstractController
{
    #[Route('/ask', name: 'app_ask')]
    public function index(): Response
    {
        return $this->render('ask/index.html.twig', [
            'controller_name' => 'AskController',
        ]);
    }
}
