<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\RouterInterface;


final class LandingPageController extends AbstractController
{


    public function __construct(RouterInterface $router,
                                string $defaultLocale = 'de',
                                array $locales = ['de', 'en'])
    {
        $this->router = $router;
        $this->defaultLocale = $defaultLocale;
        $this->locales = $locales;
    }


    public function onKernelRequest(RequestEvent $event): void
    {
        $request = $event->getRequest();
        if ($request->getPathInfo() !== '/' || $request->attributes->has('_locale')) {
            return;
        }
        $preferredLocale = $request->getPreferredLanguage($this->locales) ?? $this->defaultLocale;
        $response = new RedirectResponse($this->router->generate('app_home', ['_locale' => $preferredLocale,]));
        $event->setResponse($response);
    }


    #[Route('/', name: 'app_landing_page')]
    public function index(): Response
    {


        return $this->render('landing_page/index.html.twig', [
            'controller_name' => 'LandingPageController',
        ]);
    }
}
