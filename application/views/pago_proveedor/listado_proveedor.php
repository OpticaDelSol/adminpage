<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header">
                <h3>Lista de Pagos al proveedor: <b><?php echo $proveedor['nombre'] ?></b></h3>
            </div>
            <div class="box-body " style="overflow-y: scroll;">
                <div class="table-responsive">
                    <table class="table table-condensed "  style="border-collapse:collapse;">
                        <thead>
                            <tr>
                                <th></th>
                                <th style="text-align: center;">Nro. Pago</th>
                                <th style="text-align: center;">Fecha</th>
                                <th style="text-align: center;">Monto</th>
                                <th style="text-align: center;">Recibo</th>
                                <th style="text-align: center;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $continue = 0;
                            while($continue < sizeof($pagos))
                            {
                                $p = $pagos[$continue];
                            ?>
                            <tr  data-toggle="collapse" data-target=".row-<?php echo $p['id']; ?>" class="main-row">
                                <td style="background-color: #E7E7E7"><span><i class="fa fa-plus"></i></span></td>
                                <td style="background-color: #E7E7E7; text-align: center;"><b><?php echo $p['id']; ?></b></td>
                                <td style="background-color: #E7E7E7; text-align: center;"><b><?php echo $p['fecha_alta']; ?></b></td>
                                <td style="background-color: #E7E7E7; text-align: right;"><b><?php echo '$'. number_format($p['monto_total'],2,'.',''); ?></b></td>
                                <td style="background-color: #E7E7E7"><?php echo ''; // echo $p['recibo']; ?></td>
                                <td style="background-color: #E7E7E7; text-align: center;"><a href="<?php echo site_url('pago_proveedor/edicion/'.$p['id']);?>" class="btn btn-info">Editar</a></td>
                            </tr>
                                <tr class='collapse row-<?php echo $p['id']; ?>'>
                                    <th style="text-align: center; background-color: #E7E7E7" colspan="3" class='hiddenRow' ><div class='collapse row-<?php echo $p['id']; ?>'>Modos de Pago</div></th>
                                    <th style="text-align: center; background-color: #E7E7E7" colspan="3" class='hiddenRow' ><div class='collapse row-<?php echo $p['id']; ?>'>Monto</div></th>
                                </tr>
                                <?php 
                                $id_pago = $pagos[$continue]['id'];
                                while($continue < sizeof($pagos) && $id_pago == $pagos[$continue]['id'])
                                {
                                    $_p = $pagos[$continue];
                                    $continue++;

                                ?>
                                    <tr class='collapse row-<?php echo $_p['id']; ?>'>
                                        <td colspan="3" class='hiddenRow' style="text-align: center;" ><div class='collapse row-<?php echo $_p['id']; ?>'><?php echo $_p['modo']; ?></div></td>
                                        <td colspan="3" class='hiddenRow' style="text-align: center;"  ><div class='collapse row-<?php echo $_p['id']; ?>'><?php echo '$'. number_format($_p['monto'],2,'.',''); ?></div></td>
                                       
                                    </tr>
                                <?php
                                } 
                                ?>
                            <?php 
                            }?>
                        </tbody>
                        <tfoot>
                            
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="box-footer">
                
            </div>
        </div>
    </div>
</div>
<div class="row"> 
    <div class="box" > 
        <div class="box-footer"> 
           
            <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="btn btn-info btn-sm">Volver</a>       
        </div> 
    </div> 
</div>
