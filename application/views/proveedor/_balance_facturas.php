<?php
setlocale(LC_ALL   ,"US");
?>
<div class="direct-chat-messages" id="balance-facturas">
    <div class="table-responsive">
        <table class="table no-margin">
          <thead>
          <tr>
            <th style="text-align: center">ID</th>
            <th style="text-align: center">Nro.</th>
            <th style="text-align: center">Fecha</th>
            <th style="text-align: center">Detalle</th>
            <th style="text-align: right">Debe</th>
            <th style="text-align: right">Haber</th>
            <th style="text-align: right">Saldo</th>
          </tr>
          </thead>
          <tbody>
          <?php 
          setlocale(LC_ALL   ,"US");
          $saldo = 0; $total_debe =0; $total_haber =0;
          if(!isset($operaciones_factura)){$operaciones_factura = [];}
          $to_hide = sizeof($operaciones_factura); 
          foreach($operaciones_factura as $op) { ?>
          <tr>
            <?php 
            $debe = (($op['tipo'] == 'PAGO' || $op['detalle'] == 'NC') ? 0 : $op['monto']);
            $haber = (($op['tipo'] == 'PAGO' || $op['detalle'] == 'NC') ? $op['monto'] : 0);
            $saldo += $debe-$haber;
            $total_debe += $debe;
            $total_haber += $haber;
            ?>
            <td style='text-align: center;'><?php  echo $op['id'] ?></td>
            <td style='text-align: center;'><?php  echo $op['codigo'] ?></td>
            <td style='text-align: center;'><?php echo $op['fecha'] ?></td>
            <td style="text-align:center;">
                <?php if($op['tipo'] == 'PAGO'|| $op['detalle'] == 'NC') { ?>
                <a href="<?php echo (($op['detalle'] == 'NC') ? site_url("recibo/detalle_factura/".$op['id']):'') ?>"  class="label label-success">
                    <?php echo (($op['detalle'] == 'NC') ? 'NOTA DE CREDITO': 'PAGO'); ?> 
                </a>
          <?php } else { ?>
                <a href="<?php echo  site_url("documento/detalle_factura/".$op['id']) ?>"  class="label label-warning"><?php echo (($op['detalle'] == 'ND') ? 'NOTA DE DEBITO': 'FACTURA');  ?></a></td>
          <?php } ?>
            <td style='text-align: right;'>
             <span class="label label-warning"><?php echo  ($debe==0? '' :'$&nbsp' .  number_format($debe ,2,'.','')) ?></span>
            </td>
            <td style='text-align: right;'>
             <span class="label label-success"><?php echo ($haber==0? '' : '$&nbsp' .  number_format($haber ,2,'.','')) ?></span>
            </td>
            <td style='text-align: right;'>
             <span class="label label-info"><?php echo '$&nbsp' .  number_format($saldo ,2,'.','')?></span>
            </td>
          </tr>
          <?php } ?>
          </tbody>
          <tfoot>
          <th colspan="2">Totales</th>
            <th></th>
            <th></th>
            <th style='text-align: right;'><?php echo '$&nbsp' . number_format( $total_debe ,2,'.','')?></th>
            <th style='text-align: right;'><?php echo '$&nbsp' . number_format( $total_haber ,2,'.','')?></th>
            <th style='text-align: right;'><?php echo '$&nbsp' . number_format( $saldo ,2,'.','') ?></th>
          </tfoot> 
        </table>
    </div>
</div>
<div class="box-footer clearfix">
    <a href="<?php echo site_url('documento/add_factura/'.$proveedor['id']); ?>" class="btn btn-warning btn-s"> Agregar Factura</a>
    <a href="<?php echo site_url('pago_proveedor/add_pagoFactura/'.$proveedor['id']); ?>" class="btn btn-info btn-s"> Agregar Pago</a>
    <a href="<?php echo site_url('recibo/nuevo_recibo'); ?>" class="btn btn-info btn-s">Cargar Recibo</a>
</div>
            <!-- /.box-footer -->