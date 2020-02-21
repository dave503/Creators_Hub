<?php 
include_once 'autoload.php';

	class Comentarios{

		private $conn;
		public $_id;
		public $id_usuario;
		public $id_publicacion;
		public $contenido;
		

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
				$stm = $this->conn->hub->comentarios ;
				$result = $stm->find(array('id_publicacion' => $id));
				return $result;
				
			}catch(Exception $e){
				die($e->getMessage());
			}
		}

		public function getByID($_id)
	{
		try{
			$stm = $this->conn->hub->comentarios ;
			$result = $stm->findOne(['_id'=> new \MongoDB\BSON\ObjectID($_id)]);
			return $result;

		} catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function del($data)
	{
		try{
			$stm = $this->conn->hub->comentarios ->deleteOne(['_id'=> new \MongoDB\BSON\ObjectID($data->_id)]);

		} catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function update($data)
	{
		try{
			$stm = $this->conn->hub->comentarios ;
			$result = $stm->updateOne(['_id'=> new \MongoDB\BSON\ObjectID($data->_id)],['$set'=>['id_usuario'=>$data->id_usuario, 'id_publicacion'=>$data->id_publicacion, 'contenido'=>$data->contenido]]);

		} catch (Exception $e){
			die($e->getMessage());
		}
	}


	

	public function add(Comentarios $data)
	{
		try{
		$stm = $this->conn->hub->comentarios ;
			$result = $stm->insertOne(['id_usuario'=>$data->id_usuario, 'id_publicacion'=>$data->id_publicacion, 'contenido'=>$data->contenido]);
		}

		 catch (Exception $e){
			die($e->getMessage());
		}
	}

}


 ?>