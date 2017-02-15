<?php

namespace Angel\HospitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('AngelHospitalBundle:Default:index.html.twig');
    }

    public function mostrarAction() {
        $em = $this->getDoctrine()->getManager();

        $medicos = $em->getRepository('AngelHospitalBundle:Medico')->findAll();

        return $this->render('AngelHospitalBundle:Default:mostrar.html.twig', array(
                    'medicos' => $medicos,
        ));
    }

    public function mostarCitasAction(Request $rq) {
        $idmedico = $rq->get("Lmedicos");
        $em = $this->getDoctrine()->getManager()->getRepository('AngelHospitalBundle:Cita')->findByIdmedico($idmedico);
        return $this->render('AngelHospitalBundle:Default:mostrarCitas.html.twig', array(
                    'citas' => $em,
        ));
    }

}
