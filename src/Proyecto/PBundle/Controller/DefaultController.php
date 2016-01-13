<?php

namespace Proyecto\PBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProyectoPBundle:Default:index.html.twig', array('name' => $name));
    }
}
