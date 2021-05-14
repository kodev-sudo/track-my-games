<?php

namespace App\Controller;

use App\Repository\GameRepository;
use App\Entity\Game;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    /**
     * @Route("/games", name="app_games")
     */
    public function allGamesList(GameRepository $gameRepository) : Response
    {
        $games = $gameRepository
            ->findAll();

        return $this->render('games/index.html.twig', [
            'games' => $games
        ]);
    }
}