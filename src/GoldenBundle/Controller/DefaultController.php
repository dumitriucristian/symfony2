<?php

namespace GoldenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
    	/**
		*@Route("/hello/{name}")
		* @Template()
		*/
    	return $this->render('GoldenBundle:Default:index.html.twig',array('name' => $name)) ;
     }  
}
