<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Documentos Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('documento/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Tipo</th>
						<th>Proveedor Cuenta Id1</th>
						<th>Codigo</th>
						<th>Monto Neto</th>
						<th>Monto Total</th>
						<th>Fecha Carga</th>
						<th>Fecha Modif</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($documentos as $d){ ?>
                    <tr>
						<td><?php echo $d['id']; ?></td>
						<td><?php echo $d['tipo']; ?></td>
						<td><?php echo $d['proveedor_cuenta_id1']; ?></td>
						<td><?php echo $d['codigo']; ?></td>
						<td><?php echo $d['monto_neto']; ?></td>
						<td><?php echo $d['monto_total']; ?></td>
						<td><?php echo $d['fecha_carga']; ?></td>
						<td><?php echo $d['fecha_modif']; ?></td>
						<td>
                            <a href="<?php echo site_url('documento/edit/'.$d['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('documento/remove/'.$d['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
            <div class="box-footer">
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>
            </div>
        </div>
    </div>
</div>
