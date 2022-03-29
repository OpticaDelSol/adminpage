<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Mensajes Recibidos</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th scope="col">Fecha</th>
						<th scope="col">Emisor</th>
						<th scope="col">Acciones</th>
                    </tr>
                    <?php foreach($mensajes as $m){ ?>
                    <tr>
						<th scope="row"><?php echo $m['fecha']; ?></th>
						<td><?php echo $m['emisor']; ?></td>
						<td>
                            <a href="<?php echo site_url('localidad/edit/'.$l['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Leer mensaje</a> 
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
