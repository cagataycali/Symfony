<?php

namespace CagatayBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CagatayBundle:Default:index.html.twig', array('name' => 'bugra'));
    }
}
