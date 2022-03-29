<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Editar Proveedor</h3>
            </div>
			<?php echo form_open('proveedor/edit/'.$proveedor['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="localidad_id" class="control-label">Localidad</label>
						<div class="form-group">
							<select name="localidad_id" class="form-control">
								<option value="">select localidad</option>
								<?php 
								foreach($all_localidad as $localidad)
								{
									$selected = ($localidad['id'] == $proveedor['localidad_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$localidad['id'].'" '.$selected.'>'.$localidad['nombre'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="cuit" class="control-label"><span class="text-danger">*</span>Cuit</label>
						<div class="form-group">
							<input type="text" name="cuit" value="<?php echo ($this->input->post('cuit') ? $this->input->post('cuit') : $proveedor['cuit']); ?>" class="form-control" id="cuit" />
							<span class="text-danger"><?php echo form_error('cuit');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombre" class="control-label"><span class="text-danger">*</span>Nombre</label>
						<div class="form-group">
							<input type="text" name="nombre" value="<?php echo ($this->input->post('nombre') ? $this->input->post('nombre') : $proveedor['nombre']); ?>" class="form-control" id="nombre" />
							<span class="text-danger"><?php echo form_error('nombre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="direccion" class="control-label">Direccion</label>
						<div class="form-group">
							<input type="text" name="direccion" value="<?php echo ($this->input->post('direccion') ? $this->input->post('direccion') : $proveedor['direccion']); ?>" class="form-control" id="direccion" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telefono1" class="control-label">Telefono1</label>
						<div class="form-group">
							<input type="text" name="telefono1" value="<?php echo ($this->input->post('telefono1') ? $this->input->post('telefono1') : $proveedor['telefono1']); ?>" class="form-control" id="telefono1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telefono2" class="control-label">Telefono2</label>
						<div class="form-group">
							<input type="text" name="telefono2" value="<?php echo ($this->input->post('telefono2') ? $this->input->post('telefono2') : $proveedor['telefono2']); ?>" class="form-control" id="telefono2" />
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
<div class="row">
     <div class="box">
        <div class="box-footer">
            <div class="col-md-6">
            <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="btn btn-warning btn-sm">Cancelar</a>
            </div>
        </div>
             
    </div>
</div>