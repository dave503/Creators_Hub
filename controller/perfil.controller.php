<?php 
include_once 'autoload.php';

class PerfilController{
	private $model;

	public function __construct(){
		$this->model = new Perfil();
	}

	public function Index(){
        require_once 'model/session.php';
        require_once 'view/header.php';
		require_once 'view/perfil.php';
        require_once 'view/footer.php';
	}

	public function Crud(){
        $data = new Perfil();

        $data = $this->model->getByID($_REQUEST['_id']);
        require_once 'view/header.php';
        require_once 'view/perfilEditar.php';  
        require_once 'view/footer.php';        
    }  
    public function add(){
        $data = new Perfil();
        
        $data->_id = $_REQUEST['_id'];
        $data->Nombre = $_REQUEST['Nombre'];
        $data->Apellido = $_REQUEST['Apellido'];
        $data->Ocupacion = $_REQUEST['Ocupacion'];
        $data->Descripcion = $_REQUEST['Descripcion'];
        $data->Preferencias = $_REQUEST['Preferencias'];
        //Guardar la imagen
        $archivo = $_FILES['archivo_fls']['tmp_name'];
        $destino = "fotos/".$_FILES["archivo_fls"]['name'];
        move_uploaded_file($archivo, $destino);
        //Mandar la ruta de la imagen
        $data->foto = $destino;

      
        $this->model->update($data);
                 
        header('Location: indexPerfil.php');
    }
    
    public function UpdateImage()
    {
        $data = new Perfil();

        //Guardar la imagen
        $archivo = $_FILES['archivo_fls']['tmp_name'];
        $destino = "fotos/".$_FILES["archivo_fls"]['name'];
        move_uploaded_file($archivo, $destino);
        //Mandar la ruta de la imagen
        $data->foto = $destino;
        $data->_id = $_REQUEST['_id'];

        $this->model->updateFoto($data);
        header('Location: indexPerfil.php');
    }

}


 ?>