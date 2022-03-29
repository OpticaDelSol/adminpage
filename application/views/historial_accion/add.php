<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Historial Accion Add</h3>
            </div>
            <?php echo form_open('historial_accion/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="accion_id" class="control-label">Accion</label>
						<div class="form-group">
							<select name="accion_id" class="form-control">
								<option value="">select accion</option>
								<?php 
								foreach($all_accion as $accion)
								{
									$selected = ($accion['id'] == $this->input->post('accion_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$accion['id'].'" '.$selected.'>'.$accion['nombre'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="usuario_id" class="control-label">Usuario</label>
						<div class="form-group">
							<select name="usuario_id" class="form-control">
								<option value="">select usuario</option>
								<?php 
								foreach($all_usuarios as $usuario)
								{
									$selected = ($usuario['id'] == $this->input->post('usuario_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$usuario['id'].'" '.$selected.'>'.$usuario['nombre'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipo_accion" class="control-label">Tipo Accion</label>
						<div class="form-group">
							<input type="text" name="tipo_accion" value="<?php echo $this->input->post('tipo_accion'); ?>" class="form-control" id="tipo_accion" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="detalle" class="control-label">Detalle</label>
						<div class="form-group">
							<input type="text" name="detalle" value="<?php echo $this->input->post('detalle'); ?>" class="form-control" id="detalle" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha" class="control-label">Fecha</label>
						<div class="form-group">
							<input type="text" name="fecha" value="<?php echo $this->input->post('fecha'); ?>" class="has-datetimepicker form-control" id="fecha" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>