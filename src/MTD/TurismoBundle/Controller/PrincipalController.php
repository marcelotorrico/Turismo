<?php
namespace MTD\TurismoBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class PrincipalController extends Controller {
    public function mostrarPrincipalAction()
    {
        return $this->render('MTDTurismoBundle:Principal:principal.html.twig');
    }
    
    public function mostrarAdministrativoAction(Request $request)
    {
        //$em = $this->getDoctrine()->getManager();
        $session = $request->getSession();
        $usuario = $session->get('usuario');
        if($usuario){
            $tipo = $session->get('tipo');
            return $this->render('MTDTurismoBundle:Principal:inicioAdministrador.html.twig', array('usuario' => $usuario, 'tipo'=>$tipo));
        }else{
            $this->addFlash(
                'notice',
                'Inicie Sesion'
            );
            return $this->render('MTDTurismoBundle:Principal:principal.html.twig');
        }
        
    }
}
