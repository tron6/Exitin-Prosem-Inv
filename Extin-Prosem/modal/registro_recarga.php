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
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar Recarga</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_cliente" name="guardar_cliente">
			<div class="form-group">
				<label for="tipo_recarga" class="col-sm-3 control-label">Tipo de Recarga</label>
				<div class="col-sm-8">
					<select class='form-control' name='tipo_recarga' id='tipo_recarga' required>
						<option value="">Selecciona un tipo de recarga</option>
							<?php 
							$query_recarga=mysqli_query($con,"select * from tipo_recarga order by codigo_recarga");
							while($rw=mysqli_fetch_array($query_recarga))	{
								?>
							<option value="<?php echo $rw['id_tiporecarga'];?>"><?php echo $rw['codigo_recarga'];?></option>			
								<?php
							}
							?>
					</select>			  
				</div>
				<div class="form-group">
				<label for="tipo_recarga" class="col-sm-3 control-label">Cliente</label>
				<div class="col-sm-8">
					<select class='form-control' name='tipo_recarga' id='tipo_recarga' required>
						<option value="">Selecciona un cliente</option>
							<?php 
							$query_recarga=mysqli_query($con,"select * from tipo_recarga order by codigo_recarga");
							while($rw=mysqli_fetch_array($query_recarga))	{
								?>
							<option value="<?php echo $rw['id_tiporecarga'];?>"><?php echo $rw['codigo_recarga'];?></option>			
								<?php
							}
							?>
					</select>			  
				</div>
			  </div>
			    <div class="form-group">
				<label for="cantidad" class="col-sm-3 control-label">cantidad</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="cantidad" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="fecha" class="col-sm-3 control-label">Fecha</label>
				<div class="col-sm-8">
				  <input type="date" class="form-control" id="fecha" name="fecha" placeholder="fecha"required>
				</div>
			  </div>
			  
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