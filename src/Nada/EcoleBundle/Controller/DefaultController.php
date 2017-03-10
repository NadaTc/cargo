<?php

namespace Nada\EcoleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NadaEcoleBundle:Default:index.html.twig');
    }
}
