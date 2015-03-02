<?php
/*https://coderwall.com/p/cx1ztw/bootstrap-3-in-symfony2-with-no-extra-bundles -- bootstrap to symfony*/
namespace GoldenBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    

    /**
        *@Route("/")
        * 
        */

    public function indexAction()
    {
    	
    	return $this->render('GoldenBundle:Default:index.html.twig') ;
     } 

     /**
        *@Route("/contact")
        * 
        */

     public function contactAction(){
     	
		return $this->render('GoldenBundle:Default:index.html.twig') ;
     } 
}
