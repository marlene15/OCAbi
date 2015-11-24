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
  <title>Dip. Federales</title> 
  <?php $this->load->view('comunes/header'); ?>
  <script src="<?php echo base_url()?>assets/twitter/jsapi.js"></script> 
  <script src="<?php echo base_url()?>assets/twitter/vk.js"></script>  
</head>
<body class="page-header-fixed">
    <!--Carga la barra superior-->
    <?php $this->load->view('comunes/barra_superior'); ?>

    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <?php $this->load->view('comunes/nav'); ?>
        <div class="page-content">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <h3 class="page-title">
                            Candidatos a Diputado Federal <small>Actividad en Twitter </small>
                        </h3>
                        <ul class="breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo site_url('inicio') ?>">Home</a> 
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
                      <!--Código para el tab de pestañas-->   
                      <div class="bs-example bs-example-tabs">
                        <ul class="nav nav-tabs" id="myTab">
                          <li class="active"><a data-toggle="tab" href="#d1">Twitter</a></li>
                          <li class=""><a data-toggle="tab" href="#d2">Facebook</a></li>
                        </ul>
                          <div class="tab-content" id="myTabContent">

                            <div id="d1" class="tab-pane fade active in"> 
                                <div id="chart_div" style="height: 600px; width: 100%;"></div>                            
                            </div>
                        </div>
                      </div> <!--Cierra div del tab de pestañas-->        
                    </div>
                </div>              
            </div>
        </div>
    </div>

  <?php $this->load->view('comunes/footer'); ?> 

<script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');        
      data.addRows([
        ['Como vamos Colima', <?php echo $seguidores_comoVamos ?>, <?php echo $siguiendo_comoVamos ?>, <?php echo $tweets_comoVamos ?>]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,{
                          calc: "stringify",
                          sourceColumn: 1,
                          type: "string",
                          role: "annotation"
                      }, 
                      2,{
                          calc: "stringify",
                          sourceColumn: 2,
                          type: "string",
                          role: "annotation"
                      }, 
                      3,{
                          calc: "stringify",
                          sourceColumn: 3,
                          type: "string",
                          role: "annotation"
                      }]);
      var options = {
        title: '',
        hAxis: {
          title: 'Candidatos'
        },         
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          },
          2: {
            type: 'bars',
            color: '#FF4524'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      chart.draw(view, options);          
    }    
  </script>
</body>
</html>

