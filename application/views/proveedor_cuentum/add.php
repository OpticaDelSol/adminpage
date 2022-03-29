<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Proveedor Cuentum Add</h3>
            </div>
            <?php echo form_open('proveedor_cuentum/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="proveedor_id" class="control-label">Proveedor Id</label>
						<div class="form-group">
							<input type="text" name="proveedor_id" value="<?php echo $this->input->post('proveedor_id'); ?>" class="form-control" id="proveedor_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha_modif" class="control-label">Fecha Modif</label>
						<div class="form-group">
							<input type="text" name="fecha_modif" value="<?php echo $this->input->post('fecha_modif'); ?>" class="has-datetimepicker form-control" id="fecha_modif" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="saldo" class="control-label">Saldo</label>
						<div class="form-group">
							<input type="text" name="saldo" value="<?php echo $this->input->post('saldo'); ?>" class="form-control" id="saldo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nro_cuenta" class="control-label">Nro Cuenta</label>
						<div class="form-group">
							<input type="text" name="nro_cuenta" value="<?php echo $this->input->post('nro_cuenta'); ?>" class="form-control" id="nro_cuenta" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="comentarios" class="control-label">Comentarios</label>
						<div class="form-group">
							<input type="text" name="comentarios" value="<?php echo $this->input->post('comentarios'); ?>" class="form-control" id="comentarios" />
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