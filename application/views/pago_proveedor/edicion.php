<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edici&oacute;n Pago Proveedor</h3>
            </div>
            <?php echo form_open('pago_proveedor/edicion/'.$pago_proveedor['id']); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="monto" class="control-label"><span class="text-danger">*</span>Monto</label>
                        <div class="form-group">
                            <input type="text" name="monto" value="<?php echo number_format (($this->input->post('monto') ? $this->input->post('monto') : $pago_proveedor['monto']),2,'.',''); ?>" class="form-control monto-total" id="monto" />
                                <span class="text-danger"><?php echo form_error('monto');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="comentarios" class="control-label">Comentarios</label>
                        <div class="form-group">
                                <input type="text" name="comentarios" value="<?php echo ($this->input->post('comentarios') ? $this->input->post('comentarios') : $pago_proveedor['comentarios']); ?>" class="form-control" id="comentarios" />
                        </div>
                    </div>
                </div>
                
                <div id="modos-parent">
                    
                    <?php 
                    foreach($modospago as $mp)
                    {
                    ?>
                        
                            <div class="box box-default">
                                <div class="box-header"><b>Modo De Pago</b></div>
                                <div class="box-body">
                            <div class="col-md-6">
                                <label class="control-label">Modo</label>
                                <div class="form-group">
                                    <select id="fkModoPago" name="fkModoPago[]" class="form-control">
                                                <option value="1" <?php echo(($mp['fkModoPago']==1)?"selected='selected'":""); ?>>EFECTIVO</option>
                                                <option value="2" <?php echo(($mp['fkModoPago']==2)?"selected='selected'":""); ?>>CHEQUE</option>
                                                <option value="3" <?php echo(($mp['fkModoPago']==3)?"selected='selected'":""); ?>>DEPOSITO</option>
                                                <option value="4" <?php echo(($mp['fkModoPago']==4)?"selected='selected'":""); ?>>OTRO</option>
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for='monto' class='control-label'>Monto</label>
                                    <div class='form-group'>
                                        <input type='number' step=".01" name='modo_monto[]' id="0" value='<?php echo number_format($mp['monto'],2,'.',''); ?>' class='form-control  monto-type modo-pago-monto' />
                                    </div>
                            </div>
                            </div></div>
                        
                    <?php
                    }
                    ?>
                    
                </div>
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