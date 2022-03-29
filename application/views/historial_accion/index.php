<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Historial Accion Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('historial_accion/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Accion Id</th>
						<th>Usuario Id</th>
						<th>Tipo Accion</th>
						<th>Detalle</th>
						<th>Fecha</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($historial_accion as $h){ ?>
                    <tr>
						<td><?php echo $h['id']; ?></td>
						<td><?php echo $h['accion_id']; ?></td>
						<td><?php echo $h['usuario_id']; ?></td>
						<td><?php echo $h['tipo_accion']; ?></td>
						<td><?php echo $h['detalle']; ?></td>
						<td><?php echo $h['fecha']; ?></td>
						<td>
                            <a href="<?php echo site_url('historial_accion/edit/'.$h['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('historial_accion/remove/'.$h['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
