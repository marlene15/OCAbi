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
	<title>Inicio</title> 
	<?php $this->load->view('comunes/header'); ?>
    <script src="<?php echo base_url()?>assets/facebook/jsapi.js"></script> 
    <script src="<?php echo base_url()?>assets/facebook/d3/d3.min.js"></script>
    <script src="<?php echo base_url()?>assets/facebook/d3/d3.js"></script> 
    <script src="<?php echo base_url()?>assets/facebook/d3/liquidFillGauge.js"></script> 
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
                            Principal <small>Contenido General</small>
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
                                <a href="javascript:;">Facebook</a> 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-briefcase"></i>
                                <a href="javascript:;">Diputado Federal</a> 
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
                              <li class="active"><a data-toggle="tab" href="#silvia">Enrique Rojas</a></li>
                              <li class=""><a data-toggle="tab" href="#jose">Jose Manuel</a></li>
                              <li class=""><a data-toggle="tab" href="#indira">Indira Vizcaíno</a></li>
                              <li class=""><a data-toggle="tab" href="#enrique">Silvía Díaz</a></li>
<!--                               <li class=""><a data-toggle="tab" href="#jorge">Ángeles Márquez</a></li>
                              <li class=""><a data-toggle="tab" href="#jorge">Rosalina García</a></li>
                              <li class=""><a data-toggle="tab" href="#jorge">Claudia Ibarra</a></li>
                              <li class=""><a data-toggle="tab" href="#jorge">Norma Galindo</a></li>
                              <li class=""><a data-toggle="tab" href="#jorge">Pedro Fernández</a></li>
                              <li class=""><a data-toggle="tab" href="#jorge">Elías Valencia</a></li>
                              <li class=""><a data-toggle="tab" href="#jorge">Juan Carlos Olave</a></li>
                              <li class=""><a data-toggle="tab" href="#jorge">Marisa Mesina</a></li> -->
                            </ul>
                              <div class="tab-content" id="myTabContent">

                                <div id="enrique" class="tab-pane fade active in"> 
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
                                </div>

                                <div id="jose" class="tab-pane">
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
                                </div>
                                <div id="indira" class="tab-pane">
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
                                </div>
                                <div id="silvia" class="tab-pane">
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
                                </div>

                             </div>  <!--Cierra div de los tabs-->                                            
                        </div>
                    </div>              
                </div>
            </div>
        </div>
    </div>        

	<?php $this->load->view('comunes/footer'); ?> 

    <!--Datos-->
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


    //Datos kike
    loadLiquidFillGauge("fillgauge1", <?php echo $enriqueP; ?>, config1);
    loadLiquidFillGauge("fillgauge2", <?php echo $enriqueNe; ?>, config2);
    loadLiquidFillGauge("fillgauge3", <?php echo $enriqueN; ?>, config3);
    //Datos jose
    loadLiquidFillGauge("fillgauge4", <?php echo $joseP; ?>, config1);
    loadLiquidFillGauge("fillgauge5", <?php echo $joseNe; ?>, config2);
    loadLiquidFillGauge("fillgauge6", <?php echo $joseN; ?>, config3);
    //Datos indira
    loadLiquidFillGauge("fillgauge7", <?php echo $indiraP; ?>, config1);
    loadLiquidFillGauge("fillgauge8", <?php echo $indiraNE; ?>, config2);
    loadLiquidFillGauge("fillgauge9", <?php echo $indiraN; ?>, config3);     
    //Datos silvia
    loadLiquidFillGauge("fillgauge10", <?php echo $silviaP; ?>, config1);
    loadLiquidFillGauge("fillgauge11", <?php echo $silviaNe; ?>, config2);
    loadLiquidFillGauge("fillgauge12", <?php echo $silviaN; ?>, config3);      
</script>
    <!--Funcion para ajustar la grafica al expander el menú-->
      <script type="text/javascript">
        function recarga()
        {
          setTimeout(function(){
            drawChart();
          },100)    
          $('#chart_div').width('100%');   
        }
      </script>
</body>
</html>

