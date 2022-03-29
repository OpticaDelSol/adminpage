<?php
setlocale(LC_NUMERIC  ,"US");
?>
<style>
.direct-chat-messages {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  transform: translate(0, 0);
  padding: 10px;
  height: 400px !important;
  overflow: auto;
}
</style>
<div class="row">
    <div class="col-md-12">
      	<div class="box box-solid box-default" style="border: 1px solid;">
            <div class="box-header with-border">
              	<h3 class="box-title">Detalles del Proveedor: <?php echo $proveedor['nombre']; ?></h3>
            </div>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="cuit" class="control-label">CUIT</label>
						<label class="control-label"><?php echo $proveedor['cuit']; ?></label>
					</div>
					<div class="col-md-6">
						<label for="nombre" class="control-label">Nombre:</label>
						<label class="control-label"><?php echo ($proveedor['nombre']); ?></label>
					</div>
					<div class="col-md-6">
						<label for="direccion" class="control-label">Direcci&oacute;n:</label>
						<label class="control-label"><?php echo ($proveedor['direccion']); ?></label>
					</div>
					<div class="col-md-6">
						<label for="localidad_id" class="control-label">Localidad:</label>
							<label class="control-label">
								<?php 
								foreach($all_localidad as $localidad)
								{
									if($localidad['id'] == $proveedor['localidad_id'])
									{
										echo $localidad['nombre'];
									}
								} 
								?>
							</label>
					</div>
					<div class="col-md-6">
						<label for="telefono1" class="control-label">Tel&eacute;fono&nbsp;1:</label>
						<label class="control-label"><?php echo ($proveedor['telefono1']); ?></label>
					</div>
					<div class="col-md-6">
						<label for="telefono2" class="control-label">Tel&eacute;fono&nbsp;2:</label>
						<label class="control-label"><?php echo ($proveedor['telefono2']); ?>" </label>
					</div>
				</div>
			</div>
		</div>
        
    <div class="box-footer clearfix">
    <a href="<?php echo site_url('proveedor/edit/'.$proveedor['id']); ?>" class="btn btn-danger btn-s"><span class="fa fa-pencil"></span> Editar</a>
    <a href="<?php echo site_url('documento/index_facturas/'.$proveedor['id']); ?>" class="btn btn-info btn-s"> Facturas</a>
    <a href="<?php echo site_url('documento/index_remitos/'.$proveedor['id']); ?>" class="btn btn-info btn-s"> Remitos</a>
    <a href="<?php echo site_url('pago_proveedor/listado_proveedor/'.$proveedor['id']); ?>" class="btn btn-info btn-s"> Lista de Pagos</a>
    

    
    <a href="<?php echo site_url('proveedor/'); ?>" class="btn btn-info btn-s"> Volver al listado</a>
     <a href="<?php echo site_url('recibo/nuevo_recibo'); ?>" class="btn btn-info btn-s">Cargar Recibo</a>
    </div>
    </div>
    
</div>
<div class="row">
    <div class="col-md-6">

       
    </div>
</div>
<div class="row">
    <div class="col-md-12">
<div class="box box-solid box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Saldos</h3>
            </div>
    

            <!-- /.box-header -->
            <div class="box-body">
                
     <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" id="tab-facturas">Facturas</a></li>
              <li><a href="#tab_2" data-toggle="tab" id="tab-remitos">Remitos</a></li>
              <li><a href="#tab_3" data-toggle="tab" id="tab-general">General</a></li>
            </ul>
                        
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                  
                <?php $this->load->view('proveedor/_balance_facturas'); ?>
          </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <?php $this->load->view('proveedor/_balance_remitos'); ?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <?php $this->load->view('proveedor/_balance_total'); ?>
              </div>
                  
                  
            

              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->

            
            
   
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->       
            
            
          </div>
        </div>
