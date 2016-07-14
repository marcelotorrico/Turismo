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

                $imagen = $paquete->getImagen();
                $nombreArchivo = md5(uniqid()).'.'.$imagen->guessExtension();
                $documentoDir = $this->container->getParameter('kernel.root_dir').'/../web/documentosEmpleado';
                $imagen->move($documentoDir, $nombreArchivo);
                $paquete->setRuta($nombreArchivo);
                $paquete->setUsuario($usuario);
                $em->persist($paquete);
                $usuario->addPaquete($paquete);
                $em->persist($usuario);
                $em->flush();
                return $this->render('MTDTurismoBundle:Principal:formularioPaquete.html.twig', array('usuario' => $usuario, 'tipo'=>$tipo));
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
    /*public function mostrarFormularioAction(Request $request)
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
        
    }*/
    
    public function crearPaqueteAction(Request $request)
    {
        $session = $request->getSession();
        $usuario = $session->get('usuario');
        $em = $this->getDoctrine()->getManager();
        if($usuario){
            $id = $usuario->getId();
            $usuario = $em->getRepository('MTDTurismoBundle:Usuario')->find($id);
            $tipo = $id = $usuario->getTipo();
            $em = $this->getDoctrine()->getManager();
            $paquete = new Paquete();
            
            $imagen = $this->get('request')->request->get('files')->getData();
            $nombre = $this->get('request')->request->get('nombre');
            $lugar = $this->get('request')->request->get('lugar');
            $precio = $this->get('request')->request->get('precio');
            $descripcion = $this->get('request')->request->get('descripcion');
            
            $nombreArchivo = md5(uniqid()).'.'.$imagen->guessExtension();
            $documentoDir = $this->container->getParameter('kernel.root_dir').'/../web/imagenes';
            $imagen->move($documentoDir, $nombreArchivo);

            
            $paquete->setImagen($nombreArchivo);
            $paquete->setNombre($nombre);
            $paquete->setLugar($lugar);
            $paquete->setPrecio($precio);
            $paquete->setDescripcion($descripcion);
            $paquete->setUsuario($usuario);
            $em->persist($paquete);
            
            $em->persist($usuario);
            
            $usuario->addPaquete($paquete);
            
            $em->flush();
            $this->addFlash(
                'notice',
                'El paquete fue agregado correctamente'
            );
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
