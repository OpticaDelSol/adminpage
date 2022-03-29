<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Usuario Add</h3>
            </div>
            <?php echo form_open('usuario/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
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
						<label for="permisos" class="control-label"><span class="text-danger">*</span>Permisos</label>
						<div class="form-group">
							<input type="text" name="permisos" value="<?php echo $this->input->post('permisos'); ?>" class="form-control" id="permisos" />
							<span class="text-danger"><?php echo form_error('permisos');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha_alta" class="control-label">Fecha Alta</label>
						<div class="form-group">
							<input type="text" name="fecha_alta" value="<?php echo $this->input->post('fecha_alta'); ?>" class="has-datetimepicker form-control" id="fecha_alta" />
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