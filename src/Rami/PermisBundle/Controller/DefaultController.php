<?php

namespace Rami\PermisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RamiPermisBundle:Default:index.html.twig');
    }
}
