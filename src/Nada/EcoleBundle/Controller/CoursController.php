<?php

namespace Nada\EcoleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoursController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    function AfficheCoursAction(){
        $em=$this->getDoctrine()->getManager();
        $cours=$em->getRepository("DataBundle:CoursCode")->findAll();

        return $this->render("NadaEcoleBundle:Cours:AfficheCours.html.twig",array("cours"=>$cours));

    }


    function AfficheCoursAdminAction(){
        $em=$this->getDoctrine()->getManager();
        $cours=$em->getRepository("DataBundle:CoursCode")->findAll();

        return $this->render("NadaEcoleBundle:Cours:AdminAfficheCours.html.twig",array("cours"=>$cours));

    }

    function AdminAction(){
        $em=$this->getDoctrine()->getManager();
        $cours=$em->getRepository("DataBundle:CoursCode")->findAll();

        return $this->render("NadaEcoleBundle:Cours:pagefergha.html.twig",array("cours"=>$cours));

    }
}




