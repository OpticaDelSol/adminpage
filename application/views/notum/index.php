<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Nota Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('notum/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Proveedor Cuenta Id</th>
						<th>Fecha</th>
						<th>Mensaje</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($nota as $n){ ?>
                    <tr>
						<td><?php echo $n['id']; ?></td>
						<td><?php echo $n['proveedor_cuenta_id']; ?></td>
						<td><?php echo $n['fecha']; ?></td>
						<td><?php echo $n['mensaje']; ?></td>
						<td>
                            <a href="<?php echo site_url('notum/edit/'.$n['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('notum/remove/'.$n['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
