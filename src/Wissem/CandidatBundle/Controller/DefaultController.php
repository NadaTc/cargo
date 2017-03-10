<?php

namespace Wissem\CandidatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WissemCandidatBundle:Default:index.html.twig');
    }
}
