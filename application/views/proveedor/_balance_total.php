<div class="direct-chat-messages " id="balance-total">
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
                  $saldo = 0; $total_debe =0; $total_haber =0;
                  if(!isset($operaciones_gral)){$operaciones_gral = [];}
                  foreach($operaciones_gral as $op) { ?>
                  <tr>
                    <?php 
//                    $debe = ($op['tipo'] == 'PAGO' ? 0 : $op['monto']);
//                    $haber = ($op['tipo'] == 'PAGO' ? $op['monto'] : 0);
                    $debe = (($op['tipo'] == 'PAGO' || $op['detalle'] == 'NC') ? 0 : $op['monto']);
                    $haber = (($op['tipo'] == 'PAGO' || $op['detalle'] == 'NC') ? $op['monto'] : 0);
                    $saldo += $debe-$haber;
                    $total_debe += $debe;
                    $total_haber += $haber;
                    ?>
                    <td style='text-align:center'><?php  echo $op['id'] ?></td>
                    <td style='text-align:center'><?php  echo $op['codigo'] ?></td>
                    <td style='text-align:center'><?php echo $op['fecha'] ?></td>
                    <td style="text-align:center;">
                        <?php // if($op['tipo'] == 'PAGO') { ?>
                        <!--<a href="<?php ?>" class="label label-success"><?php // echo $op['tipo'] ?> </a>-->
                  <?php // } else { ?>
                        <!--<a href="<?php ?>" class="label label-warning"><?php // echo $op['tipo'] ?></a></td>-->
                  <?php // } ?>
                        
                    <?php if($op['tipo'] == 'PAGO'|| $op['detalle'] == 'NC') { ?>
                          <a href="<?php echo (($op['detalle'] == 'NC') ? site_url("recibo/detalle_factura/".$op['id']):'') ?>"  class="label label-success">
                              <?php echo (($op['detalle'] == 'NC') ? 'NOTA DE CREDITO': 'PAGO'); ?> 
                          </a>
                    <?php } else { ?>
                          <a 
                              href="<?php echo  site_url("documento/detalle_factura/".$op['id']); ?>"  
                              class="label <?php echo (($op['tipo'] == 'REMITO') ? 'label-info':'label-warning'); ?> ">
                                  <?php echo (($op['detalle'] == 'ND') ? 'NOTA DE DEBITO': $op['tipo']);  ?>
                          </a>
                    </td>
                    <?php } ?>
                        
                        
                    <td  style='text-align: right;'>
                     <span class="label label-warning"><?php echo  number_format($debe ,2,'.','')?></span>
                    </td>
                    <td  style='text-align: right;'>
                     <span class="label label-success"><?php echo  number_format($haber,2,'.','') ?></span>
                    </td>
                    <td  style='text-align: right;'> 
                     <span class="label label-info"><?php echo  number_format($saldo ,2,'.','')?></span>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                    <th colspan="2">Totales</th>
                    <th></th>
                    <th></th>
                    <th  style='text-align: right;'><?php echo  number_format($total_debe ,2,'.','')?></th>
                    <th  style='text-align: right;'><?php echo  number_format($total_haber,2,'.','') ?></th>
                    <th  style='text-align: right;'><?php echo  number_format($saldo,2,'.','') ?></th>
                  </tfoot> 
                  
                </table>
           </div>
</div>
<div class="box-footer clearfix">
   
    <a href="<?php echo site_url('recibo/nuevo_recibo'); ?>" class="btn btn-info btn-s">Cargar Recibo</a>
    
            </div>