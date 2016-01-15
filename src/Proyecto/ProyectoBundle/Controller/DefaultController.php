<?php

namespace Proyecto\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProyectoProyectoBundle:Default:index.html.twig', array('name' => $name));
    }
}
