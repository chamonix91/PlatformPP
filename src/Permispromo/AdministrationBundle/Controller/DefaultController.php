<?php

namespace Permispromo\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PermispromoAdministrationBundle:Default:index.html.twig');
    }
}
