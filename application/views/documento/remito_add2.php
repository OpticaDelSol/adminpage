<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
        <div class="box box-info" style="border: 1px solid;">
            <div class="box-header with-border">
              	<h3 class="box-title">Agregar remito para el proveedor: <?php echo $proveedor['nombre']; ?></h3>
            </div>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="cuit" class="control-label">CUIT</label>
						<label class="control-label"><?php echo $proveedor['cuit']; ?></label>
					</div>
					<div class="col-md-6">
						<label for="nombre" class="control-label">Nombre:</label>
						<label class="control-label"><?php echo ($proveedor['nombre']); ?></label>
					</div>
				</div>
			</div>
		</div>
            <?php echo form_open('documento/add_remito/'.$id_proveedor); ?>
          	<div class="box-body">
          		<div class="row clearfix">


					<div class="col-md-12">
						<label for="codigo" class="control-label"><span class="text-danger">*</span>Nro.:</label>
						<div class="form-group">
							<input type="text" name="codigo" value="<?php echo $this->input->post('codigo'); ?>" class="form-control documento-codigo" id="codigo" />
							<span class="text-danger"><?php echo form_error('codigo');?></span>
						</div>
					</div>

					<div class="col-md-12">
						<label for="monto_total" class="control-label">Monto Total</label>
						<div class="form-group">
							<input type="text" name="monto_total" value="<?php echo $this->input->post('monto_total'); ?>" class="form-control   monto-type" id="monto_total" />
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
<div class="row"> <div class="box"> <div class="box-footer"><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="btn btn-danger btn-sm">Cancelar</a></div> </div> </div>