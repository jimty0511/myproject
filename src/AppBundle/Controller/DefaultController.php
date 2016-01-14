<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->redirectToRoute('hello', array('name' => 'Jim'));
        throw new \Exception('Something wrong!');
    }
    /**
     * @Route("/hello/{name}.{_format}", defaults={"_format"="html"}, name="hello")
     */
    public function helloAction($name, $_format){
        return $this->render('default/hello.'.$_format.'.twig', array(
            'name' => $name
        ));
    }
}
