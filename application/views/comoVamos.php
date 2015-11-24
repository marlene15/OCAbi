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
  <title>Como vamos Colima</title> 
  <?php $this->load->view('comunes/header'); ?>
  <script src="<?php echo base_url()?>assets/twitter/jsapi.js"></script> 
  <script src="<?php echo base_url()?>assets/twitter/tabsDL.js"></script>
  <!--Para poder usar el calendario, importar las librerias-->
  <link href="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.min.css" rel="stylesheet">
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
                            Como vamos Colima <small>Actividad en Facebook y Twitter </small>
                        </h3>
                        <ul class="breadcrumb" id="ul_menu">
                            <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo site_url('facebook/controlador_inicio/comoVamos') ?>">Home</a> 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo site_url('twitter/controlador_inicio/comoVamos'); ?>">Como Vamos Colima</a> 
                            </li>                           
                        </ul>    
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <div class="portlet-body form well">
                      <div id="alert"></div>  
                      <!--Código para el tab de pestañas-->   
                      <div class="bs-example bs-example-tabs">
                        <ul class="nav nav-tabs" id="myTab">                          
                          <li class="active"><a data-toggle="tab" href="#barras1" id="tab1">Facebook</a></li>
                          <li><a data-toggle="tab" href="#barras2" id="tab2">Twitter</a></li>
                        </ul>
                          <div class="tab-content" id="myTabContent"> 
                            <div id="barras1" class="tab-pane fade active in"> 
                                <div class="container-fluid">
                                    <div class="row-fluid">
                                      <div class="span12">
                                        <div class="span9">                                          
                                            <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                <div class="widget-header" style="background: #B20034">
                                                    <i class="icon-bar-chart"></i>
                                                    <h3>ComoVamosColima</h3>                                                    
                                                </div>
                                                <div class="widget-content">                                          
                                                    <center>
                                                        <div id="chart_div" style="height: 400px;"></div>
                                                    </center> 
                                                </div>
                                            </div> 
                                        </div>

                                        <div class="span3">
                                          <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                            <div class="widget-header" style="background: #B20034" align="left">
                                                <i class="icon-calendar"></i>
                                                <h3>Fechas a consultar</h3>                                                    
                                            </div>
                                            <div class="widget-content">
                                              <center>
                                                <label>Fecha de inicio</label>
                                                <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                    <span class="add-on"><i class="icon-th"></i></span>
                                                    <span class="add-on"><i class="icon-remove"></i></span>
                                                    <input class="form-control span9" size="15" type="text" value="" readonly id="fecha_inicio">
                                                </div> 
                                                <label>Fecha de término</label>
                                                <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                    <span class="add-on"><i class="icon-th"></i></span>
                                                    <span class="add-on"><i class="icon-remove"></i></span>
                                                    <input class="form-control span9" size="15" type="text" value="" readonly id="fecha_fin">
                                                </div>
                                                <input type="hidden" name="vtab" id="vtab2" value="2">
                                                <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta">Consultar</button>
                                              </center>
                                            </div> 
                                          </div>  
                                        </div>
                                      </div> 
                                    </div>
                                </div>
                            </div>


                            <div id="barras2" class="tab-pane fade"> 
                                <div class="container-fluid">
                                    <div class="row-fluid">
                                      <div class="span12">
                                        <div class="span9">                                          
                                            <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                <div class="widget-header" style="background: #B20034">
                                                    <i class="icon-bar-chart"></i>
                                                    <h3>ComoVamosColima</h3>                                                    
                                                </div>
                                                <div class="widget-content">                                          
                                                    <center>
                                                        <div id="chart_div2" style="height: 400px;"></div>
                                                        <div id="con"></div>  <!--Grafica despues de la consulta-->
                                                    </center> 
                                                </div>
                                            </div> 
                                        </div>

                                        <div class="span3">
                                          <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                            <div class="widget-header" style="background: #B20034" align="left">
                                                <i class="icon-calendar"></i>
                                                <h3>Fechas a consultar</h3>                                                    
                                            </div>
                                            <div class="widget-content">
                                              <center>
                                                <label>Fecha de inicio</label>
                                                <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                    <span class="add-on"><i class="icon-th"></i></span>
                                                    <span class="add-on"><i class="icon-remove"></i></span>
                                                    <input class="form-control span9" size="15" type="text" value="" readonly id="fecha">
                                                </div> 
                                                <label>Fecha de término</label>
                                                <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                    <span class="add-on"><i class="icon-th"></i></span>
                                                    <span class="add-on"><i class="icon-remove"></i></span>
                                                    <input class="form-control span9" size="15" type="text" value="" readonly id="fecha">
                                                </div>
                                                <input type="hidden" name="vtab" id="vtab1" value="1">
                                                <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta">Consultar</button>
                                              </center>
                                            </div> 
                                          </div>  
                                        </div>
                                      </div> 
                                    </div>
                                </div>
                            </div>

                        </div>
                      </div> <!--Cierra div del tab de pestañas-->        
                    </div>
                </div>              
            </div>
        </div>
    </div>

  <?php $this->load->view('comunes/footer'); ?>  
  <!--Para poder usar el calendario, importar las librerias-->
  <script type="text/javascript" src="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>  

  <!--Para usar el calendario-->
  <script type="text/javascript">
    $('.form_date').datetimepicker({
          language:  'es',
          weekStart: 1,
          todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      minView: 2,
      forceParse: 0
      });
  </script>     
 
