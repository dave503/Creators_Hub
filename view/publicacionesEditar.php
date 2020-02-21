<?php error_reporting(E_ALL ^ E_NOTICE);?>

<h1>
    <?php 
	if ($data->_id != null){
        echo "Editar publicacion";
    }else{
        echo "Nueva publicacion";
    } 
    ?>
</h1> 
<div class="content-header card card-primary card-outline">
      <div class="container-fluid">
        <div class="col-sm-12">
<?php if ($_REQUEST['do'] == "info"): ?>
  <?php if ($data->_id != null): ?>
  <form class="form-horizontal" action="?controller=perfil&accion=add" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>" />
        <input type="hidden" name="_id" value="<?php echo $data->_id; ?>" />
        <br>
        <div class="card-body">
                  <div class="form-group" style="text-align: left;">
                    <label for="" class="col-sm-2 control-label">Contenido</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="Contenido" required autofocus><?php echo $data->contenido; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group" style="text-align: left;">
                    <label for="" class="col-sm-2 control-label">Descripcion</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="Descripcion" required autofocus><?php echo $data->descripcion; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group" style="text-align: left;">
                    <label for="" class="col-sm-2 control-label">Area</label>
                    <div class="col-sm-10">
                      <select name="Area" required class="form-control">
                        <option value="<?php echo $data->area; ?>"> ---- Elija una opción ----- </option>
                        <option value="Programación">Programación</option>
                        <option value="Diseño">Diseño</option>
                        <option value="Análisi">Análisis</option>
                        <option value="Desarrollo">Desarrollo</option>
                      </select>
                    </div>
                  </div>
                  
                </div>
                <div class="col-sm-3">
            <button class="btn btn-primary btn-block">Guardar</button>
            
            </div>
</form>
<?php else: ?>
  <form class="form-horizontal" action="?controller=perfil&accion=add" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>" />
        <input type="hidden" name="_id" value="<?php echo $data->_id; ?>" />
        <br>
        <div class="card-body">
                  <div class="form-group" style="text-align: left;">
                    <label for="" class="col-sm-2 control-label">Contenido</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="Contenido" required autofocus><?php echo $data->contenido; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group" style="text-align: left;">
                    <label for="" class="col-sm-2 control-label">Descripcion</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="Descripcion" required autofocus><?php echo $data->descripcion; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group" style="text-align: left;">
                    <label for="" class="col-sm-2 control-label">Area</label>
                    <div class="col-sm-10">
                      <select name="Area" required class="form-control">
                        <option value="<?php echo $data->area; ?>"> ---- Elija una opción ----- </option>
                        <option value="Programación">Programación</option>
                        <option value="Diseño">Diseño</option>
                        <option value="Análisi">Análisis</option>
                        <option value="Desarrollo">Desarrollo</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group" style="text-align: left;">
                    <label for="" class="col-sm-2 control-label">Archivo</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="file" id="" value="<?php echo $data->file; ?>">
                    </div>
                  </div>
                <div class="col-sm-3">
            <button class="btn btn-primary btn-block">Guardar</button>
            
            </div>
</form>
<?php endif ?>
<?php else: ?>
  <form class="form-horizontal" action="?controller=perfil&accion=UpdateImage" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_id" value="<?php echo $data->_id; ?>" />
                    
              <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo $data->file; ?>"
                       alt="User profile picture">
            
            <input type="file" required name="file"/>
            <br><br>
                <div class="col-sm-3">
            <button class="btn btn-primary btn-block">Guardar</button>
            </div>
        </form>
<?php endif ?>



</div></div></div>
