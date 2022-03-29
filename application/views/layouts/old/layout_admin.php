<?php

$CI=& get_instance();

if(!$CI->session->userdata('user_name'))
{
    redirect('acceso/index');
}

$_user_name  = $CI->session->userdata('user_name'); 
$_details = $CI->session->userdata('details'); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Optica del Sol Admin</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!--        Favicon-->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url('resources/img/_optica_del_sol_icon.ico');?>"/>
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
        
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>" />
        
        <link rel="stylesheet" href="<?php echo site_url('resources/css/sweetalert2.css');?>" />
        
        <link rel="stylesheet" href="<?php echo site_url('resources/css/toastr.min.css');?>" />
        
        <link rel="stylesheet" href="<?php echo site_url('resources/css/icheck-bootstrap.min.css');?>" />
        
        <link rel="stylesheet" href="<?php echo site_url('resources/css/owl.carousel.css');?>" />

    </head>
    
    <body class="hold-transition skin-yellow sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">Optica del Sol</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">Optica del Sol</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <?php if(!isset($mensajes)){ $mensajes = [];} ?>
              <span class="label label-success"><?php echo sizeof($mensajes); ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Tiene <?php echo sizeof($mensajes); ?> mensajes</li>
              <li>
                  <ul class="menu">
                  <?php foreach($mensajes as $mensaje) { ?>
                  
                      <li><!-- start message -->
                        <a href="#">

                          <h4>
                            <?php echo $mensaje['emisor']; ?>
                            <small><i class="fa fa-clock-o"></i> <?php echo $mensaje['fecha']; ?></small>
                          </h4>
                          <p><?php echo $mensaje['mensaje']; ?></p>
                        </a>
                      </li>
                      
                  <?php } if(sizeof($mensajes) == 0) { ?> No hay Mensajes <?php } ?>
                </ul>
              </li>
              <li class="footer"><a href="#">Ver Todos</a></li>
            </ul>
          </li>
                        <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?php echo $_user_name ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">

                                    <p>
                                        <?php echo $_user_name ?>
                                    </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="<?php echo site_url('acceso/logout');?>" class="btn btn-default btn-flat">Salir</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $_user_name ?></p>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                     <?php       
                    $data['_user_name']=$_user_name;
                     $this->load->view($_menu,$data);
//                    if(isset($_menu) && $_menu)
//                        $this->load->view($_menu);
                    ?> 
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>OPTICA DEL SOL 2019</strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Agregar the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <!-- DatePicker -->
        <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
        
        <script src="<?php echo site_url('resources/js/global.js');?>"></script>
        
        <script src="<?php echo site_url('resources/js/tempusdominus-bootstrap-4.min.js');?>"></script>
        
        <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        
        
        <script src="<?php echo site_url('resources/js/sweetalert2.js');?>"></script>
        
        <script src="<?php echo site_url('resources/js/toastr.min.js');?>"></script>
        
        

        <?php 
        if ( isset($js_to_load)){ 
            if(is_array($js_to_load)) {
                foreach($js_to_load as $js){ 
                    ?>
        
                    <script src="<?php echo site_url('resources/js/'.$js);?>"> </script>
        
            <?php } } else {?> 

                <script src="<?php echo site_url('resources/js/'.$js_to_load);?>"> </script>

        <?php }}?>
            
            <script>
            
            //Date picker
            $('#datepicker').each( function() { $(this).datetimepicker({locale:'es',format:'DD/MM/Y'}); } );
            
            
            </script>
        
    </body>
</html>
