<?php

// src/Controller/ProgramController.php

namespace App\Controller;

use App\Repository\LivreRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FicheController extends AbstractController
{
    #[Route('/fiche', name: 'app_fiche')]
    public function index(): Response
    {
        
        return $this->render('fiche/index.html.twig', [
        ]);
    } 
}
