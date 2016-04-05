<?php

namespace LeaderboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LeaderboardBundle:Default:index.html.twig');
    }
}
