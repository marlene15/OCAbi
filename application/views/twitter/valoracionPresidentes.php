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
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<title>Valoración Presidente</title> 
	<?php $this->load->view('comunes/header'); ?>
    <script src="<?php echo base_url()?>assets/twitter/jsapi.js"></script> 
    <script src="<?php echo base_url()?>assets/twitter/tabsDL.js"></script>
    <script src="<?php echo base_url()?>assets/twitter/d3/d3.min.js"></script>
    <script src="<?php echo base_url()?>assets/twitter/d3/d3.js"></script> 
    <script src="<?php echo base_url()?>assets/twitter/d3/liquidFillGauge.js"></script>     
    <style>
        .liquidFillGaugeText { font-family: Helvetica; font-weight: bold; }
    </style>
    <!--Estilo para la gráfica de pastel-->
    <link href="<?= base_url();?>assets/twitter/d3/estilo_pastel.css" rel="stylesheet" type="text/css"/>
    <!--Para usar los contenedores widget-->
    <link href="<?php echo base_url()?>assets/bootstrap-widget/css/widget.css" rel="stylesheet" type="text/css"> 
</head>
<body class="page-header-fixed page-sidebar-closed">
    <!--Carga la barra superior-->
    <?php $this->load->view('comunes/barra_superior'); ?>

    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <?php $this->load->view('comunes/nav'); ?>
        <div class="page-content">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12" id="encabezado">
                        <h3 class="page-title" id="titulo">
                            Presidente Municipal <small>Actividad en Twitter</small>
                        </h3>
                        <ul class="breadcrumb" id="ul_menu">
                            <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo site_url('inicio') ?>">Home</a> 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-user"></i>
                                <a href="javascript:;">Candidato</a> 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-twitter"></i>
                                <a href="javascript:;">Twitter</a> 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-briefcase"></i>
                                <a href="<?php echo site_url('twitter/controlador_inicio/valoracion_Presidentes');?>">Presidente Municipal</a> 
                            </li>
                        </ul>
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <div class="portlet-body form well">
                        <!--Código para el tap de pestañas-->   
                        <div class="bs-example bs-example-tabs">
                            <ul class="nav nav-tabs" id="myTab">
                              <li class="active"><a data-toggle="tab" href="#barras1">Armería. Esperanza Alcaraz (PRI)</a></li>
                              <li class=""><a data-toggle="tab" href="#barras2">Colima. Héctor Insúa García (PAN)</a></li>
                              <li class=""><a data-toggle="tab" href="#barras3">Colima. Esmeralda Cárdenas (PVEM)</a></li>
                              <li class=""><a data-toggle="tab" href="#barras4">Colima. María Elena Abaroa (MC)</a></li>
                              <li class=""><a data-toggle="tab" href="#barras5">Colima. Oscar Valdovinos (PRI)</a></li>
                              <li class=""><a data-toggle="tab" href="#barras6">Comala. Salomón Salazar (PRI)</a></li>
                              <li class=""><a data-toggle="tab" href="#barras7">Comala. Mario Carrillo (PES)</a></li>
                              <li class=""><a data-toggle="tab" href="#barras8">Cuauhtémoc. Blanca Rocha (PRI-PVEM-PNA)</a></li>
                              <li class=""><a data-toggle="tab" href="#barras9">Manzanillo. Francisco Zepeda (PRI-PVEM-PNA)</a></li>
                              <li class=""><a data-toggle="tab" href="#barras10">Tecomán. Arturo García Arias (PRI-PVEM-PNA)</a></li>
                              <li class=""><a data-toggle="tab" href="#barras11">Villa de Á. Oswy Delgado (PRI-PVEM-PNA)</a></li>
                            </ul>
                              <div class="tab-content" id="myTabContent">
                                <!--Esperanza-->
                                <div id="barras1" class="tab-pane fade active in"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-comments-alt"></i>
                                                        <h3>Valoración de Comentarios</h3>                                                    
                                                    </div>
                                                    <div class="widget-content"> 
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <h3>Total: <?php echo $totalE; ?> comentarios</h3>
                                                                </div>
                                                            </div>
                                                        </div>                                          
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge1" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Positivos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge2" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Negativos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge3" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Neutros</strong></div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                            <br/>
                                                        </div>   
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-bar-chart"></i>
                                                        <h3>Menciones al día</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">   
                                                        <div id="chart_div"></div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Héctor-->
                                <div id="barras2" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-comments-alt"></i>
                                                        <h3>Valoración de Comentarios</h3>                                                    
                                                    </div>
                                                    <div class="widget-content"> 
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <h3>Total: <?php echo $totalH; ?> comentarios</h3>
                                                                </div>
                                                            </div>
                                                        </div>                                          
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge4" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Positivos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge5" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Negativos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge6" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Neutros</strong></div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                            <br/>
                                                        </div>   
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-bar-chart"></i>
                                                        <h3>Menciones al día</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">   
                                                        <div id="chart_div2"></div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Esmeralda-->
                                <div id="barras3" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-comments-alt"></i>
                                                        <h3>Valoración de Comentarios</h3>                                                    
                                                    </div>
                                                    <div class="widget-content"> 
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <h3>Total: <?php echo $totalES; ?> comentarios</h3>
                                                                </div>
                                                            </div>
                                                        </div>                                          
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge7" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Positivos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge8" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Negativos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge9" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Neutros</strong></div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                            <br/>
                                                        </div>   
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-bar-chart"></i>
                                                        <h3>Menciones al día</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">   
                                                        <div id="chart_div3"></div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                <!--Abaroa-->
                                <div id="barras4" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-comments-alt"></i>
                                                        <h3>Valoración de Comentarios</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">  
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <h3>Total: <?php echo $totalA; ?> comentarios</h3>
                                                                </div>
                                                            </div>
                                                        </div>                                         
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge10" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Positivos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge11" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Negativos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge12" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Neutros</strong></div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                            <br/>
                                                        </div>   
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-bar-chart"></i>
                                                        <h3>Menciones al día</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">   
                                                        <div id="chart_div4"></div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <!--Oscar-->
                                <div id="barras5" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-comments-alt"></i>
                                                        <h3>Valoración de Comentarios</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <h3>Total: <?php echo $totalO; ?> comentarios</h3>
                                                                </div>
                                                            </div>
                                                        </div>                                           
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge13" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Positivos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge14" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Negativos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge15" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Neutros</strong></div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                            <br/>
                                                        </div>   
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-bar-chart"></i>
                                                        <h3>Menciones al día</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">   
                                                        <div id="chart_div5"></div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>   

                                <!--salomon-->
                                <div id="barras6" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-comments-alt"></i>
                                                        <h3>Valoración de Comentarios</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <h3>Total: <?php echo $totalS; ?> comentarios</h3>
                                                                </div>
                                                            </div>
                                                        </div>                                           
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge16" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Positivos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge17" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Negativos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge18" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Neutros</strong></div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                            <br/>
                                                        </div>   
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-bar-chart"></i>
                                                        <h3>Menciones al día</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">   
                                                        <div id="chart_div6"></div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                <!--mario-->
                                <div id="barras7" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-comments-alt"></i>
                                                        <h3>Valoración de Comentarios</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">  
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <h3>Total: <?php echo $totalM; ?> comentarios</h3>
                                                                </div>
                                                            </div>
                                                        </div>                                         
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge19" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Positivos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge20" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Negativos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge21" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Neutros</strong></div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                            <br/>
                                                        </div>   
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-bar-chart"></i>
                                                        <h3>Menciones al día</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">   
                                                        <div id="chart_div7"> Mario Carrillo No tiene menciones</div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <!--blanca-->
                                <div id="barras8" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-comments-alt"></i>
                                                        <h3>Valoración de Comentarios</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">   
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <h3>Total: <?php echo $totalB; ?> comentarios</h3>
                                                                </div>
                                                            </div>
                                                        </div>                                        
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge22" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Positivos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge23" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Negativos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge24" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Neutros</strong></div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                            <br/>
                                                        </div>   
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-bar-chart"></i>
                                                        <h3>Menciones al día</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">   
                                                        <div id="chart_div8"></div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                <!--pico-->
                                <div id="barras9" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-comments-alt"></i>
                                                        <h3>Valoración de Comentarios</h3>                                                    
                                                    </div>
                                                    <div class="widget-content"> 
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <h3>Total: <?php echo $totalP; ?> comentarios</h3>
                                                                </div>
                                                            </div>
                                                        </div>                                          
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge25" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Positivos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge26" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Negativos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge27" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Neutros</strong></div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                            <br/>
                                                        </div>   
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-bar-chart"></i>
                                                        <h3>Menciones al día</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">   
                                                        <div id="chart_div9"></div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                <!--arturo-->
                                <div id="barras10" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-comments-alt"></i>
                                                        <h3>Valoración de Comentarios</h3>                                                    
                                                    </div>
                                                    <div class="widget-content"> 
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <h3>Total: <?php echo $totalAR; ?> comentarios</h3>
                                                                </div>
                                                            </div>
                                                        </div>                                          
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge28" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Positivos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge29" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Negativos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge30" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Neutros</strong></div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                            <br/>
                                                        </div>   
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-bar-chart"></i>
                                                        <h3>Menciones al día</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">   
                                                        <div id="chart_div10"></div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                <!--oswy-->
                                <div id="barras11" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-comments-alt"></i>
                                                        <h3>Valoración de Comentarios</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <h3>Total: <?php echo $totalOS; ?> comentarios</h3>
                                                                </div>
                                                            </div>
                                                        </div>                                           
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge31" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Positivos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge32" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Negativos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge33" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Neutros</strong></div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                            <br/>
                                                        </div>   
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-bar-chart"></i>
                                                        <h3>Menciones al día</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">   
                                                        <div id="chart_div11"></div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>                      

                            </div>
                        </div>  <!--Cierra div de los tabs-->                                            
                    </div>
                </div>              
            </div>
        </div>
    </div>

	<?php $this->load->view('comunes/footer'); ?> 

    <!--Datos de nacho-->
