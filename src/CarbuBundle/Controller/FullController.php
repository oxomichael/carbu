<?php

namespace CarbuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FullController extends Controller
{
    /**
     * @Route("/full")
     */
    public function indexAction()
    {

    }

    /**
     * @Route("/full/view")
     */
    public function viewAction(){}

    /**
     * @Route("/full/add")
     */
    public function addAction(){}

    /**
     * @Route("/full/edit")
     */
    public function editAction(){}

    /**
     * @Route("/full/del")
     */
    public function delAction(){}
}
