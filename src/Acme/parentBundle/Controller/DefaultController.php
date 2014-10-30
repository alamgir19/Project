<?php

namespace Acme\parentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeparentBundle:Default:index.html.twig', array('name' => $name));
    }
}
