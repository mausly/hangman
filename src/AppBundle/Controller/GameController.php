<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GameController extends Controller
{
    /**
     * @Route("/game/failed", name="app_failed")
     */
    public function FailedAction(Request $request)
    {
        return $this->render("@App/Game/failed.html.twig", array("foundWord" => "xilophon"));
    }

    /**
     * @Route("/game", name="app_game")
     */
    public function GameAction(Request $request)
    {
        return $this->render("@App/Game/game.html.twig", array("remainingAttempNumber" => 11));
    }

    /**
     * @Route("/game/win", name="app_won")
     */
    public function WonAction(Request $request)
    {
        return $this->render("@App/Game/won.html.twig", array("foundWord" => "Software"));
    }
}