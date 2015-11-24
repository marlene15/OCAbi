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
	<title>Valoración Dip. Locales</title> 
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
                            Diputado Local <small>Actividad en Twitter</small>
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
                                <a href="<?php echo site_url('twitter/controlador_inicio/valoracion_DipLocales');?>">Diputados Locales</a> 
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
                              <li class="active"><a data-toggle="tab" href="#barras1">Distrito 1. Hilda Ceballos (PRI)</a></li>
                              <li><a data-toggle="tab" href="#barras2">Distrito 1. Yadira Carrillo (PNA)</a></li>
                              <li><a data-toggle="tab" href="#barras3">Distrito 2. Guillermo Rangel (PNA)</a></li>
                              <li><a data-toggle="tab" href="#barras4">Distrito 3. AlmaDeliaArreolaCruz (PRI)</a></li>
                              <li><a data-toggle="tab" href="#barras5">Distrito 4. Janeth Paz (PAN)</a></li>
                              <li><a data-toggle="tab" href="#barras6">Distrito 4. Juanita Andrés (PRI)</a></li>
                              <li><a data-toggle="tab" href="#barras7">Distrito 5. Lupe Benavides (PRI-PVEM-PNAL)</a></li>
                              <li><a data-toggle="tab" href="#barras8">Distrito 6. Octavio Tintos (PRI-PVEM-PNAL)</a></li>
                              <li><a data-toggle="tab" href="#barras9">Distrito 7. Sara Cernas (PRD)</a></li>
                              <li><a data-toggle="tab" href="#barras10">Distrito 8. Meyly Meyly (PAN)</a></li>
                              <li><a data-toggle="tab" href="#barras11">Distrito 8. Héctor Magaña (PRI-PVEM-PNAL)</a></li>
                              <li><a data-toggle="tab" href="#barras12">Distrito 10. Juan Carlos Pinto (PRI-PVEM-PNAL)</a></li>
                              <li><a data-toggle="tab" href="#barras13">Distrito 11. Armida Núñez (PRI-PVEM-PNAL)</a></li>
                              <li><a data-toggle="tab" href="#barras14">Distrito 12. Martha Sosa (PAN)</a></li>
                            </ul>
                              <div class="tab-content" id="myTabContent">
                                <!--Hilda-->
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
                                                                    <h3>Total: <?php echo $totalH; ?> comentarios</h3>
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
                                <!--Yadira-->
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
                                                                    <h3>Total: <?php echo $totalY; ?> comentarios</h3>
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
                                                        <div id="chart_div2">Yadira Carrillo No tiene menciones</div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Guillermo-->
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
                                                                    <h3>Total: <?php echo $totalG; ?> comentarios</h3>
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

                                <!--Alma-->
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

                                <!--janeth-->
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
                                                                    <h3>Total: <?php echo $totalJ; ?> comentarios</h3>
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
                                                        <div id="chart_div5">Janeth Paz No tiene menciones</div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <!--juanita-->
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
                                                                    <h3>Total: <?php echo $totalJU; ?> comentarios</h3>
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

                                <!--lupe benavides-->
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
                                                                    <h3>Total: <?php echo $totalL; ?> comentarios</h3>
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
                                                        <div id="chart_div7"></div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <!--octavio-->
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
                                                                    <h3>Total: <?php echo $totalO; ?> comentarios</h3>
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

                                <!--sara-->
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
                                                                    <h3>Total: <?php echo $totalS; ?> comentarios</h3>
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

                                <!--meyly-->
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
                                                                    <h3>Total: <?php echo $totalM; ?> comentarios</h3>
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
                                                        <div id="chart_div10">Meyly No tiene menciones</div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>   

                                <!--hector-->
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
                                                                    <h3>Total: <?php echo $totalHE; ?> comentarios</h3>
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

                                <!--juan-->
                                <div id="barras12" class="tab-pane fade"> 
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
                                                                    <h3>Total: <?php echo $totalJUA; ?> comentarios</h3>
                                                                </div>
                                                            </div>
                                                        </div>                                         
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge34" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Positivos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge35" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Negativos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge36" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
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
                                                        <div id="chart_div12"></div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <!--armida-->
                                <div id="barras13" class="tab-pane fade"> 
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
                                                                        <svg id="fillgauge37" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Positivos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge38" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Negativos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge39" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
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
                                                        <div id="chart_div13"></div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                <!--martha-->
                                <div id="barras14" class="tab-pane fade"> 
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
                                                                    <h3>Total: <?php echo $totalMAR; ?> comentarios</h3>
                                                                </div>
                                                            </div>
                                                        </div>                                          
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge40" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Positivos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge41" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Negativos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge42" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
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
                                                        <div id="chart_div14"></div>
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

    //Datos Hilda
    loadLiquidFillGauge("fillgauge1", <?php echo $hildaP; ?>, config1);
    loadLiquidFillGauge("fillgauge2", <?php echo $hildaNe; ?>, config2);
    loadLiquidFillGauge("fillgauge3", <?php echo $hildaN; ?>, config3);
    //Datos Yadira
    loadLiquidFillGauge("fillgauge4", <?php echo $yadiraP; ?>, config1);
    loadLiquidFillGauge("fillgauge5", <?php echo $yadiraNe; ?>, config2);
    loadLiquidFillGauge("fillgauge6", <?php echo $yadiraN; ?>, config3);
    //Datos Guillermo
    loadLiquidFillGauge("fillgauge7", <?php echo $guillermoP; ?>, config1);
    loadLiquidFillGauge("fillgauge8", <?php echo $guillermoNe; ?>, config2);
    loadLiquidFillGauge("fillgauge9", <?php echo $guillermoN; ?>, config3);
    //Datos Alma Delia
    loadLiquidFillGauge("fillgauge10", <?php echo $almaP; ?>, config1);
    loadLiquidFillGauge("fillgauge11", <?php echo $almaNe; ?>, config2);
    loadLiquidFillGauge("fillgauge12", <?php echo $almaN; ?>, config3);
    //Datos janeth
    loadLiquidFillGauge("fillgauge13", <?php echo $janethP; ?>, config1);
    loadLiquidFillGauge("fillgauge14", <?php echo $janethNe; ?>, config2);
    loadLiquidFillGauge("fillgauge15", <?php echo $janethN; ?>, config3);
    //Datos juanita
    loadLiquidFillGauge("fillgauge16", <?php echo $juanitaP; ?>, config1);
    loadLiquidFillGauge("fillgauge17", <?php echo $juanitaNe; ?>, config2);
    loadLiquidFillGauge("fillgauge18", <?php echo $juanitaN; ?>, config3);
    //Datos lupe benavides
    loadLiquidFillGauge("fillgauge19", <?php echo $lupeP; ?>, config1);
    loadLiquidFillGauge("fillgauge20", <?php echo $lupeNe; ?>, config2);
    loadLiquidFillGauge("fillgauge21", <?php echo $lupeN; ?>, config3);
    //Datos octavio
    loadLiquidFillGauge("fillgauge22", <?php echo $octavioP; ?>, config1);
    loadLiquidFillGauge("fillgauge23", <?php echo $octavioNe; ?>, config2);
    loadLiquidFillGauge("fillgauge24", <?php echo $octavioN; ?>, config3);
    //Datos sara
    loadLiquidFillGauge("fillgauge25", <?php echo $saraP; ?>, config1);
    loadLiquidFillGauge("fillgauge26", <?php echo $saraNe; ?>, config2);
    loadLiquidFillGauge("fillgauge27", <?php echo $saraN; ?>, config3);
    //Datos meyly
    loadLiquidFillGauge("fillgauge28", <?php echo $meylyP; ?>, config1);
    loadLiquidFillGauge("fillgauge29", <?php echo $meylyNe; ?>, config2);
    loadLiquidFillGauge("fillgauge30", <?php echo $meylyN; ?>, config3);
    //Datos hector
    loadLiquidFillGauge("fillgauge31", <?php echo $hectorP; ?>, config1);
    loadLiquidFillGauge("fillgauge32", <?php echo $hectorNe; ?>, config2);
    loadLiquidFillGauge("fillgauge33", <?php echo $hectorN; ?>, config3);
    //Datos juan
    loadLiquidFillGauge("fillgauge34", <?php echo $juanP; ?>, config1);
    loadLiquidFillGauge("fillgauge35", <?php echo $juanNe; ?>, config2);
    loadLiquidFillGauge("fillgauge36", <?php echo $juanN; ?>, config3);
    //Datos armida
    loadLiquidFillGauge("fillgauge37", <?php echo $armidaP; ?>, config1);
    loadLiquidFillGauge("fillgauge38", <?php echo $armidaNe; ?>, config2);
    loadLiquidFillGauge("fillgauge39", <?php echo $armidaN; ?>, config3);
    //Datos martha
    loadLiquidFillGauge("fillgauge40", <?php echo $marthaP; ?>, config1);
    loadLiquidFillGauge("fillgauge41", <?php echo $marthaNe; ?>, config2);
    loadLiquidFillGauge("fillgauge42", <?php echo $marthaN; ?>, config3);
