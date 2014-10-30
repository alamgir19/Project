<?php

namespace Acme\parentpageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeparentpageBundle:Default:index.html.twig', array('name' => $name));
    }
}
