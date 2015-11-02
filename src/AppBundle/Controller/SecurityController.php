<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    /**
     * @Route("/signin", name="app_signin")
     */
    public function PlayAction(Request $request)
    {
        return $this->render("@App/Security/signin.html.twig");
    }
}
