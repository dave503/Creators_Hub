<?php error_reporting(E_ALL ^ E_NOTICE); foreach($this->model->getAll($_SESSION['id']) as $r) {?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
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
                    if (is_null($r->ruta)) { ?>
                      <img class="profile-user-img img-fluid img-circle"
                       src="assets/img/<?php echo $r->Sexo ?>.png"
                       alt="User profile picture">
                    <?php }else{ ?>
              <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo $r->ruta; ?>"
                       alt="User profile picture">
                    <?php }
                   ?>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $r->Nombre . " ".$r->Apellido; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-user-circle"></i>
              <p>
                Perfil
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?controller=Perfil&accion=Crud&_id=<?php echo $r->_id; ?>&do=info" class="nav-link">
                  <i class="fa fa-address-card"></i>
                  <p>Editar perfil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="model/logout.php" class="nav-link">
                  <i class="fa fa-sign-out nav-icon"></i>
                  <p>Cerrar sesion</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                	<?php 
                		if (is_null($r->ruta)) { ?>
                			<img class="profile-user-img img-fluid img-circle"
                       src="assets/img/<?php echo $r->Sexo ?>.png"
                       alt="User profile picture">
                		<?php }else{ ?>
							<img class="profile-user-img img-fluid img-circle"
                       src="<?php echo $r->ruta; ?>"
                       alt="User profile picture">
                		<?php }
                	 ?>
                  <a title="Cambiar foto de perfil" class="btn btn-default" href="?controller=Perfil&accion=Crud&_id=<?php echo $r->_id;?>&do=foto"> <i class="fa fa-edit"></i></a>
                </div>

                <h3 class="profile-username text-center"><?php echo $r->Nombre . " " . $r->Apellido; ?></h3>

                <p class="text-muted text-center"><?php echo $r->Ocupacion; ?></p>

                <a href="?controller=Perfil&accion=Crud&_id=<?php echo $r->_id; ?>&do=info" class="btn btn-primary btn-block"><b>Editar perfil</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Descripción</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <strong><i class="fa fa-book mr-1"></i>Descripción</strong>

                <p class="text-muted"><?php echo $r->Descripcion; ?></p>

                <hr>

                <strong><i class="fa fa-address-card mr-1"></i>Ocupación</strong>

                <p class="text-muted">
                  <span class="tag tag-danger"><?php echo $r->Ocupacion; ?></span>
                </p>

                <hr>

                <strong><i class="fa fa-file-text-o mr-1"></i>Preferencias</strong>

                <p class="text-muted"><?php echo $r->Preferencias; ?></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="indexPerfil.php">Publicaciones</a></li>
                  
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <?php 
                		if (is_null($r->ruta)) { ?>
                			<img class="profile-user-img img-fluid img-circle"
                       src="assets/img/<?php echo $r->Sexo ?>.png"
                       alt="User profile picture">
                       <span class="username">
                          <a href="#"><?php echo $r->Nombre . " " . $r->Apellido; ?></a>
                          <a href="#" class="float-right btn-tool"><i class="fa fa-times"></i></a>
                        </span>
                		<?php }else{ ?>
							<img class="profile-user-img img-fluid img-circle"
                       src="<?php echo $r->ruta; ?>"
                       alt="User profile picture">
                       <span class="username">
                          <a href="#"><?php echo $r->Nombre . " " . $r->Apellido; ?></a>
                          <a href="#" class="float-right btn-tool"><i class="fa fa-times"></i></a>
                        </span>
                		<?php }
                    ?>
                    <div class="embed-container">
                        <iframe width="100%" height="1000" src="indexPublicaciones.php" scrolling="auto" frameborder="0" allowfullscreen></iframe>
                    </div>
                        
                      </div>
                      <!-- /.user-block -->
                    </div>
                    <!-- /.post -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>

            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php }?>
 
 </style>