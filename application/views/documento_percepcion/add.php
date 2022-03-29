<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Documento Percepcion Add</h3>
            </div>
            <?php echo form_open('documento_percepcion/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="documento_id" class="control-label">Documento</label>
						<div class="form-group">
							<select name="documento_id" class="form-control">
								<option value="">select documento</option>
								<?php 
								foreach($all_documentos as $documento)
								{
									$selected = ($documento['id'] == $this->input->post('documento_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$documento['id'].'" '.$selected.'>'.$documento['codigo'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="monto" class="control-label"><span class="text-danger">*</span>Monto</label>
						<div class="form-group">
							<input type="text" name="monto" value="<?php echo $this->input->post('monto'); ?>" class="form-control" id="monto" />
							<span class="text-danger"><?php echo form_error('monto');?></span>
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