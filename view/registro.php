
<div class="content-wrapper" align="center">
  <div class="content-header">
      <div class="container-fluid">

        <div class="col-sm-10">

          <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-body" style="text-align: right;">
                <a href="index.php" class="btn btn-primary card-title">Ya tengo cuenta</a>
              </div>
              <div class="card-header">
                <h1 class="card-title" style="text-align: center;">Registro de usuarios</h1>
              </div>
              
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="?controller=login&accion=agregar" method="POST">
                <div class="card-body">
                  <div class="form-group" style="text-align: left;">
                    <label for="nombre" class="col-sm-2 control-label">Nombres:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese sus nombres" required autofocus>
                    </div>
                  </div>
                  
                  <div class="form-group" style="text-align: left;">
                    <label for="apellido" class="col-sm-2 control-label">Apellidos:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese sus apellidos" required autofocus>
                    </div>
                  </div>

                  <div class="form-group" style="text-align: left;">
                    <label for="email" class="col-sm-2 control-label">Email:</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su email" required autofocus>
                    </div>
                  </div>
        
                <div class="form-group" style="text-align: left;">
                    <label for="sexo" class="col-sm-2 control-label">Sexo:</label>
                    <div class="col-sm-10">
                        <select name="sexo" class="form-control" required>
                            <option>----- Elija su sexo -----</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group" style="text-align: left;">
                    <label for="sexo" class="col-sm-6 control-label">Fecha de nacimiento:</label>
                    <div class="col-sm-10">
                        <input type="date" name="fecha" class="form-control">
                    </div>
                </div>
                <div class="form-group" style="text-align: left;">
                    <label for="sexo" class="col-sm-6 control-label">Contraseña:</label>
                    <div class="col-sm-10">
                        <input type="password" name="pass" class="form-control" placeholder="Contraseña">
                    </div><br>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" placeholder="Repita la contraseña">
                    </div>
                </div>
                
                <!-- /.card-body -->
                <div class="card-footer" style="text-align: right;">
                  <button class="btn btn-info">Registrar</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 </div>