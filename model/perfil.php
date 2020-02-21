<?php 
include_once 'autoload.php';
	class Perfil{

		private $conn;
		public $_id;
		public $Nombre;
		public $Apellido;
		public $Ocupacion;
		public $Descripcion;
		public $Preferencias;
		public $foto;

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
				$stm = $this->conn->hub->perfil;
				$result = $stm->find(array("_id" => $id));
				return $result;
				
			}catch(Exception $e){
				die($e->getMessage());
			}
		}

		public function getByID($_id)
	{
		try{
			$stm = $this->conn->hub->perfil;
			$result = $stm->findOne(['_id'=> new \MongoDB\BSON\ObjectID($_id)]);
			return $result;

		} catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function del($data)
	{
		try{
			$stm = $this->conn->hub->perfil->deleteOne(['_id'=> new \MongoDB\BSON\ObjectID($data->_id)]);

		} catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function update($data)
	{
		try{
			$stm = $this->conn->hub->perfil;
			$result = $stm->updateOne(['_id'=> new \MongoDB\BSON\ObjectID($data->_id)],['$set'=>['Nombre'=>$data->Nombre, 'Apellido'=>$data->Apellido, 'Ocupacion'=>$data->Ocupacion, 'Descripcion'=>$data->Descripcion, 'Preferencias'=>$data->Preferencias]]);

		} catch (Exception $e){
			die($e->getMessage());
		}
	}


	public function updateFoto($data)
	{
		try{
		$stm = $this->conn->hub->perfil;
			$result = $stm->updateOne(['_id'=> new \MongoDB\BSON\ObjectID($data->_id)],['$set'=>['ruta'=>$data->foto]]);
		}
		 catch (Exception $e){
			die($e->getMessage());
		}
	}

}


 ?>