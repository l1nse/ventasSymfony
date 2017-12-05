<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Usuarios;
use AppBundle\Form\UsuariosType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Home:index.html.twig');
    }

    /**
     * @Route("/usuarios", name="ver_usuarios")
     */
    public function verUsuarios(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:usuarios:usuarios.html.twig');
    }

    /**
     * @Route("/agregarUsuarios", name="agregar_usuarios")
     */
    public function agregarUsuarios(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:usuarios:agregar_usuarios.html.twig');
    }

     /**
     * @Route("/nuevoAction", name="nuevo_action")
     */
    public function nuevoAction(Request $request)
    {
        
        $usuario = new Usuarios();
        $form = $this->createForm(UsuariosType::class);
        
        return $this->render('AppBundle:usuarios:agregar_usuarios.html.twig',array("form"=>$form->createView() ));
        //return $this->render('AppBundle:usuarios:agregar_usuarios.html.twig');
        
    }


}
