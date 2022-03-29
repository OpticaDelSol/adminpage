<style>
.direct-chat-messages {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  transform: translate(0, 0);
  padding: 10px;
  height: 500px !important;
  overflow: auto;
}
</style>
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid box-default">
            <div class="box-header">
                <h3 class="box-title">Lista de Proveedores</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('proveedor/add'); ?>" class="btn btn-success btn-s">Agregar</a> 
                </div>
                <div class="col-md-12">
                    <label  class="control-label">Filtro</label>
                    <input type="text" id="filtro-seleccion" class="form-control" placeholder="Ingrese valor de busqueda" value="">
                </div>
            </div>
            <div class="box-body direct-chat-messages">
                
                <div class="col-md-12">
                    <table  data-role = "table" class = "table ui-responsive">
                        <thead>
                        <tr>
                                                    <th>Nro.</th>
                                                    <th>Localidad</th>
                                                    <th>CUIT</th>
                                                    <th>Nombre</th>
                                                    <th>Direcci&oacute;n</th>
                                                    <th>Tel&eacute;fono&nbsp;1</th>
                                                    <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody id="prov-tbody">
                        <?php foreach($proveedor as $p){ ?>
                        <tr>
                                                    <td><?php echo $p['id']; ?></td>
                                                    <td>
                                                        <?php 
                                                            foreach($localidades as $localidad)
                                                            {
                                                                if($p['localidad_id'] == $localidad['id'])
                                                                {
                                                                    echo $localidad['nombre'];
                                                                }
                                                            }
                                                        ?>
                                                    </td>
                                                    <td><?php echo $p['cuit']; ?></td>
                                                    <td><?php echo $p['nombre']; ?></td>
                                                    <td><?php echo $p['direccion']; ?></td>
                                                    <td><?php echo $p['telefono1']; ?></td>
                                                    <td>
                                <a href="<?php echo site_url('proveedor/edit/'.$p['id']); ?>" class="btn btn-info btn-s"><span class="fa fa-pencil"></span> Editar</a> 
                                <a href="<?php echo site_url('proveedor/details/'.$p['id']); ?>" class="btn btn-warning btn-s"></span> Ficha</a>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row"><div class="box"><div class="box-footer"> <a href="<?php echo site_url('dashboard/');  ?>" class="btn btn-info btn-sm">Volver</a>    </div></div></div>