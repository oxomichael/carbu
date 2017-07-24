<?php

namespace CarbuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class VehicleController extends Controller
{
    /**
     * @Route("/vehicle")
     * @Method({"GET"})
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('CarbuBundle:Vehicle:index.html.twig', array());
    }

    /**
     * @Route("/vehicle/view/{id}")
     * @Method({"GET"})
     */
    public function viewAction($id)
    {
        return $this->render('CarbuBundle:Vehicle:view.html.twig', array());
    }

    /**
     * @Route("/vehicle/edit/{id}")
     * @Method({"GET", "POST"})
     */
    public function editAction($id)
    {
        return $this->render('CarbuBundle:Vehicle:edit.html.twig', array());
    }

    /**
     * @Route("/vehicle/del")
     */
    public function delAction()
    {
        return $this->render('CarbuBundle:Vehicle:del.html.twig', array());
    }
}
