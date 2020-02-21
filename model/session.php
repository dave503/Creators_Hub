<?php

	session_start();
include_once 'autoload.php';

	$login = new Usuarios();

    //si el usuario no ha iniciado sesion redirije a login
	if(!$login->loggedin())
	{
		// pagina de logueo
		$login->redirect('index.php');
	}


 ?>