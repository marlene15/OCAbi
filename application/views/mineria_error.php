<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.2
Version: 1.4
Author: KeenThemes
Website: http://www.keenthemes.com/preview/?theme=metronic
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<title>Inicio</title> 
	<?php $this->load->view('comunes/header'); ?>
    <style type="text/css">     
        #titulo_proyecto{
            font-family: 'Museo';
            font-size: 70px;
        }
        #logo{
          width: 340px;
          height: 200px;
        }
    </style>
</head>
<body class="page-header-fixed page-sidebar-closed">
    <!--Carga la barra superior-->
    <?php $this->load->view('comunes/barra_superior'); ?>

    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <?php $this->load->view('comunes/nav'); ?>
        <div class="page-content">
            <div class="container-fluid">                
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">

                    <div class="row-fluid">   
                        <div class="span12">
                            <div class="span6">
                                <br/><br/><br/>
                                <center>
                                    <img src="<?php echo base_url()?>assets/imagenes/warning.png" class="img-responsive center-block" height="400" width="400">                          
                                </center>
                            </div>
                            <div class="span6">
                                <center>
                                    <img src="<?php echo base_url()?>assets/imagenes/noDisponible.png" class="img-responsive center-block" height="600" width="600">                          
                                </center>
                            </div>
                        </div> 
                    </div> 

                    <div class="row-fluid">  
                        <div class="span12">
                            <center>
                                <img src="<?php echo base_url()?>assets/imagenes/logon.jpg" class="img-responsive center-block" height="400" width="400">                          
                            </center>
                            <br/><br/>
                        </div>
                    </div>

                </div>              
            </div>
        </div>
    </div>

	<?php $this->load->view('comunes/footer'); ?> 
</body>
</html>