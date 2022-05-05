<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ListController extends AbstractController
{
    #[Route('/list', name: 'app_list') ]
    
        public function index(): Response
    {
        return $this->render('list/index.html.twig', [
        ]);
    }
}
