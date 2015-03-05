<?php

namespace DenemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DenemeBundle:Default:index.html.twig', array('name' => $name));
    }
}
