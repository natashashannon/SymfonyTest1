<?php

namespace Demo\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {


        // $user = $this->container->get('fos_user.user_manager')
        //  ->findUserByUsername('guest1')
        //  ;

        //  var_dump($user);die;
            
        return $this->render('DemoBlogBundle:Default:index.html.twig');
    }
        // $user = $this->container->get('fos_user.user_manager')
        // 	->findUserByUsername('guest1')
        // 	;

        // 	var_dump($user);die;
        	
    // {  return $this->render('DemoBlogBundle:Default:index.html.twig', array('name' => $name));
    // }
}


    // public function indexAction($name)
    // {
    //     return $this->render('DemoBlogBundle:Default:index.html.twig', array('name' => $name));
    // }