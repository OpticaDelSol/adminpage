<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url('resources/img/_optica_del_sol_icon.ico');?>"/>

    <title>OPTICA DEL SOL</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min_1.css');?>">
        
    <link rel="stylesheet" href="<?php echo site_url('resources/css/carousel.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('resources/css/owl.carousel.css');?>">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
        
  </head>
  <body>

    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse bg-blue-active"  style="background: rgba(0,0,0,0.8) !important;" >
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<!--      <a class="navbar-brand" href="#">Optica del Sol</a>-->
            
<div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('sitioWeb/'); ?>">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('sitioWeb/galeria'); ?>">Galer&iacute;a</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('sitioWeb/sucursales'); ?>">Sucursales</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('sitioWeb/aboutus'); ?>">Sobre Nosotros</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">F&aacute;brica <b>La Rosa</b></a>
          </li>
          
        </ul>
      </div>
<img class="img-responsive" src="<?php echo site_url('resources/img/LOGO_.png');   ?>" alt="Optica del Sol">
      
    </nav>
      
      <?php
      $this->load->view($_view);
      ?>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="<?php echo site_url('resources/js/bootstrap.min_1.js');?>"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo site_url('resources/js/holder.min.js');?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo site_url('resources/js/ie10-viewport-bug-workaround.js');?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script src="<?php echo site_url('resources/js/owl.carousel.min.js');?>"></script>
    
    <?php 
    if(isset($js_to_load)){
    foreach($js_to_load as $js)
    {
       ?>
    <script src="<?php echo site_url('resources/js/').$js;?>"></script>
    <?php
    }}
    ?>
  </body>
</html>
