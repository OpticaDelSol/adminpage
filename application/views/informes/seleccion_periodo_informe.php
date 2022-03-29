<div class="row">
    <div class="col-md-12">
        <div class="box box-solid box-default">
            <div class="box-header">
                <h5>Informe IVA</h5>
                <h3>Seleccione el Periodo</h3>
            </div>
            <div class="box-body">

                
<div class="col-md-12">
<!-- Custom Tabs -->
<div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_1" data-toggle="tab">Selecci&oacute;n Periodo</a></li>
      <li><a href="#tab_2" data-toggle="tab">Selecci&oacute;n Rango Fechas</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab_1">
<?php $this->load->view("informes/_seleccion_periodo_contents"); ?>
    </div>
    <!-- /.tab-pane -->
    <div class="tab-pane" id="tab_2">
<?php $this->load->view("informes/_seleccion_rango_f_contents"); ?>
    </div>

    <!-- /.tab-pane -->
  </div>
  <!-- /.tab-content -->
</div>
<!-- nav-tabs-custom -->
</div>                
                
                </div>
            
        </div>
    </div>
</div>

<script>
    var _url="<?php echo site_url("documento/informe_iva_compras/"); ?>";
    var _url2="<?php echo site_url("documento/informe_iva_compras_p/"); ?>";
</script>