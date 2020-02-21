
<div class="content-wrapper" align="center">
  <div class="content-header">
      <div class="container-fluid">

        <div class="col-sm-7">

          <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-body" style="text-align: right;">
                <a href="indexRegistro.php" class="btn btn-primary card-title">Registrarse</a>
              </div>
              <div class="card-header">
                <h1 class="card-title" style="text-align: center;">Inicio de sesión</h1>
              </div>
              <div id="error">
            
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="?controller=login&accion=Login" method="POST">
                <div class="card-body">
                  <div class="form-group" style="text-align: left;">
                    <label for="" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" id="" placeholder="Email" required autofocus>
                    </div>
                  </div>
                  <div class="form-group" style="text-align: left;">
                    <label for="" class="col-sm-3 control-label">Contraseña</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password" id="" placeholder="Password" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="text-align: right;">
                  <button name="login" type="submit" class="btn btn-info">Entrar</button>

                </div>
                <!-- /.card-footer -->
              </form>
            </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 </div>