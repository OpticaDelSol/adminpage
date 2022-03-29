<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3>Seleccione Proveedor</h3>
            </div>
            <div class="box-body">
                
                <div class="form-group">
                    <select id="fkProveedor" name="fkProveedor" class="form-control"> 
                        <option>Seleccione ... </option>
                    <?php foreach($proveedores as $proveedor) { ?>

                        <?php echo '<option value="'.$proveedor['id'].'" > '. $proveedor['nombre']. '</option>';?>

                    <?php } ?>
                        <option value="_nuevo"> +  NUEVO PROVEEDOR  </option>
                     </select>
                </div>
                <div class="box-footer">

                </div>
                
            </div>
        </div>
    </div>
</div>
<script>
    
    var _url_nuevo_proveedor = '<?php echo site_url('proveedor/add'); ?>';
    
    var _url = '<?php 
    $path = '';
    switch ($referer)
    {
        case 'F' :
            $path =  'documento/add_factura/';
            break;
        case 'R' :
            $path =  'documento/add_remito/';
            break;
        default : 
            $path =  '';
            break;
    }
    
    echo site_url($path);
    ?>';

</script>