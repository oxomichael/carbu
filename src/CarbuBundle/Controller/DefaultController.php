<?php

namespace CarbuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/carbu")
     */
    public function indexAction()
    {
        return $this->render('CarbuBundle:Default:index.html.twig');
    }
}