	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar Nuevo Cliente</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_cliente" name="guardar_cliente">
			<div id="resultados_ajax"></div>
			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="telefono" class="col-sm-3 control-label">telèfono</label>
				<div class="col-sm-8">
				  <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="telefono" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="correo" class="col-sm-3 control-label">Email</label>
				<div class="col-sm-8">
				  <input type="email" class="form-control" id="correo" name="correo" placeholder="correo"required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="direccion" class="col-sm-3 control-label">direcciòn</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Correo electrónico" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="colonia" class="col-sm-3 control-label">Colonia</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="colonia" name="colonia" placeholder="colonia" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="comercio" class="col-sm-3 control-label">Nombre del  Comercio</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="comercio" name="comercio" placeholder="Comercio"  required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="ciudad" class="col-sm-3 control-label">ciudad</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad"  required>
				</div>
			  </div>
				
			 
			  

			 
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>