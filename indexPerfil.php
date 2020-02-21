<?php 

	require_once 'header.php';
	require_once "controller/perfil.controller.php";

	$controller = new PerfilController();

	if (!isset($_REQUEST['controller'])) {

		$controller->Index();
	}else{
		 $control = ($_REQUEST['controller']);
   		 $accion = isset($_REQUEST['accion']) ? $_REQUEST['accion'] : 'Index';


   		 call_user_func(array($controller, $accion));
	}
	require_once 'footer.php';
 ?>