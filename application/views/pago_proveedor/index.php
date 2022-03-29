<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pagos Proveedor Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('pago_proveedor/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Proveedor Cuenta Id</th>
						<th>Monto</th>
						<th>Fecha Alta</th>
						<th>Comentarios</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($pagos_proveedor as $p){ ?>
                    <tr>
						<td><?php echo $p['id']; ?></td>
						<td><?php echo $p['proveedor_cuenta_id']; ?></td>
						<td><?php echo $p['monto']; ?></td>
						<td><?php echo $p['fecha_alta']; ?></td>
						<td><?php echo $p['comentarios']; ?></td>
						<td>
                            <a href="<?php echo site_url('pago_proveedor/edit/'.$p['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('pago_proveedor/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
