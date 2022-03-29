<style>
.direct-chat-messages {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  transform: translate(0, 0);
  padding: 10px;
  height: 650px;
  overflow: auto;
}
</style>
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid box-info">
            <div class="box-header">
                <h3>Informe IVA Compras</h3>
            </div>
            <div class="box-body">
                <div class="col-md-12">
                    <div class="table-responsive direct-chat-messages">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="csv-exportable" style="text-align: center; vertical-align: middle; background-color:#162768; color:white;">Fecha</th>
                                    <th class="csv-exportable" style="text-align: center; vertical-align: middle; background-color:#162768; color:white;">Tipo Comprobante</th>
                                    <th class="csv-exportable" style="text-align: center; vertical-align: middle; background-color:#162768; color:white;">Pto. Venta</th>
                                    <th class="csv-exportable" style="text-align: center; vertical-align: middle; background-color:#162768; color:white;">Numero</th>
                                    <th class="csv-exportable" style="text-align: center; vertical-align: middle; background-color:#162768; color:white;">Nro. CUIT</th>
                                    <th class="csv-exportable" style="text-align: center; vertical-align: middle; background-color:#162768; color:white;">Apellido y Nombre o Denominaci&oacute;n</th>
                                    <th class="csv-exportable" style="text-align: center; vertical-align: middle; background-color:#162768; color:white;">Importe Neto Gravado IVA 21</th>
                                    <th class="csv-exportable" style="text-align: center; vertical-align: middle; background-color:#162768; color:white;">Importe Neto Gravado IVA 10.5</th>
                                    <th class="csv-exportable" style="text-align: center; vertical-align: middle; background-color:#162768; color:white;">Importe Neto Gravado IVA 27</th>
                                    <th class="csv-exportable" style="text-align: center; vertical-align: middle; background-color:#162768; color:white;">Importe Neto Gravado IVA 2.5</th>
                                    <th class="csv-exportable" style="text-align: center; vertical-align: middle; background-color:#162768; color:white;">IVA 21</th>
                                    <th class="csv-exportable" style="text-align: center; vertical-align: middle; background-color:#162768; color:white;">IVA 10.5</th>
                                    <th class="csv-exportable" style="text-align: center; vertical-align: middle; background-color:#162768; color:white;">IVA 27</th>
                                    <th class="csv-exportable" style="text-align: center; vertical-align: middle; background-color:#162768; color:white;">IVA 2.5</th>
                                    <th class="csv-exportable" style="text-align: center; vertical-align: middle; background-color:#162768; color:white;">Conceptor no Gravados</th>
                                    <th class="csv-exportable" style="text-align: center; vertical-align: middle; background-color:#162768; color:white;">Importe de Retenciones IVA</th>
                                    <th class="csv-exportable" style="text-align: center; vertical-align: middle; background-color:#162768; color:white;">Percepciones Ingresos Brutos</th>
                                    <th class="csv-exportable" style="text-align: center; vertical-align: middle; background-color:#162768; color:white;">Retenciones Ganancias</th>
                                    <th class="csv-exportable" style="text-align: center; vertical-align: middle; background-color:#162768; color:white;">Impuestos Internos</th>
                                    <th class="csv-exportable" style="text-align: center; vertical-align: middle; background-color:#162768; color:white;">Importe Total Facturado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $count =0;
                                foreach($facturas as $f){ 
                                    $class = 'csv-exportable';
                                    $style = 'text-align: right;  vertical-align: middle; background-color:' . ($count++ %2 ? '#E7E7E7':'#CCD9E7');
                                    ?>
                                <tr>
                                    
                                    <td class="<?php echo $class; ?>" style="<?php echo $style ?>"><?php echo $f['fecha_carga']; ?></td>
                                    <td class="<?php echo $class; ?>" style="<?php echo $style ?>"><?php echo $f['tipo_documento']; ?></td>
                                    <td class="<?php echo $class; ?>" style="<?php echo $style ?>"><?php echo $f['pto_vta']; ?></td>
                                    <td class="<?php echo $class; ?>" style="<?php echo $style ?>"><?php echo $f['codigo']; ?></td>
                                    <td class="<?php echo $class; ?>" style="<?php echo $style ?>"><?php echo $f['cuit']; ?></td>
                                    <td class="<?php echo $class; ?>" style="<?php echo $style ?>"><?php echo $f['nombre']; ?></td>
                                    <td class="<?php echo $class; ?>" style="<?php echo $style ?>"><?php echo number_format($f['IVA_21_NETO'],2,'.',''); ?></td>
                                    <td class="<?php echo $class; ?>" style="<?php echo $style ?>"><?php echo number_format($f['IVA_10_5_NETO'],2,'.',''); ?></td>
                                    <td class="<?php echo $class; ?>" style="<?php echo $style ?>"><?php echo number_format($f['IVA_27_NETO'],2,'.',''); ?></td>
                                    <td class="<?php echo $class; ?>" style="<?php echo $style ?>"><?php echo number_format($f['IVA_2_5_NETO'],2,'.',''); ?></td>
                                    <td class="<?php echo $class; ?>" style="<?php echo $style ?>"><?php echo number_format($f['IVA_21'],2,'.',''); ?></td>
                                    <td class="<?php echo $class; ?>" style="<?php echo $style ?>"><?php echo number_format($f['IVA_10_5'],2,'.',''); ?></td>
                                    <td class="<?php echo $class; ?>" style="<?php echo $style ?>"><?php echo number_format($f['IVA_27'],2,'.',''); ?></td>
                                    <td class="<?php echo $class; ?>" style="<?php echo $style ?>"><?php echo number_format($f['IVA_2_5'],2,'.',''); ?></td>
                                    <td class="<?php echo $class; ?>" style="<?php echo $style ?>"><?php echo number_format($f['conceptos_no_gravados'],2,'.',''); ?></td>
                                    <td class="<?php echo $class; ?>" style="<?php echo $style ?>"><?php echo number_format($f['RETENCIONES_IVA'],2,'.',''); ?></td>
                                    <td class="<?php echo $class; ?>" style="<?php echo $style ?>"><?php echo number_format($f['PERCEPCIONES'],2,'.',''); ?></td>
                                    <td class="<?php echo $class; ?>" style="<?php echo $style ?>"><?php echo number_format($f['RETENCIONES_GCIAS'],2,'.',''); ?></td>
                                    <td class="<?php echo $class; ?>" style="<?php echo $style ?>"><?php echo number_format($f['impuestos_internos'],2,'.',''); ?></td>
                                    <td class="<?php echo $class; ?>" style="<?php echo $style ?>"><?php echo number_format($f['TOTAL'],2,'.',''); ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <a href="<?php echo site_url("informe/informe_iva"); ?>" class="btn btn-success">Selecci&oacute;n de Fecha</a>
                <button type="button" class="btn btn-success" id="csv_download">Descargar XLS</button>
                <a href="<?php echo site_url("dashboard/"); ?>" class="btn btn-success">Inicio</a>
                
            </div>
        </div>
    </div>
</div>
