<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Agregar Pago</h3>
            </div>
            <?php echo form_open('pago_proveedor/agregar'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
                            <div class="col-md-12">
                                <div class="box box-info">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Detalles del Proveedor: <?php echo $proveedor['nombre']; ?></h3>
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
                            </div>
					<div class="col-md-6">
						<label for="monto" class="control-label"><span class="text-danger">*</span>Monto</label>
						<div class="form-group">
							<input type="text" name="monto" value="<?php echo $this->input->post('monto'); ?>" class="form-control" id="monto" />
							<span class="text-danger"><?php echo form_error('monto');?></span>
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