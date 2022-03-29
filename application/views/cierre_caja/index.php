<div class="row">
    <div class="col-md-12">
        <div class="box box-solid box-warning">
            <div class="box-header">
                <h3 class="box-title">Listado de cierres de caja</h3>
                <div class="pull-right"><a href="<?php echo site_url("cierreCaja/cierre_caja_add"); ?>" class="btn btn-default">Nuevo</a> </div>
            </div>
            <div class="box-body">
                <div class="direct-chat-messages">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sucursal</th>
                                <th>Fecha</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($cierres as $c){ ?>
                            <tr>
                                <td><?php echo $c['sucursal']; ?></td>
                                <td><?php echo $c['fecha'];?></td>
                                <td><a href="#" class="btn btn-info btn-sm">Detalles</a> </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer">
                
            </div>
        </div>
    </div>
</div>