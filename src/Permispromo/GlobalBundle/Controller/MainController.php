<?php

namespace Permispromo\GlobalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('@PermispromoGlobal/Template/Dashboard.html.twig');
    }
}
