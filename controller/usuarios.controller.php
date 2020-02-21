<?php 

require_once 'autoload.php';

class UsuariosController{
	private $model;

	public function __construct(){
		$this->model = new Usuarios();
	}

	public function Index(){
		session_start();
		if ($this->model->loggedin()!="") {
			$this->model->redirect('indexPerfil.php');
		}
		require_once 'view/header.php';	
		require_once 'view/login.php';
		require_once 'view/footer.php';	
	}

	public function Registro(){
		session_start();
		if ($this->model->loggedin()!="") {
			$this->model->redirect('indexPerfil.php');
		}	
		require_once 'view/header.php';	
		require_once 'view/registro.php';	
		require_once 'view/footer.php';	

	}

	public function Login(){
    	
		$data = new Usuarios();

		$data->email = $_REQUEST['email'];
        $data->password = $_REQUEST['password'];

        $this->model->login($data);           
	}

	public function agregar(){
        $data = new Usuarios();
        
        $data->nombre = $_REQUEST['nombre'];
        $data->apellido = $_REQUEST['apellido'];
        $data->email = $_REQUEST['email'];
        $data->sexo = $_REQUEST['sexo'];
        $data->fecha = $_REQUEST['fecha'];
        $data->password = $_REQUEST['password'];
        $pass = $_REQUEST['pass'];

        if($pass == $data->password){
        	$this->model->agregar($data);
       	$this->model->enlazarID($data);   

       	header('Location: index.php');
       }else{
       	header('Location: indexRegistro.php');
       }
    }








}



 ?>