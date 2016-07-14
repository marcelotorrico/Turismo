<?php

namespace MTD\TurismoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MTDTurismoBundle:Principal:principal.html.twig', array('name' => $name));
    }
}
