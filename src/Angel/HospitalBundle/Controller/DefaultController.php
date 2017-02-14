<?php

namespace Angel\HospitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AngelHospitalBundle:Default:index.html.twig');
    }
}
