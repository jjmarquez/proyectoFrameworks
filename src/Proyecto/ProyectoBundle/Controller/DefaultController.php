<?php

namespace Proyecto\ProyectoBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	/**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        return $this->render('ProyectoProyectoBundle:Default:index.html.twig');
    }
}
