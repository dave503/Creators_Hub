<?php 
include_once 'autoload.php';
	
	class Publicaciones{

		private $conn;
		public $_id;
		public $usuario;
		public $contenido;
		public $fecha;
		public $descripcion;
		public $area;

		public function __construct(){
			try{
				$this->conn = database::conectar();
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
		}

		public function getAll($id){
			try{
				$stm = $this->conn->hub->publicacion;
				$result = $stm->find(array('usuario' => $id));
				return $result;
				
			}catch(Exception $e){
				die($e->getMessage());
			}
		}

		public function getByID($_id)
	{
		try{
			$stm = $this->conn->hub->publicacion;
			$result = $stm->findOne(['_id'=> new \MongoDB\BSON\ObjectID($_id)]);
			return $result;

		} catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function del($data)
	{
		try{
			$stm = $this->conn->hub->publicacion->deleteOne(['_id'=> new \MongoDB\BSON\ObjectID($data->_id)]);

		} catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function update($data)
	{
		date_default_timezone_set("America/El_Salvador");

		$hoy = Date('d/m/y h:i:s a');
		try{
			$stm = $this->conn->hub->publicacion;
			$result = $stm->updateOne(['_id'=> new \MongoDB\BSON\ObjectID($data->_id)],['$set'=>['contenido'=>$data->contenido, 'fecha'=>$hoy, 'descripcion'=>$data->descripcion, 'area'=>$data->area]]);

		} catch (Exception $e){
			die($e->getMessage());
		}
	}


	public function updateFoto($data)
	{
		try{
		$stm = $this->conn->hub->publicacion;
			$result = $stm->updateOne(['_id'=> new \MongoDB\BSON\ObjectID($data->_id)],['$set'=>['file'=>$data->foto]]);
		}
		 catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function add(Publicaciones $data)
	{
		date_default_timezone_set("America/El_Salvador");

		$hoy = Date('d/m/y h:i:s a');
		try{
		$stm = $this->conn->hub->publicacion;
			$result = $stm->insertOne(['usuario'=>$data->usuario, 'contenido'=>$data->contenido, 'fecha'=>$hoy, 'descripcion'=>$data->descripcion, 'area'=>$data->area, 'file'=>$data->file]);
		}

		 catch (Exception $e){
			die($e->getMessage());
		}
	}

}


 ?>