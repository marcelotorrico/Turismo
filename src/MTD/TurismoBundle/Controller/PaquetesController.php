<?php

namespace MTD\TurismoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MTD\TurismoBundle\Entity\Paquete;
use MTD\TurismoBundle\Form\PaqueteType;

class PaquetesController extends Controller {
    
    public function mostrarFormularioAction(Request $request)
    {
        $session = $request->getSession();
        $usuario = $session->get('usuario');
        if($usuario){
            $tipo = $session->get('tipo');
            $em = $this->getDoctrine()->getManager();
            $id = $usuario->getId();
            $usuario = $em->getRepository('MTDTurismoBundle:Usuario')->find($id);

            $paquete = new Paquete();
            $form = $this->createForm(new PaqueteType(), $paquete);
            $form->handleRequest($request);

            if($form->isValid()){

                $this->addFlash(
                    'notice',
                    'El paquete fue agregado correctamente'
                );
                //f*
                $imagen = $paquete->getImagen();
                $nombreArchivo = md5(uniqid()).'.'.$imagen->guessExtension();
                $documentoDir = $this->container->getParameter('kernel.root_dir').'/../web/documentosEmpleado';
                $imagen->move($documentoDir, $nombreArchivo);
                $paquete->setImagen($nombreArchivo);
                $paquete->setUsuario($usuario);
                $em->persist($paquete);
                $usuario->addPaquete($paquete);
                $em->persist($usuario);
                $em->flush();
                $idPaquete = $paquete->getId();
                return $this->redirect($this->generateUrl('mtd_paquetes_principal', array('id'=> $idPaquete)));
            }
            return $this->render('MTDTurismoBundle:Principal:formularioPaquete.html.twig', array("form"=>$form->createView(), 'usuario' => $usuario, 'tipo'=>$tipo));
        }else{
            $this->addFlash(
                'notice',
                'Inicie Sesion'
            );
            return $this->render('MTDTurismoBundle:Principal:principal.html.twig');
        }
        
    }
    
    public function mostrarPaqueteAction(Request $request, $id)
    {
        $session = $request->getSession();
        $usuario = $session->get('usuario');
        if($usuario){
            $em = $this->getDoctrine()->getManager();
            $paquete = $em->getRepository('MTDTurismoBundle:Paquete')->find($id);
            $tipo = $session->get('tipo');
            return $this->render('MTDTurismoBundle:Principal:paqueteTuristico.html.twig', array('paquete'=> $paquete, 'usuario' => $usuario, 'tipo'=>$tipo));
        }

    }
}
