<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // mtd_turismo_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_turismo_homepage')), array (  '_controller' => 'MTD\\TurismoBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/inicio')) {
            // mtd_inicio
            if ($pathinfo === '/inicio') {
                return array (  '_controller' => 'MTD\\TurismoBundle\\Controller\\PrincipalController::mostrarPrincipalAction',  '_route' => 'mtd_inicio',);
            }

            // mtd_inicio_sesion
            if ($pathinfo === '/inicioSesion') {
                return array (  '_controller' => 'MTD\\TurismoBundle\\Controller\\SesionController::validarSesionAction',  '_route' => 'mtd_inicio_sesion',);
            }

            // mtd_inicio_administrativo
            if ($pathinfo === '/inicio/administrativo') {
                return array (  '_controller' => 'MTD\\TurismoBundle\\Controller\\PrincipalController::mostrarAdministrativoAction',  '_route' => 'mtd_inicio_administrativo',);
            }

        }

        // mtd_administrativo_paquetes
        if ($pathinfo === '/administrativo/paquetes') {
            return array (  '_controller' => 'MTD\\TurismoBundle\\Controller\\PaquetesController::mostrarFormularioAction',  '_route' => 'mtd_administrativo_paquetes',);
        }

        if (0 === strpos($pathinfo, '/paquetes')) {
            // mtd_registrar_paquetes
            if ($pathinfo === '/paquetes/crear') {
                return array (  '_controller' => 'MTD\\TurismoBundle\\Controller\\PaquetesController::crearPaqueteAction',  '_route' => 'mtd_registrar_paquetes',);
            }

            // mtd_paquetes_principal
            if (0 === strpos($pathinfo, '/paquetes/principal') && preg_match('#^/paquetes/principal/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_paquetes_principal')), array (  '_controller' => 'MTD\\TurismoBundle\\Controller\\PaquetesController::mostrarPaqueteAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
