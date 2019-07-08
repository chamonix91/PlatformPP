<?php

namespace Permispromo\clientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PermispromoclientBundle:Default:index.html.twig');
    }
}
