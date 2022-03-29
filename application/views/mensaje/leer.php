<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Mensaje</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('mensaje/mensajes_recibidos'); ?>" class="btn btn-danger btn-sm">Cancelar</a> 
                </div>
            </div>
          	<div class="box-body">
          		<div class="row clearfix">
					
					<div class="col-md-12">
						<label for="id_receptor" class="control-label">Destinatario</label>
						<div class="form-group">
							<select name="id_receptor" class="form-control">
								<option value="">Elija un destinatario...</option>
								<?php 
								foreach($usuarios as $usuario)
								{
									$selected = ($usuario['id'] == $this->input->post('id_receptor')) ? ' selected="selected"' : "";

									echo '<option value="'.$usuario['id'].'" '.$selected.'>'.$usuario['Nombre'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					
					<div class="col-md-12">
						<label for="mensaje" class="control-label"><span class="text-danger">*</span>Mensaje</label>
						<div class="form-group">
							<textarea name="mensaje" class="form-control" id="mensaje"><?php echo $this->input->post('mensaje'); ?></textarea>
							<span class="text-danger"><?php echo form_error('mensaje');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
          	</div>

      	</div>
    </div>
</div>
