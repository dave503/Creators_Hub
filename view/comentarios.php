
	<?php $id_publicacion = $_REQUEST['id_publicacion']; ?>
	<div class="card-body">
	<div align="right">
		<a class="btn btn-success" title="Nuevo Comentario" href="?controller=Publicaciones&accion=Crudd&id_publicacion=<?php echo $id_publicacion; ?>"><i class="fa fa-plus-square"></i></a>

	<a class="btn btn-danger" href="indexPublicaciones.php">Cancelar</a>
	</div>
		<h2 style="text-align: left;">Comentarios</h2>

	<hr>
    <div class="tab-content">
      <div class="active tab-pane" id="activity">
                    <!-- Post -->
        <div class="post">
                    	
          <div class="user-block">
	
  	
	</div>

			<?php error_reporting(E_ALL ^ E_NOTICE); foreach($this->model2->getAll("$id_publicacion") as $r) {?>
				<div class="card card-primary card-outline">

					<p style="padding-top: 20px; padding-left: 20px; text-align: justify; padding-right: 20px;">
                        <?php echo $r->contenido; ?>
                      </p>
				<div class="card-footer">
					<a href="?controller=Publicaciones&accion=Crudd&_id=<?php echo $r->_id; ?>&id_publicacion=<?php echo $r->id_publicacion; ?>">Editar | </a>
					<a href="?controller=Publicaciones&accion=Deld&_id=<?php echo $r->_id; ?>&id_publicacion=<?php echo $r->id_publicacion; ?>">Eliminar</a>
				</div>
				</div>

			<?php }  ?>
		</tbody>
	</table>
	
</div></div></div></div>