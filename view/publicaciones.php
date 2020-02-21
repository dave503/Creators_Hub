 
	<?php $idSesion = $_SESSION['id']; ?>
	<div class="card-body">
	<div align="right"><a title="Nueva publicacion" class="btn btn-success" href="?controller=Publicaciones&accion=Crud&_id=<?php echo $idSesion; ?>&do=info"><i class="fa fa-plus-square"></i></a></div>
	<hr>
	
    <div class="tab-content">
      <div class="active tab-pane" id="activity">
                    <!-- Post -->
        <div class="post">
                    	
          <div class="user-block">
	
			<?php error_reporting(E_ALL ^ E_NOTICE); 
			foreach($this->model->getAll("$idSesion") as $r) {
			?>		
				<div class="card card-primary card-outline">
					<h7 class="" style=" padding-left: 10px; padding-top: 10px;">Publicado <?php echo $r->fecha  . "  "." | ".$r->area; ?></h7><hr>

					<h5 class="username"><?php echo $r->descripcion ?></h5>
					<p style="padding-left: 20px; text-align: justify; padding-right: 20px;">
						
                        <?php echo $r->contenido; ?>
						
                      </p>
                      <?php if ($r->file == 'files/'): ?>
                      	
                      <?php else: ?>
                      	
                      	<div class="username">
                        <img style="width: 300px; height: 300px;" src="<?php echo $r->file; ?>">
                      </div><br>
                      <div class ="username">
                      	<a title="Cambiar contenido multimedia" class="btn btn-default" href="?controller=Publicaciones&accion=Crud&_id=<?php echo $r->_id;?>&do=foto">Cambiar archivo</a>
                      </div>
                      
                      <?php endif ?>
                      <hr>
				<div class="card-footer">
					<a href="?controller=Publicaciones&accion=Crud&_id=<?php echo $r->_id; ?>&do=info"> Editar</a>

				<a href="?controller=Publicaciones&accion=Del&_id=<?php echo $r->_id; ?>"> | Eliminar</a>
	
	
				<a href="indexComentarios.php?id_publicacion=<?php echo $r->_id; ?>"> | Comentarios</a>
				</div>
				</div>
				

			<?php }  ?>
</div></div></div></div></div>


