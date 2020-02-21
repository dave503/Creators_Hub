<?php 
include_once 'autoload.php';

class PublicacionesController{
	private $model;
    private $model2;
	public function __construct(){
		$this->model = new Publicaciones();
        $this->model2 = new Comentarios();
	}

	public function Index(){
        require_once 'model/session.php';
        require_once 'view/header.php';
		require_once 'view/publicaciones.php';
        require_once 'view/footer.php';
	}

    public function IndexComentarios(){
        require_once 'model/session.php';
        require_once 'view/header.php';
        require_once 'view/comentarios.php';
        require_once 'view/footer.php';
        
    }

	public function Crud(){
        require_once 'model/session.php';
        $data = new Publicaciones();

        if(isset($_REQUEST['_id'])){
        $data = $this->model->getByID($_REQUEST['_id']);
        }
        require_once 'view/header.php';    
        require_once 'view/publicacionesEditar.php';
        require_once 'view/footer.php';          
    }  

    public function Crudd(){
        require_once 'model/session.php';
        $data = new Comentarios();

        $dataPublicacion = $_REQUEST['id_publicacion'];

        if(isset($_REQUEST['_id'])){
        $data = $this->model2->getByID($_REQUEST['_id']);

        }    
        require_once 'view/header.php';
        require_once 'view/comentariosEditar.php';    
        require_once 'view/footer.php';      
    }

    public function add(){
        $data = new Publicaciones();

        $data->_id = $_REQUEST['_id'];
        $data->usuario = $_REQUEST['id'];
        $data->contenido = $_REQUEST['Contenido'];
        $data->fecha = $_REQUEST['Fecha'];
        $data->descripcion = $_REQUEST['Descripcion'];
        $data->area = $_REQUEST['Area'];

        $archivo = $_FILES['file']['tmp_name'];
        $destino = "files/".$_FILES["file"]['name'];
        move_uploaded_file($archivo, $destino);
        //Mandar la ruta de la imagen
        $data->file = $destino;
        
        $data->_id > 0 
        ? $this->model->update($data)
        : $this->model->add($data);        
        header('Location: indexPublicaciones.php');
    }

    public function addd(){
        $data = new Comentarios();

        $data->_id = $_REQUEST['_id'];
        $data->id_usuario = $_REQUEST['id_usuario'];
        $data->id_publicacion = $_REQUEST['id_publicacion'];
        $data->contenido = $_REQUEST['contenido'];
       
        $data->_id > 0 
        ? $this->model2->update($data)
        : $this->model2->add($data);        
        header("Location: indexComentarios.php?id_publicacion=$data->id_publicacion");
    }

     public function Del(){
        $data = new Publicaciones();

        $data->_id = $_REQUEST['_id'];

        if ($data->_id > 0) {
            $this->model->del($data);
            header('Location: indexPublicaciones.php');
        }else{
            echo "No se pudo borrar el registro";
        }
    }

    public function Deld(){
        $data = new Comentarios();

        $data->_id = $_REQUEST['_id'];
        $data->id_publicacion = $_REQUEST['id_publicacion'];
        if ($data->_id > 0) {
            $this->model2->del($data);
            header("Location: indexComentarios.php?id_publicacion=$data->id_publicacion");
        }else{
            echo "No se pudo borrar el registro";
        }
    }
    public function UpdateImage()
    {
        $data = new Publicaciones();

        //Guardar la imagen
        $archivo = $_FILES['file']['tmp_name'];
        $destino = "files/".$_FILES["file"]['name'];
        move_uploaded_file($archivo, $destino);
        //Mandar la ruta de la imagen
        $data->foto = $destino;
        $data->_id = $_REQUEST['_id'];

        $this->model->updateFoto($data);
        header('Location: indexPublicaciones.php');
    }
    
}


 ?>