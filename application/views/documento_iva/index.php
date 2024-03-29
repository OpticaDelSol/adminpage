<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Documento Iva Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('documento_iva/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Documento Id</th>
						<th>Monto</th>
						<th>Porcentaje</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($documento_iva as $d){ ?>
                    <tr>
						<td><?php echo $d['id']; ?></td>
						<td><?php echo $d['documento_id']; ?></td>
						<td><?php echo $d['monto']; ?></td>
						<td><?php echo $d['porcentaje']; ?></td>
						<td>
                            <a href="<?php echo site_url('documento_iva/edit/'.$d['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('documento_iva/remove/'.$d['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
