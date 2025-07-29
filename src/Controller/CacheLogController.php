<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CacheLogController extends AbstractController
{
    #[Route('/cache/log', name: 'app_cache_log')]
    public function index(): Response
    {
        return $this->render('cache_log/index.html.twig', [
            'controller_name' => 'CacheLogController',
        ]);
    }
}
