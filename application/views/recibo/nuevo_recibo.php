<div class="row">
    <div class="col-md-12">
        <div class="box">
            <?php echo validation_errors(); ?>
            <?php echo form_open('recibo/nuevo_recibo'); ?>
            <div class="box-header">
                <h3>Nuevo Recibo</h3>
            </div> 
            <div class="box-body">
                
                <div class="row clearfix">
                    
<!--                    FIELDS-->

                    <div class="col-md-12">
                            <label for="nro_recibo" class="control-label"><span class="text-danger">*</span>Nro. Recibo</label>
                            <div class="form-group">
                                <input type="text" autocomplete="off" name="nro_recibo" value="<?php echo $this->input->post('nro_recibo'); ?>" class="form-control" id="nro_recibo" />
                                    
                            </div>
                    </div>

                    <div class="col-md-12">
                            <label for="monto" class="control-label"><span class="text-danger">*</span>Monto</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                <input type="number" readonly="true" placeholder="Seleccione un pago..." step="0.01" name="monto" value="<?php echo $this->input->post('monto'); ?>" class="form-control monto-recibo" id="monto" >
                                    
                            </div>
                    </div>
                    <div class="col-md-6">
                                <label for="fecha" class="control-label">Fecha</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right datepicker" id="datepicker" name="fecha">
                                </div>
                            </div>
                    <div class="col-md-12">
                            <label class="control-label">Proveedor</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-group"></i></span>
                                <select id="fkProveedor" name="fkProveedor" class="form-control">
                                            <option value="-1">Seleccione ...</option>
                                            <?php 
                                            foreach($proveedores as $p)
                                            {
                                                    echo '<option value="'.$p['id'].'" > '. $p['nombre']. '</option>';
                                            } 
                                            ?>
                                    </select>
                            </div>
                    </div>
                                            

                    <div class="col-md-12" id="seleccion_pago">
                            
                    </div>

<!--                    END OF FIELDS-->
                </div>
               
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Guardar
            	</button>
            </div>
             <?php echo form_close(); ?>
        </div>
        <div class="box"><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="btn btn-danger btn-sm">Cancelar</a></div>
    </div>
</div>
<script>
var _url = "<?php echo site_url('recibo/get_pagos_proveedor/');?>";
</script>
