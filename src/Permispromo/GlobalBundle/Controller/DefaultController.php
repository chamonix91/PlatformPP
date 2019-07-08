<?php

namespace Permispromo\GlobalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PermispromoGlobalBundle:Default:index.html.twig');
    }
}
