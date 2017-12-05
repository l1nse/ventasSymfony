<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Usuarios;
use AppBundle\Form\UsuariosType;

class UsuariosController extends Controller
{
	/**
     * @Route("/insert/usuario", name="insert_usuario")
     */

	Public function insertUsuario(Request $request)
	{
		
		$usuario = new Usuarios();
        $form = $this->createForm(UsuariosType::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $usuario = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();

            return $this->render('AppBundle:return:exito.html.twig');
        }
        
        return $this->render('AppBundle:usuarios:agregar_usuarios.html.twig',array("form"=>$form->createView() ));
        //return $this->render('AppBundle:usuarios:agregar_usuarios.html.twig');

	}

	/**
     * @Route("/usuario/listar", name="listar_usuario")
     */

	public function listarUsuario(Request $request)
	{
		 $em = $this->getDoctrine()->getManager();
         $repository = $em->getRepository('AppBundle:Usuarios');
         $usuarios = $repository->findAll();
         
         return $this->render('AppBundle:Usuarios:usuarios.html.twig',

            array('usuarios'=>$usuarios)
            );
	}

	/**
     * @Route("/usuario/edit/{id}", name="edit_usuario")
     */

	public function editUsuario(Request $request, $id)
	{
		$post = $this->getDoctrine()->getRepository('AppBundle:Usuarios')->find($id);
		if(!$post)
	    {
	        return $this->render('AppBundle:return:exito.html.twig');
	    }
	    $form->handleRequest($request);

		$usuario = new Usuarios();
		$em = $this->getDoctrine()->getManager();
		$repository = $em->getRepository('AppBundle:Usuarios');
		$usuario = $repository->find($id);

	return $this->render('AppBundle:Usuarios:editusuario.html.twig',

            array('usuario'=>$usuario)

            );
        

         
	}

	
}