<script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});     
    ////////comoVamos
    <?php //char2 TWITTER
        $a = array();
        foreach ($comoVamos as $comoVamos) 
        {
            $a[] = array(
                "fecha" => $comoVamos->fecha,
                "seguidores" => $comoVamos->seguidores,
                "siguiendo" => $comoVamos->siguiendo,
                "tweets" => $comoVamos->tweets,
                "promedio" => ($comoVamos->seguidores+$comoVamos->siguiendo+$comoVamos->tweets)/3
            );
        }                       
    ?> 

     <?php //char2 
        $a2 = array();
        foreach ($comoVamos2 as $comoVamos2) 
        {
            $a2[] = array(
                "Fecha" => $comoVamos2->Fecha,
                "Megusta" => $comoVamos2->Megusta,
                "PersonasHablan" => $comoVamos2->PersonasHablan
            );
        }
    ?> 

    //Facebook
     google.setOnLoadCallback(drawChart);
    function drawChart() {
       var data = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Likes', 'Posts'],
          <?php for ($i=0; $i<count($a2); $i++) {
              ?>
              ['<?php echo $a2[$i]['Fecha'] ?>', <?php echo $a2[$i]['Megusta'] ?>, <?php echo $a2[$i]['PersonasHablan'] ?>],
          <?php } ?>
        ]
      );  
      var options = {
        title: 'Comovamoscolima',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      chart.draw(data, options);  
    }

    ////////////////////////////////////////comoVamos TWITTER
    function drawChart2() {
      var data = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
          <?php for ($i=0; $i<count($a); $i++) {
              ?>
              ['<?php echo $a[$i]['fecha'] ?>', <?php echo $a[$i]['seguidores'] ?>, <?php echo $a[$i]['siguiendo'] ?>, <?php echo $a[$i]['tweets'] ?>, <?php echo $a[$i]['promedio'] ?>],
          <?php } ?>
        ]
      );  
      var options = {
        title: '@Comovamoscolima',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
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
  </script>

  <!--Funcion para ajustar la grafica al expander el menú-->
  <script type="text/javascript">
    function recarga()
    {
      setTimeout(function(){
        drawChart();
        drawChart2();
      },100)    
      $('#chart_div').width('100%');  
      $('#chart_div2').width('100%');  
    }
  </script>


<script type="text/javascript">
    $(document).ready(function(){                                        
      $("#consulta").click(function(event) {
        var fecha_inicio = document.getElementById("fecha_inicio").value; 
        var fecha_fin = document.getElementById("fecha_fin").value;  
        var vtab = document.getElementById("vtab2").value;
                
        var parametros = {
                "fecha_inicio": fecha_inicio,
                "fecha_fin": fecha_fin,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/rango_comoVamos');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con').html(html);   
          }
        });            
      });       
    });
</script>

</body>
</html>

