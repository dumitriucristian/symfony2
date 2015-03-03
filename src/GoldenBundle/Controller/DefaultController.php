<?php
/*https://coderwall.com/p/cx1ztw/bootstrap-3-in-symfony2-with-no-extra-bundles -- bootstrap to symfony*/
namespace GoldenBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use GoldenBundle\Form\Type\ContactType;

class DefaultController extends Controller
{
    

    /**
    *@Route("/")
    * 
    */

    public function indexAction()
    {      	
        return $this->render('GoldenBundle:Default:base.html.twig',array('title' =>'Hone Page')) ;
    } 

   
    /**
    *@Route("/contact")
    * 
    */
    public function contactAction(){

        $task = "task";
        $form = $this->createForm(new ContactType(), $task);


    	return $this->render('GoldenBundle:Default:contact.html.twig',array('title'=>"Contact")) ;

    } 

    /**
    *@Route("/about")
    * 
    */

    public function aboutAction(){

        return $this->render('GoldenBundle:Default:index.html.twig',array('title'=>"About")) ;
    } 


    /**
    *@Route("/blog")
    * 
    */

    public function blogAction(){

        return $this->render('GoldenBundle:Default:index.html.twig',array('title'=>"Blog")) ;
    }    

    /**
    *@Route("/login")
    * 
    */

    public function loginAction(){
        return $this->render('GoldenBundle:Default:index.html.twig',array('title'=>"Login")) ;

    }   
}      
