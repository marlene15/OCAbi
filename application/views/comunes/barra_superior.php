	<!-- BEGIN HEADER -->   
    <div class="header navbar navbar-inverse navbar-fixed-top">
        <!-- BEGIN TOP NAVIGATION BAR -->
        <div class="navbar-inner">
            <div class="container-fluid">
                <!-- BEGIN LOGO -->
                <a class="brand" href="#">
                    <label>OCA</label>
                </a>
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="#" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="<?= base_url();?>assets/plantilla/img/menu-toggler.png" alt="" />
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->              
                <!-- BEGIN TOP NAVIGATION MENU -->              
                <ul class="nav pull-right">
                    <li class="dropdown user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">      
                            <i class="icon-user"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Pantalla Completa</a></li>
                            <li><a href="<?php echo site_url('login/logout'); ?>" ><i class="icon-key"></i> Salir</a></li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
                <!-- END TOP NAVIGATION MENU --> 
            </div>
        </div>
        <!-- END TOP NAVIGATION BAR -->
    </div>