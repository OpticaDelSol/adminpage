<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Nuevo Proveedor</h3>
            </div>
            <?php echo form_open('proveedor/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="localidad_id" class="control-label">Localidad</label>
						<div class="form-group">
                                                    <select id="localidad_id" name="localidad_id" class="form-control" value="1279">
								<option value="">Elija localidad</option>
								<?php 
								foreach($all_localidad as $localidad)
								{
									$selected = ($localidad['id'] == $this->input->post('localidad_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$localidad['id'].'" '.$selected.'>'.$localidad['nombre'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="cuit" class="control-label"><span class="text-danger">*</span>Cuit</label>
						<div class="form-group">
							<input type="text" name="cuit" value="<?php echo $this->input->post('cuit'); ?>" class="form-control" id="cuit" />
							<span class="text-danger"><?php echo form_error('cuit');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombre" class="control-label"><span class="text-danger">*</span>Nombre</label>
						<div class="form-group">
							<input type="text" name="nombre" value="<?php echo $this->input->post('nombre'); ?>" class="form-control" id="nombre" />
							<span class="text-danger"><?php echo form_error('nombre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="direccion" class="control-label">Direccion</label>
						<div class="form-group">
							<input type="text" name="direccion" value="<?php echo $this->input->post('direccion'); ?>" class="form-control" id="direccion" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telefono1" class="control-label">Telefono1</label>
						<div class="form-group">
							<input type="text" name="telefono1" value="<?php echo $this->input->post('telefono1'); ?>" class="form-control" id="telefono1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telefono2" class="control-label">Telefono2</label>
						<div class="form-group">
							<input type="text" name="telefono2" value="<?php echo $this->input->post('telefono2'); ?>" class="form-control" id="telefono2" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
                    <button type="submit" class="btn btn-success" id="btn-guardar">
            		<i class="fa fa-check"></i> Guardar
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
        <a href="<?php echo site_url('proveedor/'); ?>" class="btn btn-warning btn-sm">Cancelar</a>
    </div>
</div>
<script>
    var _url_cuit_validation = "<?php echo site_url("proveedor/validar_cuit/");?>";
</script>