<div class="row">
    <div class="col-md-12">
        <div class="box box-solid box-default">
            <div class="box-header">
                <h3 class="box-title">Listado de Pagos</h3>
            </div>
            <div class="box-body direct-chat-messages">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="background-color:black; color:white;">Nro.</th>
                            <th style="background-color:black; color:white;">Proveedor</th>
                            <th style="background-color:black; color:white;">Monto</th>
                            <th style="background-color:black; color:white;">Fecha</th>
                            <th style="background-color:black; color:white;">Comentarios</th>
                            <th style="background-color:black; color:white;">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php foreach($pagos_proveedor as $p){ ?>
                    <tr>
                        <td><?php echo $p['id']; ?></td>

                        <td>
                            <?php 
                            foreach($proveedores as $prov) { 
                            if($prov['id'] == $p['proveedor_id'])
                            {
                                echo $prov['nombre']; 
                                break;
                            }
                            }

                            ?>
                        </td>

                        <td><?php echo $p['monto']; ?></td>
                        <td><?php echo $p['fecha_alta']; ?></td>
                        <td><?php echo $p['comentarios']; ?></td>
                        <td>
                        <?php if($p['has_recibo']=='0') {?>
                        <a href="<?php 
                        echo site_url('pago_proveedor/edicion/'.$p['id']); 
                        ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                        <?php }?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
<div class="row"><div class="box"><div class="box-footer"> <a href="<?php echo site_url('dashboard/');  ?>" class="btn btn-info btn-sm">Volver</a>    </div></div></div> 