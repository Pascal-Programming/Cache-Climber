<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OverUsController extends AbstractController
{
    #[Route('/over/us', name: 'app_over_us')]
    public function index(): Response
    {
        return $this->render('over_us/index.html.twig', [
            'controller_name' => 'OverUsController',
        ]);
    }
}
