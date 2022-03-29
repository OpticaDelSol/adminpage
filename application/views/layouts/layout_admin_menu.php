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
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url('dashboard/');?>">
                                <i class="fa fa-home"></i> <span>Pagina Inicial</span>
                            </a>
                        </li>
                        <li class="header">COMPRAS</li>
                        
                        

                        
                        <li>
                            <a href="<?php echo site_url('proveedor/index');?>">
                                <i class="fa fa-group"></i> <span>Proveedores</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('documento/index_facturas_gral/'); ?>">
                                <i class="fa fa-file"></i> <span>Facturas</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('documento/index_remitos_gral/'); ?>">
                                <i class="fa fa-file"></i> <span>Remitos</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('pago_proveedor/listado'); ?>">
                                <i class="fa fa-dollar"></i> <span>Pagos</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('recibo/listado_recibos'); ?>">
                                <i class="fa fa-file"></i> <span>Recibos</span>
                            </a>
                        </li>
                        <li class="header">VENTAS</li>
                        <li>
                            <a href="<?php echo site_url('documento/listado_documentos_ventas/F');?>">
                                <i class="fa fa-file"></i> <span>Facturas</span>
                            </a>
                        </li>		
                        <li>
                            <a href="<?php echo site_url('documento/listado_documentos_ventas/NC');?>">
                                <i class="fa fa-file"></i> <span>Notas de Cr&eacute;dito</span>
                            </a>
                        </li>		
                        <li>
                            <a href="<?php echo site_url('documento/listado_documentos_ventas/ND');?>">
                                <i class="fa fa-file"></i> <span>Notas de D&eacute;bito</span>
                            </a>
                        </li>		
                        <li>
                            <a href="<?php echo site_url('documento/listado_documentos_ventas/T');?>">
                                <i class="fa fa-file"></i> <span>Tickets</span>
                            </a>
                        </li>	
                        <li class="header">INFORMES</li>
<!--                        <li>
                            <a href="<?php echo site_url('informe/informe_iva');?>">
                                <i class="fa fa-file"></i> <span>Informe IVA</span>
                            </a>
                        </li>		
                        <li>
                            <a href="<?php echo site_url('documento/sel_date_iva_v');?>">
                                <i class="fa fa-file"></i> <span>Informe IVA Ventas</span>
                            </a>
                        </li>		-->
                        <li>
                            <a href="<?php echo site_url('informe/informe_periodo');?>">
                                <i class="fa fa-file"></i> <span>Informe Resumen</span>
                            </a>
                        </li>		
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>