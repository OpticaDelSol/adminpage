<?php

$CI=& get_instance();

if(!$CI->session->userdata('user_name'))
{
    redirect('acceso/index');
}

$_user_name  = $CI->session->userdata('user_name'); 
$_details = $CI->session->userdata('details'); 
?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid box-default">
            <div class="box-header">
                <h3 class="box-title">
                Bienvenido/a <?php echo $_user_name; ?>
                </h3>
            </div>
            <div class="box-body">

<!-- BIG ICONS -->
<div class="col-md-12">
          <!-- Application buttons -->
          <div class="box box-solid box-default"> 
            <div class="box-body">
                
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Compras</a></li>
                  <li><a href="#tab_2" data-toggle="tab">Ventas</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">    

                    <a class="btn btn-app bg-teal " href="<?php echo site_url('proveedor/index');?>">
                        <i class="fa fa-users"></i> Proveedores
                    </a>
                    <a class="btn btn-app bg-blue" href="<?php echo site_url('documento/index_facturas_gral/'); ?>">
                        <i class="fa fa-file"></i> Facturas
                    </a>
                    <a class="btn btn-app bg-aqua" href="<?php echo site_url('documento/index_remitos_gral/'); ?>">
                        <i class="fa fa-file"></i> Remitos
                    </a>
                    <a class="btn btn-app bg-yellow" href="<?php echo site_url('pago_proveedor/listado'); ?>">
                        <i class="fa fa-dollar"></i> Pagos
                    </a>
                    <a class="btn btn-app bg-red" href="<?php echo site_url('recibo/listado_recibos'); ?>">
                        <i class="fa fa-file"></i> Recibos
                    </a>

                </div>
                  <div class="tab-pane" id="tab_2">    
                    <a class="btn btn-app bg-teal " href="<?php echo site_url('documento/listado_documentos_ventas/T');?>">
                        <i class="fa fa-users"></i> Tickets Z
                    </a>
                    <a class="btn btn-app bg-blue" href="<?php echo site_url('documento/listado_documentos_ventas/F');?>">
                        <i class="fa fa-file"></i> Facturas
                    </a>
                    <a class="btn btn-app bg-aqua" href="<?php echo site_url('documento/listado_documentos_ventas/NC');?>">
                        <i class="fa fa-file"></i> Notas de Cr&eacute;dito
                    </a>
                    <a class="btn btn-app bg-yellow" href="<?php echo site_url('documento/listado_documentos_ventas/ND');?>">
                        <i class="fa fa-dollar"></i> Notas de D&eacute;bito
                    </a>
                  </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
<!--END BIG ICONS-->
            
<section class="col-lg-12 connectedSortable ui-sortable">            

    
    
</section>          
            
        </div>
        </div>
    </div>
</div>
