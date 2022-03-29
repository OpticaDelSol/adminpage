<style>
.direct-chat-messages {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  transform: translate(0, 0);
  padding: 10px;
  height: 450px;
  overflow: auto;
}
</style>
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid box-info">
            <div class="box-header">
                <h3 class="box-title">Listado de  <?php echo ($tipo_documento=="T" ? "Tickets" : 
                        ($tipo_documento=="NC"? "Notas de Cr&eacute;dito" : 
                        ($tipo_documento=="ND"? "Notas de D&eacute;bito" : "Facturas Ventas" ))
                        ); ?></h3>
                <div class="pull-right">
                    <a href="<?php echo site_url('documento/documento_ventas_add/').$tipo_documento ?>" class="btn btn-success">Agregar</a>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive direct-chat-messages">
                    <table class="table table-condensed table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style='background-color:black; color:white; text-align:center;'>Nro.</th>
                                <th style='background-color:black; color:white; text-align:center;'>Fecha</th>
                                <th style='background-color:black; color:white; text-align:center;'>Sucursal</th>
                                <?php if($tipo_documento != 'T') { ?><th style='background-color:black; color:white; text-align:center;'>Raz&oacute;n Social o Nombre</th><?php } ?>
                                <?php if($tipo_documento != 'T') { ?><th style='background-color:black; color:white; text-align:center;'>CUIT o DNI</th><?php } ?>
                                <th style='background-color:black; color:white; text-align:center;'>Valor Bruto</th>
                                <th style='background-color:black; color:white; text-align:center;'>IVA</th>
                                <th style='background-color:black; color:white; text-align:center;'>Valor Total</th>
                                <th style='background-color:black; color:white; text-align:center;'>Acciones</th>
                            </tr>
                        </thead>
                        <?php 
                        foreach($documentos as $d)
                        {
                            $bgcolor = ($d['anulado'] == 1 ? 'background-color: #FFA9A6;':'');
                        ?>
                        <tr>
                            <td style='text-align:center; <?php echo $bgcolor; ?>'><?php echo $d['id']; ?></td>
                            <td style='text-align:center; <?php echo $bgcolor; ?>'><?php echo $d['fecha_alta']; ?></td>
                            <td style='text-align:center; <?php echo $bgcolor; ?>'><?php echo $d['alias']; ?></td>
                            <?php if($tipo_documento != 'T') { ?><td style="<?php echo $bgcolor; ?>"><?php echo $d['razon_social_nombre']; ?></td><?php } ?>
                            <?php if($tipo_documento != 'T') { ?><td style="<?php echo $bgcolor; ?>"><?php echo $d['cuit_dni']; ?></td><?php } ?>
                            <td style="text-align:right; <?php echo $bgcolor; ?>"><?php echo number_format($d['monto_neto'],2,'.',''); ?></td>
                            <td style="text-align:right; <?php echo $bgcolor; ?>"><?php echo number_format($d['iva'],2,'.',''); ?></td>
                            <td style="text-align:right; <?php echo $bgcolor; ?>"><?php echo number_format($d['monto_total'],2,'.',''); ?></td>
                            <td style="text-align:center; <?php echo $bgcolor; ?>">
                                <!--<a href="<?php //echo site_url('') ?>" class="btn btn-success">Editar</a>-->
                                <a href="<?php echo site_url('documento/documento_ventas_detalle/').$d['id']; ?>" class="btn btn-success btn-flat">Detalle</a>
                                
                                <?php if($d['anulado'] ==0){?>
                                    <a href="<?php echo site_url('documento/documento_ventas_edit/').$d['id']; ?>" class="btn btn-warning btn-flat">Editar</a>
                                    <!--<a href="<?php // echo site_url('documento/anular/').$d['dto_id']; ?>" class="btn btn-danger btn-sm">Anular </a>-->
                                <?php } else { ?>
                                    <label class="label-danger">Anulado</label>
                                    <!--<a href="<?php // echo site_url('documento/anular/').$d['dto_id']; ?>" class="btn btn-default btn-sm">Restaurar </a>-->
                                <?php } ?>
                            </td>
                            
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="box-footer">
                <a href="<?php echo site_url('documento/documento_ventas_add/').$tipo_documento ?>" class="btn btn-success">Agregar</a>
                <a href="<?php echo site_url('/dashboard') ?>" class="btn btn-warning">Volver</a>
            </div>
        </div>
    </div>
</div>