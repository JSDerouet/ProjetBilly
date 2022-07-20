<?php

// src/Controller/ProgramController.php

namespace App\Controller;

use App\Repository\LivreRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(LivreRepository $livreRepository): Response
    {
        $livres = $livreRepository->findAll();
        return $this->render('base.html.twig', [
            'livres'=>$livres
        ]);
    } 
}
