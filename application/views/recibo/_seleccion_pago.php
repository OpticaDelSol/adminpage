<?php if(sizeof($pagos)>0) { ?> 
<label for="fkPago" class="control-label">Pago</label>
<div class="form-group">
    <select name="fkPago" class="form-control select-pago" id="fkPago">
        
                <option value="-1">Seleccione ...</option>
                <?php 
                foreach($pagos as $pago)
                {
                        echo '<option value="'.$pago['id'].'" data-foo="'.$pago['monto'].'" >Nro.: '. $pago['id'].'&nbsp; Fecha: '.  $pago['fecha'] . '</option>';
                } 
                ?>
        </select>
</div>
<?php }else{ ?> No hay pagos <?php }