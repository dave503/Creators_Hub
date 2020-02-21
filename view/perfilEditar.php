<?php error_reporting(E_ALL ^ E_NOTICE);
 ?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="hub.php" class="brand-link">
      <img src="assets/img/logoc.png" alt="Creators HUB Logo" class="brand-image elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Creators HUB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php 
                    if (is_null($data->ruta)) { ?>
                      <img class="profile-user-img img-fluid img-circle"
                       src="assets/img/<?php echo $data->Sexo ?>.png"
                       alt="User profile picture">
                    <?php }else{ ?>
              <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo $data->ruta; ?>"
                       alt="User profile picture">
                    <?php } ?>        
        </div>
        <div class="info" style="color: white;">
          <?php echo $data->Nombre." ".$data->Apellido; ?>
        </div>
      </div>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    
    <!-- Main content -->
    

    <?php 
    
	if ($_REQUEST['do'] == "info"){
    ?>
    <section class="content-header">

        <?php 
                    if (is_null($data->ruta)) { ?>
                      <img class="profile-user-img img-fluid img-circle"
                       src="assets/img/<?php echo $data->Sexo ?>.png"
                       alt="User profile picture">
                    <?php }else{ ?>
              <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo $data->ruta; ?>"
                       alt="User profile picture">
                    <?php } ?> 
      <div class="container-fluid">
        <div class="row mb-10">
        <h1>Editar Datos de <?php echo $data->Nombre . ' '. $data->Apellido; ?></h1> 

        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    
  <div class="content-header card card-primary card-outline">
      <div class="container-fluid">
        <div class="col-sm-6">

        <form class="form-horizontal" action="?controller=perfil&accion=add" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_id" value="<?php echo $data->_id; ?>" />
            <div class="card-body">
                  <div class="form-group" style="text-align: left;">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="Nombre" id="inputEmail3" value="<?php echo $data->Nombre; ?>" required autofocus>
                    </div>
                  </div>
                  <div class="form-group" style="text-align: left;">
                    <label for="inputPassword3" class="col-sm-3 control-label">Apellido</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="Apellido" id="inputPassword3" value="<?php echo $data->Apellido; ?>" required>
                    </div>
                  </div>
                  <div class="form-group" style="text-align: left;">
                    <label for="inputPassword3" class="col-sm-3 control-label">Ocupacion</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="Ocupacion" id="inputPassword3" value="<?php echo $data->Ocupacion; ?>" placeholder="Su Ocupacion..." required >
                    </div>
                  </div>
                  <div class="form-group" style="text-align: left;">
                    <label for="inputPassword3" class="col-sm-3 control-label">Descripcion</label>

                    <div class="col-sm-10">
                        <textarea name="Descripcion" required class="form-control"><?php echo $data->Descripcion; ?> 
                        </textarea>
                    </div>
                  </div>
                  <div class="form-group" style="text-align: left;">
                    <label for="inputPassword3" class="col-sm-3 control-label">Preferencias</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="Preferencias" id="inputPassword3" value="<?php echo $data->Preferencias; ?>" placeholder="Sus Preferencias..."  required>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
            <button class="btn btn-primary btn-block">Guardar</button>
            <a class="btn btn-danger btn-block" href="indexPerfil.php">Cancelar</a>
            </div>
        </form>
</div></div></div>
   
    <?php
    }else{
    ?>
        
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-10">
        <h1>Cambiar foto de perfil de <?php echo $data->Nombre." ".$data->Apellido; ?></h1>    
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
  <div class="content-header card card-primary card-outline">
      <div class="container-fluid">
        <div class="col-sm-6">

        <form class="form-horizontal" action="?controller=perfil&accion=UpdateImage" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_id" value="<?php echo $data->_id; ?>" />
            <?php 
                    if (is_null($data->ruta)) { ?>
                      <img class="profile-user-img img-fluid img-circle"
                       src="assets/img/<?php echo $data->Sexo ?>.png"
                       alt="User profile picture">
                    <?php }else{ ?>
              <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo $data->ruta; ?>"
                       alt="User profile picture">
                    <?php }
                   ?>
            
            <input type="file" required name="archivo_fls"/>
            <br><br>
                <div class="col-sm-3">
            <button class="btn btn-primary btn-block">Guardar</button>
            <a class="btn btn-danger btn-block" href="indexPerfil.php">Cancelar</a>
            </div>
        </form>
</div></div></div>
    <?php
    } 
    ?>


