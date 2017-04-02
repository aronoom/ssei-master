<?php

namespace Proc\IndicateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IndicateurBundle:Default:index.html.twig');
    }
}
