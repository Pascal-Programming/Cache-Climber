<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CacheCreateController extends AbstractController
{
    #[Route('/cache/create', name: 'app_cache_create')]
    public function index(): Response
    {
        return $this->render('cache_create/index.html.twig', [
            'controller_name' => 'CacheCreateController',
        ]);
    }
}
