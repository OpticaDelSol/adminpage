<div class="row">
    <div  class="col-md-12">
        <div class="box box-solid box-default">
            <div class="box-header">
                <h3 class="box-title">Lista de Recibos</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('recibo/nuevo_recibo'); ?>" class="btn btn-success btn-sm">Cargar Recibo</a> 
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table  class="table table-hover">
                        <thead >
                            <th style="text-align: center;">Nro.</th>
                            <th style="text-align: center;">Fecha</th>
                            <th style="text-align: center;">Proveedor</th>
                            <th style="text-align: center;">Monto</th>
                            <th style="text-align: center;">Nro. Pago</th>
                            <th style="text-align: center;">Acciones</th>
                            <th style="text-align: center;"></th>
                        </thead>
                        <tbody>
                            <?php
                            if(!isset($recibos))
                            {
                                $recibos=[];
                            }
                            
                            foreach($recibos as $r)
                            {
                                
                            ?>
                            <tr>
                                <td style="text-align: center; <?php if( $r['anulado'] == '1') {echo " background-color: #f2dede !important;";} ?>">
                                    <?php echo $r['nro_recibo']; ?>
                                </td>
                                <td style="text-align: center; <?php if( $r['anulado'] == '1') {echo " background-color: #f2dede !important;";} ?>">
                                    <?php echo $r['fecha']; ?>
                                </td>
                                <td style="text-align: center; <?php if( $r['anulado'] == '1') {echo " background-color: #f2dede !important;";} ?>">
                                    <?php echo $r['proveedor']; ?>
                                </td>
                                <td style="text-align: right; <?php if( $r['anulado'] == '1') {echo " background-color: #f2dede !important;";} ?>">
                                    $&nbsp;<?php echo number_format($r['monto']); ?>
                                </td>
                                <td style="text-align: center; <?php if( $r['anulado'] == '1') {echo " background-color: #f2dede !important;";} ?>">
                                    <?php echo $r['fkPago']; ?>
                                </td>
                                <td style="text-align: center; <?php if( $r['anulado'] == '1') {echo " background-color: #f2dede !important;";} ?>">
                                    <a href="<?php echo site_url("recibo/detalle_recibo/".$r['id']); ?>" class="btn btn-default">Detalle</a>
                                </td>
                                <td style="text-align: center; <?php if( $r['anulado'] == '1') {echo " background-color: #f2dede !important;";} ?>">
                                    <?php if( $r['anulado'] == '1') {?>
                                    <label class="label-danger">ANULADO</label>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php
                            }
                            
                            ?>
                            
                        </tbody>
                        <tfoot></tfoot>
                    </table>
                    
                </div>
            </div>
            <div class="box-footer">
                <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="btn btn-default btn-sm">Volver</a>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>  
            </div>
        </div>
    </div>
</div>