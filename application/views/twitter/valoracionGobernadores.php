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
	<title>Valoración Gobernadores</title> 
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
                            Gobernador <small>Actividad en Twitter</small>
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
                                <a href="<?php echo site_url('twitter/controlador_inicio/valoracion_gobernadores');?>">Gobernador</a> 
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
                              <li class="active"><a data-toggle="tab" href="#barras1">Nacho Peralta</a></li>
                              <li><a data-toggle="tab" href="#barras2">Jorge Luis Preciado</a></li>
                              <li><a data-toggle="tab" href="#barras3">Locho Morán</a></li>
                              <li><a data-toggle="tab" href="#barras4">Martha Zepeda</a></li>
                            </ul>
                              <div class="tab-content" id="myTabContent">
                                <!--Nacho-->
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
                                                                    <h3>Total: <?php echo $totalN; ?> comentarios</h3>
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
                                <!--Jorge-->
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
                                                                    <h3>Total: <?php echo $totalJ; ?> comentarios</h3>
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

                                <!--Locho-->
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
                                                                    <h3>Total: <?php echo $totalL; ?> comentarios</h3>
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

                                <!--Martha-->
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
                                                                    <h3>Total: <?php echo $totalM; ?> comentarios</h3>
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

    //Datos nacho
    loadLiquidFillGauge("fillgauge1", <?php echo $nachoP; ?>, config1);
    loadLiquidFillGauge("fillgauge2", <?php echo $nachoNe; ?>, config2);
    loadLiquidFillGauge("fillgauge3", <?php echo $nachoN; ?>, config3);
    //Datos jorge
    loadLiquidFillGauge("fillgauge4", <?php echo $jorgeP; ?>, config1);
    loadLiquidFillGauge("fillgauge5", <?php echo $jorgeNe; ?>, config2);
    loadLiquidFillGauge("fillgauge6", <?php echo $jorgeN; ?>, config3);
    //Datos locho
    loadLiquidFillGauge("fillgauge7", <?php echo $lochoP; ?>, config1);
    loadLiquidFillGauge("fillgauge8", <?php echo $lochoNe; ?>, config2);
    loadLiquidFillGauge("fillgauge9", <?php echo $lochoN; ?>, config3);
    //Datos martha
    loadLiquidFillGauge("fillgauge10", <?php echo $marthaP; ?>, config1);
    loadLiquidFillGauge("fillgauge11", <?php echo $marthaNe; ?>, config2);
    loadLiquidFillGauge("fillgauge12", <?php echo $marthaN; ?>, config3);
</script>

    <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);    
        ////////Menciones de gobernadores
        <?php //nacho nachoperaltacol
            $a = array();
            foreach ($nacho as $nacho) 
            {
                $a[] = array(
                    "fecha" => $nacho->fecha,
                    "cantidad_menciones" => $nacho->cantidad
                );
            } 
        ?> 
        <?php //jorge JL_Preciado_  
            $a2 = array();
            foreach ($jorge as $jorge) 
            {
                $a2[] = array(
                    "fecha" => $jorge->fecha,
                    "cantidad_menciones" => $jorge->cantidad
                );
            } 
        ?>
        <?php //locho leonciomoranL8  
            $a3 = array();
            foreach ($locho as $locho) 
            {
                $a3[] = array(
                    "fecha" => $locho->fecha,
                    "cantidad_menciones" => $locho->cantidad
                );
            } 
        ?>  
        <?php //martha MarthaZepeda_  
            $a4 = array();
            foreach ($martha as $martha) 
            {
                $a4[] = array(
                    "fecha" => $martha->fecha,
                    "cantidad_menciones" => $martha->cantidad
                );
            } 
        ?> 
        ////////////////////////////////////////nacho
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
            title: '@nanchoperaltacol',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400
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

        ////////////////////////////////////////jorge
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
            title: '@JL_Preciado_',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400
          };
          var chart2 = new google.visualization.ComboChart(document.getElementById('chart_div2'));
          chart2.draw(data, options);          
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

        ////////////////////////////////////////locho
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
            title: '@leonciomoranL8',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400
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

        ////////////////////////////////////////martha
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
            title: '@MarthaZepeda_',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400
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
          },100)    
          $('#chart_div').width('100%'); 
          $('#chart_div2').width('100%');   
          $('#chart_div3').width('100%'); 
          $('#chart_div4').width('100%'); 
        }
      </script>
</body>
</html>

