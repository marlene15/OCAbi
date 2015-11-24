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
<!--[if !IE]><!--> <html lang="es"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<title>Mapa</title> 	
    <!--Para poder usar el API del mapa-->
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD4NI8lkdewy-_qWG5wDhTR9KjTN9Sn_xs&sensor=false">
    </script>
    <script src="<?php echo base_url()?>assets/twitter/jsapi.js"></script>    
    <script src="<?php echo base_url()?>assets/twitter/vk.js"></script> 
    <!--Para usar los contenedores widget-->
    <link href="<?php echo base_url()?>assets/bootstrap-widget/css/widget.css" rel="stylesheet" type="text/css">    
    <?php $this->load->view('comunes/header'); ?>
    <!--Para que salga correctamente el mapa-->
    <style type="text/css">
        .gm-style img {
            max-width: none;
          }
          .gm-style label {
            width: auto; display:inline;
          }
          #myTab{
          margin-top: -38px;
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
                <div class="row-fluid">
                    <div class="span12" id="encabezado"> 
                        <h3 class="page-title" id="titulo">
                            Tweets en Colima
                        </h3>
                        <ul class="breadcrumb" id="ul_menu">
                            <li>
                                <i class="icon-home"></i>
                                    <a href="<?php echo site_url('inicio') ?>">Home</a>                                     
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-map-marker"></i>
                                    <a href="javascript:;"> Entidad</a>                                     
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-twitter"></i>
                                <a href="<?php echo site_url('twitter/controlador_inicio/mapa_coordenadas');?>">Twitter</a>                                                                      
                            </li>
                        </ul>
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <div class="portlet-body form well">
                        <br>
                        <!--Código para el tap de pestañas-->   
                        <div class="bs-example bs-example-tabs">
                            <ul class="nav nav-tabs" id="myTab">
                              <li class="active"><a data-toggle="tab" href="#armeria" id="armeria_tab">Armería</a></li>
                              <li class=""><a data-toggle="tab" href="#colima" id="colima_tab">Colima</a></li>
                              <li class=""><a data-toggle="tab" href="#comala" id="comala_tab">Comala</a></li>
                              <li class=""><a data-toggle="tab" href="#coqui" id="coqui_tab">Coquimatlán</a></li>
                              <li class=""><a data-toggle="tab" href="#cuau" id="cuau_tab">Cuauhtémoc</a></li>
                              <li class=""><a data-toggle="tab" href="#ixtlahuacan" id="ixtlahuacan_tab">Ixtlahuacán</a></li>
                              <li class=""><a data-toggle="tab" href="#manzanillo" id="manzanillo_tab">Manzanillo</a></li>
                              <li class=""><a data-toggle="tab" href="#mina" id="mina_tab">Minatitlán</a></li>
                              <li class=""><a data-toggle="tab" href="#tecoman" id="tecoman_tab">Tecomán</a></li>
                              <li class=""><a data-toggle="tab" href="#villa" id="villa_tab">Villa de Álvarez</a></li>                                
                            </ul>
                            <div class="tab-content" id="myTabContent">

                                <div id="armeria" class="tab-pane active in"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-map-marker"></i>
                                                        <h3>Armería</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <center>
                                                            <div id="map_div5" style="width: 100%; height: 500px;"></div> <!--Primer mapa-->  
                                                        </center> 
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div id="colima" class="tab-pane"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-map-marker"></i>
                                                        <h3>Colima</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <center>
                                                            <div id="map_div" style="width: 100%; height: 500px;"></div> <!--Primer mapa-->  
                                                            <div id="contenido_colima"></div>
                                                        </center> 
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div id="comala" class="tab-pane"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-map-marker"></i>
                                                        <h3>Comala</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <center>
                                                            <div id="map_div6" style="width: 100%; height: 500px;"></div> <!--Primer mapa-->  
                                                        </center> 
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div id="coqui" class="tab-pane"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-map-marker"></i>
                                                        <h3>Coquimatlán</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <center>
                                                            <div id="map_div7" style="width: 100%; height: 500px;"></div> <!--Primer mapa-->  
                                                        </center> 
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div id="cuau" class="tab-pane"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-map-marker"></i>
                                                        <h3>Cuauhtémoc</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <center>
                                                            <div id="map_div8" style="width: 100%; height: 500px;"></div> <!--Primer mapa-->  
                                                        </center> 
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div id="ixtlahuacan" class="tab-pane"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-map-marker"></i>
                                                        <h3>Ixtlahuacán</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <center>
                                                            <div>No hay tuits en Ixtlahuacán</div>
                                                            <div id="map_div9" style="width: 100%; height: 500px;"></div> <!--Primer mapa-->  
                                                        </center> 
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div id="manzanillo" class="tab-pane"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-map-marker"></i>
                                                        <h3>Manzanillo</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <center>
                                                            <div id="map_div3" style="width: 100%; height: 500px;"></div> <!--Segundo mapa-->   
                                                        </center> 
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div id="mina" class="tab-pane"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-map-marker"></i>
                                                        <h3>Minatitlán</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <center>
                                                            <div id="map_div10" style="width: 100%; height: 500px;"></div> <!--Primer mapa-->  
                                                        </center> 
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div id="tecoman" class="tab-pane"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-map-marker"></i>
                                                        <h3>Tecomán</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <center>
                                                            <div id="map_div4" style="width: 100%; height: 500px;"></div> <!--Segundo mapa-->   
                                                        </center> 
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div id="villa" class="tab-pane"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-map-marker"></i>
                                                        <h3>Villa de Álvarez</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <center>
                                                            <div id="map_div2" style="width: 100%; height: 500px;"></div> <!--Segundo mapa-->   
                                                        </center> 
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
<!--Mapa de Armería-->
<script type="text/javascript">
    google.load("visualization", "1", {packages:["map"]});
    setTimeout(google.setOnLoadCallback(drawChart5),550);
    //Datos Armería
    <?php //Llenamos el array con las coordenadas
        $a17 = array();
        foreach ($gobernadores_armeria as $gobernadores_armeria) 
        {
            $a17[] = array(
                "Lat" => $gobernadores_armeria->latitud,
                "Long" => $gobernadores_armeria->longitud
            );
        }  

        $a18 = array();
        foreach ($dipFederales_armeria as $dipFederales_armeria) 
        {
            $a18[] = array(
                "Lat" => $dipFederales_armeria->latitud,
                "Long" => $dipFederales_armeria->longitud
            );
        }

        $a19 = array();
        foreach ($dipLocales_armeria as $dipLocales_armeria) 
        {
            $a19[] = array(
                "Lat" => $dipLocales_armeria->latitud,
                "Long" => $dipLocales_armeria->longitud
            );
        }

        $a20 = array();
        foreach ($presidentes_armeria as $presidentes_armeria) 
        {
            $a20[] = array(
                "Lat" => $presidentes_armeria->latitud,
                "Long" => $presidentes_armeria->longitud
            );
        }                          
    ?>    
  function drawChart5() 
  {
    //Datos Armeria
    var data5 = google.visualization.arrayToDataTable(
        [
          ['Lat', 'Long'],
          <?php for ($i=0; $i<count($a17); $i++) {
          ?>
          [<?php echo $a17[$i]['Lat'] ?>, <?php echo $a17[$i]['Long'] ?>],
          <?php } ?>
          <?php for ($i=0; $i<count($a18); $i++) {
          ?>
          [<?php echo $a18[$i]['Lat'] ?>, <?php echo $a18[$i]['Long'] ?>],
          <?php } ?>
          <?php for ($i=0; $i<count($a19); $i++) {
          ?>
          [<?php echo $a19[$i]['Lat'] ?>, <?php echo $a19[$i]['Long'] ?>],
          <?php } ?>
          <?php for ($i=0; $i<count($a20); $i++) {
          ?>
          [<?php echo $a20[$i]['Lat'] ?>, <?php echo $a20[$i]['Long'] ?>],
          <?php } ?>
        ]
    );

    var map5 = new google.visualization.Map(document.getElementById('map_div5'));
    var options = { showTip: true };
    map5.draw(data5, options);
  }
