<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edici&oacute;n de Remito</h3>
            </div>
			<?php echo form_open('documento/edit/'.$documento['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
                                    <div class="col-md-6">
						<label for="nro_remito" class="control-label">Nro.:</label>
						<div class="form-group">
                                                    <input type="text" name="nro_remito" readonly="true" value="<?php echo $documento['codigo']; ?>" class="form-control" id="nro_remito" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha" class="control-label">Fecha</label>
						<div class="form-group">
							<input type="text" name="fecha" value="<?php echo $documento['fecha_alta']; ?>" class="form-control datepicker" id="fecha" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="monto_total" class="control-label">Monto Total</label>
						<div class="form-group">
							<input type="number" step=".01" name="monto_total" value="<?php echo ($documento['monto_total']); ?>" class="form-control" id="monto_total" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Guardar
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>