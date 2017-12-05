<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Usuarios;

class UsuariosController extends Controller
{
	/**
     * @Route("/insert/usuario", name="insert_post")
     */

	Public function insertPost()
	{
		$usuario = new Usuarios();
		$usuario->setNombre('Prueba1');
		$usuario->setApellidos('Apellido1');
		$usuario->setTelefono('56987645261');
		$usuario->setEdad('23');

		$em = $this->getDoctrine()->getManager();

		$em->persist($usuario);

		$em->flush();

		return new Response('Se inserto nueva entrada ID: '.$usuario->getId());

	}
}
