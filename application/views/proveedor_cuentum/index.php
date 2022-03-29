<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Proveedor Cuenta Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('proveedor_cuentum/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Proveedor Id</th>
						<th>Fecha Modif</th>
						<th>Saldo</th>
						<th>Nro Cuenta</th>
						<th>Comentarios</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($proveedor_cuenta as $p){ ?>
                    <tr>
						<td><?php echo $p['id']; ?></td>
						<td><?php echo $p['proveedor_id']; ?></td>
						<td><?php echo $p['fecha_modif']; ?></td>
						<td><?php echo $p['saldo']; ?></td>
						<td><?php echo $p['nro_cuenta']; ?></td>
						<td><?php echo $p['comentarios']; ?></td>
						<td>
                            <a href="<?php echo site_url('proveedor_cuentum/edit/'.$p['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('proveedor_cuentum/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
