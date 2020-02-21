<?php 
require_once 'header1.php'; ?>

<div class="wrapper-content">
	<?php 
		require_once "controller/usuarios.controller.php";

	$controller = new UsuariosController();

	if (!isset($_REQUEST['controller'])) {
		$controller->Index();
	}else{
		$control = ($_REQUEST['controller']);
   		 $accion = isset($_REQUEST['accion']) ? $_REQUEST['accion'] : 'Index';


   		 call_user_func(array($controller, $accion));
	}?>
</div>
<?php
require_once 'footer.php';
 ?>