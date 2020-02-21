<?php 
	require_once 'autoload.php';
	class Usuarios{

		private $conn;    
	    public $nombre;
	    public $apellido;
	    public $email;
	    public $sexo;
	    public $fecha;
	    public $password;

		public function __construct(){
			try{
				$this->conn = database::conectar();
			}
			catch(Exception $e){
				die($e->getMessage());
			}
		} 

		public function login($data){
			$pass = md5($data->password);
			try{
			$stm=$this->conn->hub->usuarios;
			$result = $stm->findOne(['email'=>$data->email, 'password'=>$pass]);
			if($result){
					session_start();
	            	$_SESSION['id'] = $result->_id;
          	header('Location: indexPerfil.php');           
	        }
	        else{ 	
	        header('Location: index.php');         
	        }
			} catch (Exception $e){
				die($e->getMessage());
			}
		}

		public function agregar($data)
		{	
			$pass = md5($data->password);
			try{
				$stm = $this->conn->hub->usuarios;
				$result = $stm->insertOne(['nombre'=>$data->nombre, 'apellido'=>$data->apellido,
				'email'=>$data->email, 'sexo'=>$data->sexo, 'fecha'=>$data->fecha, 'password'=>$pass, 'estado'=>'1', 'delete' => '0']);
			}
			catch(Exception $e){
				die($e->getMessage());
			}
		}
		public function enlazarID($data)
		{
			$pass = md5($data->password);
			try{
				//Consulta para substraer el id del usuario recien registrado
				$consultar=$this->conn->hub->usuarios;
				$result = $consultar->findOne(['email'=>$data->email, 'password'=>$pass]);

				//Insertar el Id del usuario recien registrado en la tabla de perfil
				$insertar = $this->conn->hub->perfil;
				$insert = $insertar->insertOne(['_id'=>$result->_id, 'Nombre'=>$data->nombre, 'Apellido'=>$data->apellido, 'Sexo'=>$data->sexo]);

			}
			catch(Exception $e){
				die($e->getMessage());
			}
		}

		public function loggedin()
		{
			if(isset($_SESSION['id']))
			{
				return true;
			}
		}
		
		public function redirect($url)
		{
			header("Location: $url");
		}
		
		public function doLogout()
		{
			session_start();
			session_destroy();
			unset($_SESSION['id']);
			return true;
		}

	}



 ?>