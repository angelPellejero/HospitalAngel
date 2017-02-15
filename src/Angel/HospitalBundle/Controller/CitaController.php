<?php

namespace Angel\HospitalBundle\Controller;

use Angel\HospitalBundle\Entity\Cita;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Citum controller.
 *
 */
class CitaController extends Controller {

    /**
     * Lists all citum entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $citas = $em->getRepository('AngelHospitalBundle:Cita')->findAll();

        return $this->render('cita/index.html.twig', array(
                    'citas' => $citas,
        ));
    }

    /**
     * Creates a new citum entity.
     *
     */
    public function newAction(Request $request) {
        $citum = new Cita();
        $form = $this->createForm('Angel\HospitalBundle\Form\CitaType', $citum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em2 = $this->getDoctrine()->getManager();

            //coger el nombre del medico del formulario
            $nombreMedico = $form->get("idmedico")->getData();
            //coger la fila de la BD desde un medico en concreto -> devuelve un objeto medico
            $medico = $this->getDoctrine()->getManager()->getRepository('AngelHospitalBundle:Medico')->findByNombre((string) $nombreMedico);
            //sacar el id de ese medico
            $idmedico = $medico[0]->getIdmedico();
            // coger todas las citas de un medico por su id del medico
            $citas = $em2->getRepository('AngelHospitalBundle:Cita')->findByidmedico($idmedico);

            $fecha = $form->get("fcita")->getData();
            $fecha1 = strtotime($fecha->format('Y-m-d H:i') . "+15 minutes");
            $fecha2 = strtotime($fecha->format('Y-m-d H:i') . "-15 minutes");

            foreach ($citas as $cita) {
                
            }
//                $em = $this->getDoctrine()->getManager();
//                $em->persist($citum);
            //$em->flush($citum);
            //return $this->redirectToRoute('cita_show', array('id' => $citum->getIdcita()));
        }
        return $this->render('cita/new.html.twig', array(
                    'citum' => $citum,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a citum entity.
     *
     */
    public function showAction(Cita $citum) {
        $deleteForm = $this->createDeleteForm($citum);

        return $this->render('cita/show.html.twig', array(
                    'citum' => $citum,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing citum entity.
     *
     */
    public function editAction(Request $request, Cita $citum) {
        $deleteForm = $this->createDeleteForm($citum);
        $editForm = $this->createForm('Angel\HospitalBundle\Form\CitaType', $citum);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cita_edit', array('id' => $citum->getIdcita()));
        }

        return $this->render('cita/edit.html.twig', array(
                    'citum' => $citum,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a citum entity.
     *
     */
    public function deleteAction(Request $request, Cita $citum) {
        $form = $this->createDeleteForm($citum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($citum);
            $em->flush($citum);
        }

        return $this->redirectToRoute('cita_index');
    }

    /**
     * Creates a form to delete a citum entity.
     *
     * @param Cita $citum The citum entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cita $citum) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('cita_delete', array('id' => $citum->getIdcita())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
