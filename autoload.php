<?php 

	
	function autoload($class)
	{
		include_once 'model/'.$class.'.php';
	}
	spl_autoload_register('autoload');
 ?>