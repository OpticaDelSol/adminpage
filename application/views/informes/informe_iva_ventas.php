<!-- 
3 columnas
-tipo comprobante
-pto venta
-nro comprobante

-->
<style>
    th{
        text-align: center;
        background-color: darkblue;
        color:lightgoldenrodyellow;
    }
    .direct-chat-messages{
        height: 500px;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid box-default">
            <div class="box-header">
                <h3 class="box-title">Informe IVA Ventas</h3>
            </div>
            <div class="box-body">
                <div class="col-md-12">
                    <?php if(sizeof($documentos)>0){ ?>
                    <div class="table-responsive direct-chat-messages">
                        <table class="table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Tipo Comp.</th>
                                    <th>Pto. Vta.</th>
                                    <th>Nro. Comp.</th>
                                    <th>Apellido y Nombre o Denominaci&oacute;n</th>
                                    <th>CUIT</th>
                                    <th>Importe Negro Gravado</th>
                                    <th>Importe IVA 21%</th>
                                    <th>Exento</th>
                                    <th>Iva Resp. No Inscripto</th>
                                    <th>Importe Total Facturado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $cur_sucursal='';
                                foreach($documentos as $d){
                                    if($cur_sucursal!=$d['alias']){
                                        $cur_sucursal=$d['alias'];
                                    
                                    ?>
                                <tr>
                                    <th style="text-align:center; background-color: black; color:white;" colspan="11">
                                    <?php echo $d['alias']; }?>
                                    </th>
                                </tr>
                                <?}?>
                                <tr>
                                    <td><?php echo $d['fecha_carga']; ?></td>
                                    <td style="text-align:center;" ><?php echo $d['tipo']; ?></td>
                                    <td style="text-align:center;" ><?php echo $d['pto_vta']; ?></td>
                                    <td style="text-align:center;" ><?php echo $d['codigo']; ?></td>
                                    <td><?php echo $d['razon_social_nombre']; ?></td>
                                    <td><?php echo $d['cuit_dni']; ?></td>
                                    <td style="text-align:right;"><?php echo '$&nbsp;'.number_format($d['monto_neto'],2,'.',''); ?></td>
                                    <td style="text-align:right;"><?php echo '$&nbsp;'.number_format($d['IVA_21'],2,'.',''); ?></td>
                                    <td style="text-align:right;"><?php echo '$&nbsp;'.number_format($d['exento'],2,'.',''); ?></td>
                                    <td style="text-align:right;"><?php echo '$&nbsp;'.number_format($d['iva_resp_no_insc'],2,'.',''); ?></td>
                                    <td style="text-align:right;"><?php echo '$&nbsp;'.number_format($d['monto_total'],2,'.',''); ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                
                            </tfoot>
                                
                        </table>
                    </div>
                    <?php }
                    else{
                        ?>
                    <div class="col-md-12">
                    <b>No se encontraron registros.</b>
                    </div>
                    <?php
                    }
?>
                </div>
            </div>
            <div class="box-footer">
                <a href="<?php echo site_url("documento/sel_date_iva_v"); ?>" class="btn btn-success">Selecci&oacute;n de Fecha</a>
                <button type="button" class="btn btn-success" id="csv_download">Descargar XLS</button>
                <a href="<?php echo site_url("dashboard/"); ?>" class="btn btn-success">Inicio</a>
                
            </div>
        </div>
    </div>
</div>