<script language="JavaScript">
    var config1 = liquidFillGaugeDefaultSettings();
    config1.circleColor = "#178BCA";
    config1.textColor = "#045681";
    config1.waveTextColor = "#81BEF7";
    config1.waveColor = "#58ACFA";
    config1.circleThickness = 0.15;
    config1.textVertPosition = 0.8;
    config1.waveAnimateTime = 1000;    
    config1.textSize = 0.75;
    config1.waveHeight = 0.05;    

    var config2 = liquidFillGaugeDefaultSettings();
    config2.circleColor = "#FF7777";
    config2.textColor = "#FF4444";
    config2.waveTextColor = "#FFAAAA";
    config2.waveColor = "#FFDDDD";
    config2.circleThickness = 0.15;
    config2.textVertPosition = 0.8;
    config2.waveAnimateTime = 500;
    config2.textSize = 0.75;
    config2.waveHeight = 0.05;    

    var config3 = liquidFillGaugeDefaultSettings();
    config3.circleColor = "#D4AB6A";
    config3.textColor = "#553300";
    config3.waveTextColor = "#805615";
    config3.waveColor = "#AA7D39";
    config3.circleThickness = 0.15;
    config3.textVertPosition = 0.8;
    config3.waveAnimateTime = 2000;
    config3.textSize = 0.75;
    config3.waveHeight = 0.15;   

    //Datos Esperanza
    loadLiquidFillGauge("fillgauge1", <?php echo $esperanzaP; ?>, config1);
    loadLiquidFillGauge("fillgauge2", <?php echo $esperanzaNe; ?>, config2);
    loadLiquidFillGauge("fillgauge3", <?php echo $esperanzaN; ?>, config3);
    //Datos Héctor
    loadLiquidFillGauge("fillgauge4", <?php echo $hectorP; ?>, config1);
    loadLiquidFillGauge("fillgauge5", <?php echo $hectorNe; ?>, config2);
    loadLiquidFillGauge("fillgauge6", <?php echo $hectorN; ?>, config3);
    //Datos Esmeralda
    loadLiquidFillGauge("fillgauge7", <?php echo $esmeraldaP; ?>, config1);
    loadLiquidFillGauge("fillgauge8", <?php echo $esmeraldaNe; ?>, config2);
    loadLiquidFillGauge("fillgauge9", <?php echo $esmeraldaN; ?>, config3);
    //Datos Abaroa
    loadLiquidFillGauge("fillgauge10", <?php echo $abaroaP; ?>, config1);
    loadLiquidFillGauge("fillgauge11", <?php echo $abaroaNe; ?>, config2);
    loadLiquidFillGauge("fillgauge12", <?php echo $abaroaN; ?>, config3);
    //Datos Oscar
    loadLiquidFillGauge("fillgauge13", <?php echo $oscarP; ?>, config1);
    loadLiquidFillGauge("fillgauge14", <?php echo $oscarNe; ?>, config2);
    loadLiquidFillGauge("fillgauge15", <?php echo $oscarN; ?>, config3);
    //Datos salomon
    loadLiquidFillGauge("fillgauge16", <?php echo $salomonP; ?>, config1);
    loadLiquidFillGauge("fillgauge17", <?php echo $salomonNe; ?>, config2);
    loadLiquidFillGauge("fillgauge18", <?php echo $salomonN; ?>, config3);
    //Datos mario
    loadLiquidFillGauge("fillgauge19", <?php echo $marioP; ?>, config1);
    loadLiquidFillGauge("fillgauge20", <?php echo $marioNe; ?>, config2);
    loadLiquidFillGauge("fillgauge21", <?php echo $marioN; ?>, config3);
    //Datos blanca
    loadLiquidFillGauge("fillgauge22", <?php echo $blancaP; ?>, config1);
    loadLiquidFillGauge("fillgauge23", <?php echo $blancaNe; ?>, config2);
    loadLiquidFillGauge("fillgauge24", <?php echo $blancaN; ?>, config3);
    //Datos pico
    loadLiquidFillGauge("fillgauge25", <?php echo $picoP; ?>, config1);
    loadLiquidFillGauge("fillgauge26", <?php echo $picoNe; ?>, config2);
    loadLiquidFillGauge("fillgauge27", <?php echo $picoN; ?>, config3);
    //Datos arturo
    loadLiquidFillGauge("fillgauge28", <?php echo $arturoP; ?>, config1);
    loadLiquidFillGauge("fillgauge29", <?php echo $arturoNe; ?>, config2);
    loadLiquidFillGauge("fillgauge30", <?php echo $arturoN; ?>, config3);
    //Datos oswy
    loadLiquidFillGauge("fillgauge31", <?php echo $oswyP; ?>, config1);
    loadLiquidFillGauge("fillgauge32", <?php echo $oswyNe; ?>, config2);
    loadLiquidFillGauge("fillgauge33", <?php echo $oswyN; ?>, config3);
