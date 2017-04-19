<?php

namespace Karudev\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KarudevServiceBundle:Default:index.html.twig');
    }
}
