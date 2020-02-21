<?php 
	require_once "controller/publicaciones.controller.php";

	$controller = new PublicacionesController();

	if (!isset($_REQUEST['controller'])) {

		$controller->IndexComentarios();
	}else{
		 $control = ($_REQUEST['controller']);
   		 $accion = isset($_REQUEST['accion']) ? $_REQUEST['accion'] : 'IndexComentarios';

   		 call_user_func(array($controller, $accion));
	}

 ?>