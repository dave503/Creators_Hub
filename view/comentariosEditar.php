
<h1>
    <?php  error_reporting(E_ALL ^ E_NOTICE);
    $id_publicacion = $_REQUEST['id_publicacion'];

	if ($data->_id != null){
        echo "Editar Comentario";
    }else{
        echo "Nuevo Comentario";
    } 
    ?>
</h1>
<div class="content-header card card-primary card-outline">
      <div class="container-fluid">
        <div class="col-sm-6">

<form class="form-horizontal" action="?controller=Publicaciones&accion=addd" method="post">
        <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['id']; ?>" />
        <input type="hidden" name="id_publicacion" value="<?php echo $_REQUEST['id_publicacion']; ?>" />
        <input type="hidden" name="_id" value="<?php echo $data->_id; ?>" />
        <div class="card-body">
            <div class="form-group" style="text-align: left;">
                <label for="inputEmail3" class="col-sm-5 control-label">Contenido</label>
                <div class="col-sm-15">
                    <textarea rows="5" cols="60" class="form-control" name="contenido" required autofocus><?php echo $data->contenido; ?></textarea>
                </div>
            </div>
            <div class="col-sm-5">
            <button class="btn btn-primary btn-block">Guardar</button>
            </div>
</form>
