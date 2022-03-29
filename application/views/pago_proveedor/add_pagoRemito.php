<div class="row">
   <div class="col-md-12">
      	<div  class="box box-info" style="border: 1px solid;">
            <div class="box-header with-border">
              	<h3 class="box-title">Agregar pago para el proveedor: <?php echo $proveedor['nombre']; ?></h3>
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
    <div class="col-md-12">
      	<div class="box box-info">
            <?php 
            $attributes = array('id' => 'form-pago');
            echo form_open('pago_proveedor/add_pagoRemito/'.$id_proveedor,$attributes); 
                ?>
          	<div class="box-body">
          		<div class="row clearfix">
                            <div class="col-md-6">
                                <label for="fecha" class="control-label">Fecha</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right dtp-fecha datepicker" id="datepicker" name="fecha">
                                </div>
                            </div>
					<div class="col-md-3">
						<label for="monto" class="control-label"><span class="text-danger">*</span>Monto</label>
						<div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input readonly="true" type="number" step=".01" name="monto" value="<?php echo $this->input->post('monto'); ?>" class="form-control  monto-type monto-total" id="monto" style="text-align: right;" />
							<span class="text-danger"><?php echo form_error('monto');?></span>
						</div>
					</div>
					<div class="col-md-12">
						<label for="comentarios" class="control-label">Comentarios</label>
						<div class="form-group">
							<input type="text" name="comentarios" value="<?php echo $this->input->post('comentarios'); ?>" class="form-control" id="comentarios" />
						</div>
					</div>
				</div>
                    <div id="modos-parent"></div>
			</div>
                
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Guardar
            	</button>
          	</div>
            <?php echo form_close(); ?>
            <?php $this->load->view('pago_proveedor/_add_modo_pago'); ?>
      	</div>
    </div>
</div>
<div class="row"><div class="box"><div class="box-footer"> <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="btn btn-danger btn-sm">Cancelar</a>    </div></div></div>