</script>

    <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);    
        ////////Menciones de gobernadores
        <?php //esperanza @DipEsperanzaA
            $a = array();
            foreach ($esperanza as $esperanza) 
            {
                $a[] = array(
                    "fecha" => $esperanza->fecha,
                    "cantidad_menciones" => $esperanza->cantidad
                );
            } 
        ?>        
        <?php //héctor @hectorinsua
            $a2 = array();
            foreach ($hector as $hector) 
            {
                $a2[] = array(
                    "fecha" => $hector->fecha,
                    "cantidad_menciones" => $hector->cantidad
                );
            } 
        ?>
        <?php //esmeralda @EsmePresidenta
            $a3 = array();
            foreach ($esmeralda as $esmeralda) 
            {
                $a3[] = array(
                    "fecha" => $esmeralda->fecha,
                    "cantidad_menciones" => $esmeralda->cantidad
                );
            } 
        ?>
        <?php //abaroa @meabaroa
            $a4 = array();
            foreach ($abaroa as $abaroa) 
            {
                $a4[] = array(
                    "fecha" => $abaroa->fecha,
                    "cantidad_menciones" => $abaroa->cantidad
                );
            } 
        ?>
        <?php //oscar @OVPresidente
            $a5 = array();
            foreach ($oscar as $oscar) 
            {
                $a5[] = array(
                    "fecha" => $oscar->fecha,
                    "cantidad_menciones" => $oscar->cantidad
                );
            } 
        ?>
        <?php //salomón @salo_salazar1
            $a6 = array();
            foreach ($salomon as $salomon) 
            {
                $a6[] = array(
                    "fecha" => $salomon->fecha,
                    "cantidad_menciones" => $salomon->cantidad
                );
            } 
        ?>
        <?php //blanca @BlancaPRI2015
            $a7 = array();
            foreach ($blanca as $blanca) 
            {
                $a7[] = array(
                    "fecha" => $blanca->fecha,
                    "cantidad_menciones" => $blanca->cantidad
                );
            } 
        ?>
        <?php //pico @PicoZepeda
            $a8 = array();
            foreach ($pico as $pico) 
            {
                $a8[] = array(
                    "fecha" => $pico->fecha,
                    "cantidad_menciones" => $pico->cantidad
                );
            } 
        ?>
        <?php //arturo @DipArturoGarcia
            $a9 = array();
            foreach ($arturo as $arturo) 
            {
                $a9[] = array(
                    "fecha" => $arturo->fecha,
                    "cantidad_menciones" => $arturo->cantidad
                );
            } 
        ?>
        <?php //oswy @OswyDelgado
            $a10 = array();
            foreach ($oswy as $oswy) 
            {
                $a10[] = array(
                    "fecha" => $oswy->fecha,
                    "cantidad_menciones" => $oswy->cantidad
                );
            } 
        ?>
        ////////////////////////////////////////esperanza
        function drawChart() {
          var data = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Cantidad'],
              <?php for ($i=0; $i<count($a); $i++) {
                  ?>
                  ['<?php echo $a[$i]['fecha'] ?>', <?php echo $a[$i]['cantidad_menciones'] ?>],
              <?php } ?>
            ]
          );  
          var options = {
            title: '@DipEsperanzaA',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400,
            colors: ['red']
          };
          var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
          chart.draw(data, options);          
        }
        //Sirve para hacer la grafica responsiva
        var aspect = 1000 / 400,
          chart = $("#chart_div");
        $(window).on("resize", function() {   
            var targetWidth = chart.width();
            chart.attr("width", targetWidth);
            chart.attr("height", targetWidth / aspect);
            drawChart();
        });   

        ////////////////////////////////////////héctor
        function drawChart2() {
          var data = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Cantidad'],
              <?php for ($i=0; $i<count($a2); $i++) {
                  ?>
                  ['<?php echo $a2[$i]['fecha'] ?>', <?php echo $a2[$i]['cantidad_menciones'] ?>],
              <?php } ?>
            ]
          );  
          var options = {
            title: '@hectorinsua',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400
          };
          var chart = new google.visualization.ComboChart(document.getElementById('chart_div2'));
          chart.draw(data, options);          
        }
        //Sirve para hacer la grafica responsiva
        var aspect = 1000 / 400,
          chart = $("#chart_div2");
        $(window).on("resize", function() {   
            var targetWidth = chart.width();
            chart.attr("width", targetWidth);
            chart.attr("height", targetWidth / aspect);
            drawChart2();
        });     

        ////////////////////////////////////////esmeralda
        function drawChart3() {
          var data = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Cantidad'],
              <?php for ($i=0; $i<count($a3); $i++) {
                  ?>
                  ['<?php echo $a3[$i]['fecha'] ?>', <?php echo $a3[$i]['cantidad_menciones'] ?>],
              <?php } ?>
            ]
          );  
          var options = {
            title: '@EsmePresidenta',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400,
            colors: ['green']
          };
          var chart = new google.visualization.ComboChart(document.getElementById('chart_div3'));
          chart.draw(data, options);          
        }
        //Sirve para hacer la grafica responsiva
        var aspect = 1000 / 400,
          chart = $("#chart_div3");
        $(window).on("resize", function() {   
            var targetWidth = chart.width();
            chart.attr("width", targetWidth);
            chart.attr("height", targetWidth / aspect);
            drawChart3();
        });   

        ////////////////////////////////////////abaroa
        function drawChart4() {
          var data = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Cantidad'],
              <?php for ($i=0; $i<count($a4); $i++) {
                  ?>
                  ['<?php echo $a4[$i]['fecha'] ?>', <?php echo $a4[$i]['cantidad_menciones'] ?>],
              <?php } ?>
            ]
          );  
          var options = {
            title: '@meabaroa',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400,
            colors: ['#C8711A']
          };
          var chart = new google.visualization.ComboChart(document.getElementById('chart_div4'));
          chart.draw(data, options);          
        }
        //Sirve para hacer la grafica responsiva
        var aspect = 1000 / 400,
          chart = $("#chart_div4");
        $(window).on("resize", function() {   
            var targetWidth = chart.width();
            chart.attr("width", targetWidth);
            chart.attr("height", targetWidth / aspect);
            drawChart4();
        }); 

        ////////////////////////////////////////oscar
        function drawChart5() {
          var data = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Cantidad'],
              <?php for ($i=0; $i<count($a5); $i++) {
                  ?>
                  ['<?php echo $a5[$i]['fecha'] ?>', <?php echo $a5[$i]['cantidad_menciones'] ?>],
              <?php } ?>
            ]
          );  
          var options = {
            title: '@OVPresidente',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400,
            colors: ['red']
          };
          var chart = new google.visualization.ComboChart(document.getElementById('chart_div5'));
          chart.draw(data, options);          
        }
        //Sirve para hacer la grafica responsiva
        var aspect = 1000 / 400,
          chart = $("#chart_div5");
        $(window).on("resize", function() {   
            var targetWidth = chart.width();
            chart.attr("width", targetWidth);
            chart.attr("height", targetWidth / aspect);
            drawChart5();
        });

        ////////////////////////////////////////salomón
        function drawChart6() {
          var data = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Cantidad'],
              <?php for ($i=0; $i<count($a6); $i++) {
                  ?>
                  ['<?php echo $a6[$i]['fecha'] ?>', <?php echo $a6[$i]['cantidad_menciones'] ?>],
              <?php } ?>
            ]
          );  
          var options = {
            title: '@salo_salazar1',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400,
            colors: ['red']
          };
          var chart = new google.visualization.ComboChart(document.getElementById('chart_div6'));
          chart.draw(data, options);          
        }
        //Sirve para hacer la grafica responsiva
        var aspect = 1000 / 400,
          chart = $("#chart_div6");
        $(window).on("resize", function() {   
            var targetWidth = chart.width();
            chart.attr("width", targetWidth);
            chart.attr("height", targetWidth / aspect);
            drawChart6();
        });

        ////////////////////////////////////////blanca
        function drawChart8() {
          var data = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Cantidad'],
              <?php for ($i=0; $i<count($a7); $i++) {
                  ?>
                  ['<?php echo $a7[$i]['fecha'] ?>', <?php echo $a7[$i]['cantidad_menciones'] ?>],
              <?php } ?>
            ]
          );  
          var options = {
            title: '@BlancaPRI2015',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400,
            colors: ['red']
          };
          var chart = new google.visualization.ComboChart(document.getElementById('chart_div8'));
          chart.draw(data, options);          
        }
        //Sirve para hacer la grafica responsiva
        var aspect = 1000 / 400,
          chart = $("#chart_div8");
        $(window).on("resize", function() {   
            var targetWidth = chart.width();
            chart.attr("width", targetWidth);
            chart.attr("height", targetWidth / aspect);
            drawChart8();
        });

        ////////////////////////////////////////pico
        function drawChart9() {
          var data = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Cantidad'],
              <?php for ($i=0; $i<count($a8); $i++) {
                  ?>
                  ['<?php echo $a8[$i]['fecha'] ?>', <?php echo $a8[$i]['cantidad_menciones'] ?>],
              <?php } ?>
            ]
          );  
          var options = {
            title: '@PicoZepeda',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400,
            colors: ['red']
          };
          var chart = new google.visualization.ComboChart(document.getElementById('chart_div9'));
          chart.draw(data, options);          
        }
        //Sirve para hacer la grafica responsiva
        var aspect = 1000 / 400,
          chart = $("#chart_div9");
        $(window).on("resize", function() {   
            var targetWidth = chart.width();
            chart.attr("width", targetWidth);
            chart.attr("height", targetWidth / aspect);
            drawChart9();
        });

        ////////////////////////////////////////arturo
        function drawChart10() {
          var data = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Cantidad'],
              <?php for ($i=0; $i<count($a9); $i++) {
                  ?>
                  ['<?php echo $a9[$i]['fecha'] ?>', <?php echo $a9[$i]['cantidad_menciones'] ?>],
              <?php } ?>
            ]
          );  
          var options = {
            title: '@DipArturoGarcia',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400,
            colors: ['red']
          };
          var chart = new google.visualization.ComboChart(document.getElementById('chart_div10'));
          chart.draw(data, options);          
        }
        //Sirve para hacer la grafica responsiva
        var aspect = 1000 / 400,
          chart = $("#chart_div10");
        $(window).on("resize", function() {   
            var targetWidth = chart.width();
            chart.attr("width", targetWidth);
            chart.attr("height", targetWidth / aspect);
            drawChart10();
        });

        ////////////////////////////////////////oswy
        function drawChart11() {
          var data = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Cantidad'],
              <?php for ($i=0; $i<count($a10); $i++) {
                  ?>
                  ['<?php echo $a10[$i]['fecha'] ?>', <?php echo $a10[$i]['cantidad_menciones'] ?>],
              <?php } ?>
            ]
          );  
          var options = {
            title: '@OswyDelgado',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400,
            colors: ['red']
          };
          var chart = new google.visualization.ComboChart(document.getElementById('chart_div11'));
          chart.draw(data, options);          
        }
        //Sirve para hacer la grafica responsiva
        var aspect = 1000 / 400,
          chart = $("#chart_div11");
        $(window).on("resize", function() {   
            var targetWidth = chart.width();
            chart.attr("width", targetWidth);
            chart.attr("height", targetWidth / aspect);
            drawChart11();
        });
    </script>

    <!--Funcion para ajustar la grafica al expander el menú-->
      <script type="text/javascript">
        function recarga()
        {
          setTimeout(function(){
            drawChart();
            drawChart2();
            drawChart3();
            drawChart4();
            drawChart5();
            drawChart6();
            drawChart7();
            drawChart8();
            drawChart9();
            drawChart10();
            drawChart11();
          },100)    
          $('#chart_div').width('100%');
          $('#chart_div2').width('100%');
          $('#chart_div3').width('100%');
          $('#chart_div4').width('100%');
          $('#chart_div5').width('100%');
          $('#chart_div6').width('100%');
          $('#chart_div7').width('100%');
          $('#chart_div8').width('100%');
          $('#chart_div9').width('100%');
          $('#chart_div10').width('100%');
          $('#chart_div11').width('100%');
        }
      </script>
</body>
</html>

