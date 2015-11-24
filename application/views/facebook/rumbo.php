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
<body class="page-header-fixed">
    <!--Carga la barra superior-->
    <?php $this->load->view('comunes/barra_superior'); ?>

    <!-- BEGIN CONTAINER -->
    <div class="page-container page-sidebar-closed">
        <?php $this->load->view('comunes/nav'); ?>
        <div class="page-content">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12" id="encabezado">
                        <h3 class="page-title" id="titulo">
                            Rumbo al 7 de Junio de 2015<small>Actividad en Facebook</small>
                        </h3>
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <div class="portlet-body form well">
                      <!--Código para el tab de pestañas-->   
                      <div class="bs-example bs-example-tabs">
                        <ul class="nav nav-tabs" id="myTab">                          
                          <li class="active"><a data-toggle="tab" href="#barras1" id="tab1">Facebook</a></li>
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
                                                  <h3></h3>                                                    
                                              </div>
                                              <div class="widget-content">                                          
                                                  <div id="chart_div" style="height: 400px;"></div> 
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
    ////////rumbo al 7 de junio
     <?php //char2 
        $a2 = array();
        foreach ($rumbo as $rumbo) 
        {
            $a2[] = array(
                "fecha" => $rumbo->fecha,
                "Megusta" => $rumbo->Megusta,
                "PersonasHablan" => $rumbo->PersonasHablan
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
              ['<?php echo $a2[$i]['fecha'] ?>', <?php echo $a2[$i]['Megusta'] ?>, <?php echo $a2[$i]['PersonasHablan'] ?>],
          <?php } ?>
        ]
      );  
      var options = {
        title: 'Rumboal7deJunio2015',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      chart.draw(data, options);  
    }
  </script>

</body>
</html>

