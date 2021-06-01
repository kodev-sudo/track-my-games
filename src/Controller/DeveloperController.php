<?php


namespace App\Controller;


use App\Repository\DeveloperRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeveloperController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    /**
     * @Route("/developers", name="app_developers")
     */
    public function allGamesList(DeveloperRepository $developerRepository) : Response
    {
        $developers = $developerRepository
            ->findAll();

        return $this->render('developers/index.html.twig', [
            'developers' => $developers
        ]);
    }
}