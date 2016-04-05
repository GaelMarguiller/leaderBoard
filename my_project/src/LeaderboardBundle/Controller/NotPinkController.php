<?php
namespace LeaderboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NotPinkController extends Controller
{
    public function crimzonCloverAction($type)
    {
        $videoURL ="";
        if (empty($type)) {
            $videoURL = 'https://www.youtube.com/embed/dFgb1vrF-F8';
        } else {
            if ($type == "typeZ") {
                $videoURL = 'https://www.youtube.com/embed/dFgb1vrF-F8';
            }

            if ($type == "type1") {
                $videoURL = "https://www.youtube.com/embed/bmTHw9vL3Vs";
            }

            if ($type == "type3") {
                $videoURL = "https://www.youtube.com/embed/foDTJceKio8";
            }
        }


        return $this->render('LeaderboardBundle:Default:crimzon_clover.html.twig', array("type" => $videoURL));
    }

    public function ikarugaAction()
    {
        return $this->render('LeaderboardBundle:Default:ikaruga.html.twig');
    }
}