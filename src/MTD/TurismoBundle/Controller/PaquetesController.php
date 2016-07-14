<?php

namespace MTD\TurismoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PaquetesController extends Controller {
    public function mostrarFormularioAction(Request $request)
    {
        $session = $request->getSession();
        $usuario = $session->get('usuario');
        if($usuario){
            $tipo = $session->get('tipo');
            return $this->render('MTDTurismoBundle:Principal:formularioPaquete.html.twig', array('usuario' => $usuario, 'tipo'=>$tipo));
        }else{
            $this->addFlash(
                'notice',
                'Inicie Sesion'
            );
            return $this->render('MTDTurismoBundle:Principal:principal.html.twig');
        }
        
    }
}
