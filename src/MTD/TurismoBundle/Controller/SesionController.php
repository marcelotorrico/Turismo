<?php

namespace MTD\TurismoBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SesionController extends Controller {
    public function validarSesionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $ci = $this->get('request')->request->get('ci');
        $contrasena = $this->get('request')->request->get('contrasena');
        
        $usuario = $em->getRepository('MTDTurismoBundle:Usuario')->findOneBy(
                    array('ci' => $ci,'contrasena' => $contrasena));
        $session = $request->getSession();
        if($usuario){
            $this->addFlash(
                'notice',
                'Registro Satisfactorio'
            );
            $tipo = $usuario->getTipo()->getNombre();
            $session->set('usuario', $usuario);
            $session->set('tipo', $tipo);
            $id = $usuario->getId();
            return $this->redirect($this->generateUrl('mtd_inicio_administrativo'));
        }else{
            $session->invalidate();
            $this->addFlash(
                'notice',
                'Registro Incorrecto'
            );
            return $this->render('MTDTurismoBundle:Principal:principal.html.twig');
        }
    }
}