</script>

    <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        <?php //hilda HildaCeballos01
            $a = array();
            foreach ($hilda as $hilda) 
            {
                $a[] = array(
                    "fecha" => $hilda->fecha,
                    "cantidad_menciones" => $hilda->cantidad
                );
            } 
        ?>     
        <?php //guillermo @Rangel_G_
            $a3 = array();
            foreach ($guillermo as $guillermo) 
            {
                $a3[] = array(
                    "fecha" => $guillermo->fecha,
                    "cantidad_menciones" => $guillermo->cantidad
                );
            } 
        ?> 
        <?php //alma @AlmaDelia_D3
            $a4 = array();
            foreach ($alma as $alma) 
            {
                $a4[] = array(
                    "fecha" => $alma->fecha,
                    "cantidad_menciones" => $alma->cantidad
                );
            } 
        ?> 
        <?php //juanita @JuanitaAndres
            $a5 = array();
            foreach ($juanita as $juanita) 
            {
                $a5[] = array(
                    "fecha" => $juanita->fecha,
                    "cantidad_menciones" => $juanita->cantidad
                );
            } 
        ?> 
        <?php //lupe @LupeBenavidesF
            $a6 = array();
            foreach ($lupe as $lupe) 
            {
                $a6[] = array(
                    "fecha" => $lupe->fecha,
                    "cantidad_menciones" => $lupe->cantidad
                );
            } 
        ?>
        <?php //octavio @octaviotintos
            $a7 = array();
            foreach ($octavio as $octavio) 
            {
                $a7[] = array(
                    "fecha" => $octavio->fecha,
                    "cantidad_menciones" => $octavio->cantidad
                );
            } 
        ?>
        <?php //sara @saracernas
            $a8 = array();
            foreach ($sara as $sara) 
            {
                $a8[] = array(
                    "fecha" => $sara->fecha,
                    "cantidad_menciones" => $sara->cantidad
                );
            } 
        ?>
        <?php //hector @hectormlara
            $a9 = array();
            foreach ($hector as $hector) 
            {
                $a9[] = array(
                    "fecha" => $hector->fecha,
                    "cantidad_menciones" => $hector->cantidad
                );
            } 
        ?>
        <?php //juan @PintoRgz
            $a10 = array();
            foreach ($juan as $juan) 
            {
                $a10[] = array(
                    "fecha" => $juan->fecha,
                    "cantidad_menciones" => $juan->cantidad
                );
            } 
        ?>
        <?php //armida @Armida_NG
            $a11 = array();
            foreach ($armida as $armida) 
            {
                $a11[] = array(
                    "fecha" => $armida->fecha,
                    "cantidad_menciones" => $armida->cantidad
                );
            } 
        ?>
        <?php //martha @martha_sosa1
            $a12 = array();
            foreach ($martha as $martha) 
            {
                $a12[] = array(
                    "fecha" => $martha->fecha,
                    "cantidad_menciones" => $martha->cantidad
                );
            } 
        ?>
        ////////////////////////////////////////hilda
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
            title: '@HildaCeballos01',
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
        ////////////////////////////////////////guillermo
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
            title: '@Rangel_G_',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400,
            colors: ['#4DA6AE']
          };
          var chart3 = new google.visualization.ComboChart(document.getElementById('chart_div3'));
          chart3.draw(data, options);          
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
        ////////////////////////////////////////alma
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
            title: '@AlmaDelia_D3',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400,
            colors: ['red']
          };
          var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div4'));
          chart4.draw(data, options);          
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

        ////////////////////////////////////////juanita
        function drawChart6() {
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
            title: '@JuanitaAndres',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400,
            colors: ['red']
          };
          var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div6'));
          chart4.draw(data, options);          
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

        ////////////////////////////////////////lupe benavides
        function drawChart7() {
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
            title: '@LupeBenavidesF',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400,
            colors: ['red']
          };
          var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div7'));
          chart4.draw(data, options);          
        }
        //Sirve para hacer la grafica responsiva
        var aspect = 1000 / 400,
          chart = $("#chart_div7");
        $(window).on("resize", function() {   
            var targetWidth = chart.width();
            chart.attr("width", targetWidth);
            chart.attr("height", targetWidth / aspect);
            drawChart7();
        });  

        ////////////////////////////////////////octavio
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
            title: '@octaviotintos',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400,
            colors: ['red']
          };
          var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div8'));
          chart4.draw(data, options);          
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

        ////////////////////////////////////////sara
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
            title: '@saracernas',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400,
            colors: ['#FFCB01']
          };
          var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div9'));
          chart4.draw(data, options);          
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
        ////////////////////////////////////////hector
        function drawChart11() {
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
            title: '@hectormlara',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400,
            colors: ['red']
          };
          var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div11'));
          chart4.draw(data, options);          
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
        ////////////////////////////////////////juan
        function drawChart12() {
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
            title: '@PintoRgz',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400,
            colors: ['red']
          };
          var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div12'));
          chart4.draw(data, options);          
        }
        //Sirve para hacer la grafica responsiva
        var aspect = 1000 / 400,
          chart = $("#chart_div12");
        $(window).on("resize", function() {   
            var targetWidth = chart.width();
            chart.attr("width", targetWidth);
            chart.attr("height", targetWidth / aspect);
            drawChart12();
        });  
        ////////////////////////////////////////armida
        function drawChart13() {
          var data = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Cantidad'],
              <?php for ($i=0; $i<count($a11); $i++) {
                  ?>
                  ['<?php echo $a11[$i]['fecha'] ?>', <?php echo $a11[$i]['cantidad_menciones'] ?>],
              <?php } ?>
            ]
          );  
          var options = {
            title: '@Armida_NG',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400,
            colors: ['red']
          };
          var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div13'));
          chart4.draw(data, options);          
        }
        //Sirve para hacer la grafica responsiva
        var aspect = 1000 / 400,
          chart = $("#chart_div13");
        $(window).on("resize", function() {   
            var targetWidth = chart.width();
            chart.attr("width", targetWidth);
            chart.attr("height", targetWidth / aspect);
            drawChart13();
        }); 

        ////////////////////////////////////////martha
        function drawChart14() {
          var data = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Cantidad'],
              <?php for ($i=0; $i<count($a12); $i++) {
                  ?>
                  ['<?php echo $a12[$i]['fecha'] ?>', <?php echo $a12[$i]['cantidad_menciones'] ?>],
              <?php } ?>
            ]
          );  
          var options = {
            title: '@martha_sosa1',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400
          };
          var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div14'));
          chart4.draw(data, options);          
        }
        //Sirve para hacer la grafica responsiva
        var aspect = 1000 / 400,
          chart = $("#chart_div14");
        $(window).on("resize", function() {   
            var targetWidth = chart.width();
            chart.attr("width", targetWidth);
            chart.attr("height", targetWidth / aspect);
            drawChart14();
        }); 
    </script>

    <!--Funcion para ajustar la grafica al expander el menú-->
      <script type="text/javascript">
        function recarga()
        {
          setTimeout(function(){
            drawChart();
            drawChart3();
            drawChart4();
            drawChart6();
            drawChart7();
            drawChart8();
            drawChart9();
            drawChart11();
            drawChart12();
            drawChart13();
            drawChart14();
          },100)    
          $('#chart_div').width('100%');
          $('#chart_div2').width('100%');
          $('#chart_div3').width('100%');
          $('#chart_div6').width('100%');
          $('#chart_div7').width('100%');
          $('#chart_div8').width('100%');
          $('#chart_div9').width('100%');
          $('#chart_div11').width('100%');
          $('#chart_div12').width('100%');
          $('#chart_div13').width('100%');
          $('#chart_div14').width('100%');
        }
      </script>
</body>
</html>

