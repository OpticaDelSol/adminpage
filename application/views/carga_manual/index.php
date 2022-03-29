<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Cargas Manuales Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('carga_manual/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Proveedor Cuenta Id</th>
						<th>Monto</th>
						<th>Fecha Alta</th>
						<th>Fecha Modif</th>
						<th>Comentario</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($cargas_manuales as $c){ ?>
                    <tr>
						<td><?php echo $c['id']; ?></td>
						<td><?php echo $c['proveedor_cuenta_id']; ?></td>
						<td><?php echo $c['monto']; ?></td>
						<td><?php echo $c['fecha_alta']; ?></td>
						<td><?php echo $c['fecha_modif']; ?></td>
						<td><?php echo $c['comentario']; ?></td>
						<td>
                            <a href="<?php echo site_url('carga_manual/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('carga_manual/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
