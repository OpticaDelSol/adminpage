<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Notum Edit</h3>
            </div>
			<?php echo form_open('notum/edit/'.$notum['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="proveedor_cuenta_id" class="control-label">Proveedor Cuenta Id</label>
						<div class="form-group">
							<input type="text" name="proveedor_cuenta_id" value="<?php echo ($this->input->post('proveedor_cuenta_id') ? $this->input->post('proveedor_cuenta_id') : $notum['proveedor_cuenta_id']); ?>" class="form-control" id="proveedor_cuenta_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha" class="control-label">Fecha</label>
						<div class="form-group">
							<input type="text" name="fecha" value="<?php echo ($this->input->post('fecha') ? $this->input->post('fecha') : $notum['fecha']); ?>" class="has-datetimepicker form-control" id="fecha" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mensaje" class="control-label">Mensaje</label>
						<div class="form-group">
							<textarea name="mensaje" class="form-control" id="mensaje"><?php echo ($this->input->post('mensaje') ? $this->input->post('mensaje') : $notum['mensaje']); ?></textarea>
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