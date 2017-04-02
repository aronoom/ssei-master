<?php

namespace ZoneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //$em = $this->getDoctrine()->getEntityManager();
        //$regions = $em->getRepository('ZoneBundle:Region')->findAll();
        return $this->render('ZoneBundle:Default:index.html.twig');
    }
}