</script>

<script type="text/javascript">
    $(document).ready(function(){                                        
      $("#colima_tab").click(function(event) {
        $.ajax({                                            
          type:"post",
          url: '<?php echo site_url('twitter/controlador_consultas/mapa_colima');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#map_div').html(html);   
          }          
        });
        $('#map_div').width('100%');    
        $('#colima').show(500);  
        $('#villa').hide(250);
        $('#manzanillo').hide(250);
        $('#tecoman').hide(250);
        $('#armeria').hide(250);
        $('#comala').hide(250);
        $('#coqui').hide(250);
        $('#cuau').hide(250);
        $('#ixtlahuacan').hide(250);
        $('#mina').hide(250);      
      });

      $("#comala_tab").click(function(event) {
        $.ajax({                                            
          type:"post",
          url: '<?php echo site_url('twitter/controlador_consultas/mapa_comala');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#map_div6').html(html);   
          }          
        }); 
        $('#map_div6').width('100%');  
        $('#comala').show(500); 
        $('#armeria').hide(250);
        $('#tecoman').hide(250);
        $('#villa').hide(250);
        $('#colima').hide(250);
        $('#manzanillo').hide(250);
        $('#coqui').hide(250);
        $('#cuau').hide(250);
        $('#ixtlahuacan').hide(250);
        $('#mina').hide(250);        
      });

      $("#coqui_tab").click(function(event) {
        $.ajax({                                            
          type:"post",
          url: '<?php echo site_url('twitter/controlador_consultas/mapa_coqui');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#map_div7').html(html);   
          }
        });        
        $('#map_div7').width('100%');   
        $('#coqui').show(500);
        $('#comala').hide(250);
        $('#armeria').hide(250);
        $('#tecoman').hide(250);
        $('#villa').hide(250);
        $('#colima').hide(250);
        $('#manzanillo').hide(250);
        $('#cuau').hide(250);
        $('#ixtlahuacan').hide(250);
        $('#mina').hide(250);         
      });

      $("#cuau_tab").click(function(event) {
        $.ajax({                                            
          type:"post",
          url: '<?php echo site_url('twitter/controlador_consultas/mapa_cuau');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#map_div8').html(html);   
          }          
        }); 
        $('#map_div8').width('100%');    
        $('#cuau').show(500);  
        $('#coqui').hide(250);
        $('#comala').hide(250);
        $('#armeria').hide(250);
        $('#tecoman').hide(250);
        $('#villa').hide(250);
        $('#colima').hide(250);
        $('#manzanillo').hide(250);
        $('#ixtlahuacan').hide(250);
        $('#mina').hide(250);     
      });

      $("#ixtlahuacan_tab").click(function(event) {
        $.ajax({                                            
          type:"post",
          url: '<?php echo site_url('twitter/controlador_consultas/mapa_ixtlahuacan');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#map_div9').html(html);   
          }
        });  
        $('#map_div9').width('100%');  
        $('#ixtlahuacan').show(500); 
        $('#cuau').hide(250);
        $('#coqui').hide(250);
        $('#comala').hide(250);
        $('#armeria').hide(250);
        $('#tecoman').hide(250);
        $('#villa').hide(250);
        $('#colima').hide(250);
        $('#manzanillo').hide(250);
        $('#mina').hide(250);       
      });

      $("#manzanillo_tab").click(function(event) {
        $.ajax({                                            
          type:"post",
          url: '<?php echo site_url('twitter/controlador_consultas/mapa_manzanillo');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#map_div3').html(html);   
          }
        });  
        $('#map_div3').width('100%');  
        $('#manzanillo').show(500);   
        $('#villa').hide(250);
        $('#colima').hide(250);
        $('#tecoman').hide(250);
        $('#armeria').hide(250);
        $('#comala').hide(250);
        $('#coqui').hide(250);
        $('#cuau').hide(250);
        $('#ixtlahuacan').hide(250);
        $('#mina').hide(250);     
      });

      $("#comala_tab").click(function(event) {
        $.ajax({                                            
          type:"post",
          url: '<?php echo site_url('twitter/controlador_consultas/mapa_comala');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#map_div6').html(html);   
          }
        }); 
        $('#map_div6').width('100%');  
        $('#comala').show(500); 
        $('#armeria').hide(250);
        $('#tecoman').hide(250);
        $('#villa').hide(250);
        $('#colima').hide(250);
        $('#manzanillo').hide(250);
        $('#coqui').hide(250);
        $('#cuau').hide(250);
        $('#ixtlahuacan').hide(250);
        $('#mina').hide(250);        
      });

      $("#mina_tab").click(function(event) {
        $.ajax({                                            
          type:"post",
          url: '<?php echo site_url('twitter/controlador_consultas/mapa_mina');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#map_div10').html(html);   
          }
        });
        $('#map_div10').width('100%');  
        $('#mina').show(500);  
        $('#ixtlahuacan').hide(250);
        $('#cuau').hide(250);
        $('#coqui').hide(250);
        $('#comala').hide(250);
        $('#armeria').hide(250);
        $('#tecoman').hide(250);
        $('#villa').hide(250);
        $('#colima').hide(250);
        $('#manzanillo').hide(250);        
      });

      $("#tecoman_tab").click(function(event) {
        $.ajax({                                            
          type:"post",
          url: '<?php echo site_url('twitter/controlador_consultas/mapa_tecoman');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#map_div4').html(html);   
          }
        });   
        $('#map_div4').width('100%'); 
        $('#tecoman').show(500); 
        $('#villa').hide(250);
        $('#colima').hide(250);
        $('#manzanillo').hide(250);
        $('#armeria').hide(250);
        $('#comala').hide(250);
        $('#coqui').hide(250);
        $('#cuau').hide(250);
        $('#ixtlahuacan').hide(250);
        $('#mina').hide(250);       
      });

      $("#villa_tab").click(function(event) {
        $.ajax({                                            
          type:"post",
          url: '<?php echo site_url('twitter/controlador_consultas/mapa_villa');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#map_div2').html(html);   
          }
        });
        $('#map_div2').width('100%');  
        $('#villa').show(500); 
        $('#colima').hide(250);
        $('#manzanillo').hide(250);
        $('#tecoman').hide(250);
        $('#armeria').hide(250);
        $('#comala').hide(250);
        $('#coqui').hide(250);
        $('#cuau').hide(250);
        $('#ixtlahuacan').hide(250);
        $('#mina').hide(250);       
      });

    });
</script>

</body>
</html>
