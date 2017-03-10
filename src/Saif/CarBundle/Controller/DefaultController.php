<?php

namespace Saif\CarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SaifCarBundle:Default:index.html.twig');
    }
}
