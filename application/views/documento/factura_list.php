<div class="row">
    <div class="col-md-12">
        <div class="box box-solid box-default">
            <div class="box-header">
                <h3 class="box-title">Listado de Facturas</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('documento/add_factura'); ?>" class="btn btn-success btn-sm">Nueva Factura</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="text-align: center; background-color: black; color:white;">Tipo</th>
                            <th style="text-align: center; background-color: black; color:white;">Codigo</th>
                            <!--<th style="text-align: center;">Monto Neto</th>-->
                            <th style="text-align: center; background-color: black; color:white;">Monto Total</th>
                            <th style="text-align: center; background-color: black; color:white;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($documentos as $d){ ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $d['tipo']; ?></td>
                            <td style="text-align: center;"><?php echo $d['codigo']; ?></td>
                            <!--<td style="text-align: right;"><?php //echo number_format($d['monto_neto'],2); ?></td>-->
                            <td style="text-align: right;"><?php echo number_format($d['monto_total'],2); ?></td>
                            <td style="text-align: center;">
                                <a href="<?php echo site_url('documento/edit_factura/'.((array_key_exists('doc_id',$d)) ? $d['doc_id'] : $d['id'])) ; ?>" class="btn btn-info"><span class="fa fa-pencil"></span> Editar</a> 
                                <a href="<?php echo site_url('documento/detalle_factura/'.((array_key_exists('doc_id',$d)) ? $d['doc_id'] : $d['id'])); ?>" class="btn btn-info"> Detalle</a> 
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
            <div class="box-footer"><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="btn btn-info"></span> Volver</a></div>
        </div>
    </div>
</div>
