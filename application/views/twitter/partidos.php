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
  <title>Dip. Federales</title> 
  <?php $this->load->view('comunes/header'); ?>
  <script src="<?php echo base_url()?>assets/twitter/jsapi.js"></script> 
  <script src="<?php echo base_url()?>assets/twitter/recarga_partidos.js"></script> 
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
                            Partidos Políticos
                        </h3>
                        <ul class="breadcrumb" id="ul_menu">
                            <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo site_url('inicio'); ?>">Home</a> 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-flag"></i>
                                Partido 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-twitter"></i>
                                Twitter                             
                            </li>                                                   
                        </ul>    
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <div class="portlet-body form well">                  
                      <div id="alert"></div>                  
                      <div class="bs-example bs-example-tabs"><!--Código para el tab de pestañas-->   
                        <ul class="nav nav-tabs" id="myTab">
                          <li class="active"><a data-toggle="tab" href="#barras2" id="tab2">PAN</a></li>
                          <li><a data-toggle="tab" href="#barras1" id="tab1">PRI</a></li>                          
                          <li><a data-toggle="tab" href="#barras3" id="tab3">PRD</a></li>
                          <li><a data-toggle="tab" href="#barras6" id="tab6">PT</a></li>
                          <li><a data-toggle="tab" href="#barras5" id="tab5">Partido Verde</a></li>
                          <li><a data-toggle="tab" href="#barras4" id="tab4">Mov. Ciudadano</a></li>
                          <li><a data-toggle="tab" href="#barras7" id="tab7">MORENA</a></li>
                        </ul>
                          <div class="tab-content" id="myTabContent"> <!--Inicia tab de pestañas-->

                            <div id="barras1" class="tab-pane fade"> 
                              <div class="container-fluid">
                                  <div class="row-fluid">
                                    <div class="span12">
                                      <div class="span9">                                          
                                          <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                              <div class="widget-header" style="background: #B20034">
                                                  <i class="icon-bar-chart"> <strong><font size="3">PRI</font></strong></i>                                              
                                              </div>
                                              <div class="widget-content">                                          
                                                  <div id="chart_div" style="height: 400px;"></div> 
                                                  <div id="chart_div2" style="height: 400px;"></div>   
                                                  <div id="chart_div3" style="height: 400px;"></div>                       
                                                  <div id="chart_div4" style="height: 400px;"></div> 
                                                  <div id="chart_div5" style="height: 400px;"></div> 
                                                  <div id="con"></div>  <!--Grafica despues de la consulta-->
                                              </div>
                                          </div> 
                                      </div> 

                                      <div class="span3">
                                        <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                          <div class="widget-header" style="background: #B20034" align="left">
                                              <i class="icon-calendar"> <strong><font size="3">Fechas a consultar</font></strong></i>                                                  
                                          </div>
                                          <div class="widget-content">
                                            <center>
                                              <label>Fecha de inicio</label>
                                              <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                  <span class="add-on"><i class="icon-th"></i></span>
                                                  <span class="add-on"><i class="icon-remove"></i></span>
                                                  <input class="form-control span7" size="15" type="text" value="" readonly id="fecha_inicio">
                                              </div> 
                                              <label>Fecha de término</label>
                                              <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                  <span class="add-on"><i class="icon-th"></i></span>
                                                  <span class="add-on"><i class="icon-remove"></i></span>
                                                  <input class="form-control span7" size="15" type="text" value="" readonly id="fecha_fin">
                                              </div>
                                              <input type="hidden" name="vtab" id="vtab1" value="1">
                                              <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta_pri">Consultar</button>
                                            </center>
                                          </div> 
                                        </div>  
                                      </div>

                                    </div>
                                  </div>
                              </div>
                            </div>

                            <div id="barras2" class="tab-pane fade active in"> 
                              <div class="container-fluid">
                                  <div class="row-fluid">
                                    <div class="span12">
                                      <div class="span9">                                          
                                          <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                              <div class="widget-header" style="background: #B20034">
                                                  <i class="icon-bar-chart"> <strong><font size="3">PAN</font></strong></i>                                              
                                              </div>
                                              <div class="widget-content">                                          
                                                  <div id="chart_div6" style="height: 400px;"></div> 
                                                  <div id="chart_div8" style="height: 400px;"></div>
                                                  <div id="con2"></div>  <!--Grafica despues de la consulta-->
                                              </div>
                                          </div> 
                                      </div> 

                                      <div class="span3">
                                        <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                          <div class="widget-header" style="background: #B20034" align="left">
                                              <i class="icon-calendar"> <strong><font size="3">Fechas a consultar</font></strong></i>                                                  
                                          </div>
                                          <div class="widget-content">
                                            <center>
                                              <label>Fecha de inicio</label>
                                              <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                  <span class="add-on"><i class="icon-th"></i></span>
                                                  <span class="add-on"><i class="icon-remove"></i></span>
                                                  <input class="form-control span7" size="15" type="text" value="" readonly id="fecha_inicioPan">
                                              </div> 
                                              <label>Fecha de término</label>
                                              <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                  <span class="add-on"><i class="icon-th"></i></span>
                                                  <span class="add-on"><i class="icon-remove"></i></span>
                                                  <input class="form-control span7" size="15" type="text" value="" readonly id="fecha_finPan">
                                              </div>
                                              <input type="hidden" name="vtab" id="vtab2" value="2">
                                              <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta_pan">Consultar</button>
                                            </center>
                                          </div> 
                                        </div>  
                                      </div>

                                    </div>
                                  </div>
                              </div>
                            </div>

                            <div id="barras3" class="tab-pane fade"> 
                              <div class="container-fluid">
                                  <div class="row-fluid">
                                    <div class="span12">
                                      <div class="span9">                                          
                                          <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                              <div class="widget-header" style="background: #B20034">
                                                  <i class="icon-bar-chart"> <strong><font size="3">PRD</font></strong></i>                                              
                                              </div>
                                              <div class="widget-content">                                          
                                                  <div id="chart_div7" style="height: 400px;"></div> 
                                                  <div id="con3"></div>  <!--Grafica despues de la consulta-->
                                              </div>
                                          </div> 
                                      </div> 

                                      <div class="span3">
                                        <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                          <div class="widget-header" style="background: #B20034" align="left">
                                              <i class="icon-calendar"> <strong><font size="3">Fechas a consultar</font></strong></i>                                                  
                                          </div>
                                          <div class="widget-content">
                                            <center>
                                              <label>Fecha de inicio</label>
                                              <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                  <span class="add-on"><i class="icon-th"></i></span>
                                                  <span class="add-on"><i class="icon-remove"></i></span>
                                                  <input class="form-control span7" size="15" type="text" value="" readonly id="fecha_inicioPrd">
                                              </div> 
                                              <label>Fecha de término</label>
                                              <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                  <span class="add-on"><i class="icon-th"></i></span>
                                                  <span class="add-on"><i class="icon-remove"></i></span>
                                                  <input class="form-control span7" size="15" type="text" value="" readonly id="fecha_finPrd">
                                              </div>
                                              <input type="hidden" name="vtab" id="vtab3" value="3">
                                              <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta_prd">Consultar</button>
                                            </center>
                                          </div> 
                                        </div>  
                                      </div>

                                    </div>
                                  </div>
                              </div>
                            </div>

                            <div id="barras4" class="tab-pane fade"> 
                              <div class="container-fluid">
                                  <div class="row-fluid">
                                    <div class="span12">
                                      <div class="span9">                                          
                                          <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                              <div class="widget-header" style="background: #B20034">
                                                  <i class="icon-bar-chart"> <strong><font size="3">Movimiento Ciudadano</font></strong></i>                                              
                                              </div>
                                              <div class="widget-content">                                          
                                                  <div id="chart_div9" style="height: 400px;"></div> 
                                                  <div id="con4"></div>  <!--Grafica despues de la consulta-->
                                              </div>
                                          </div> 
                                      </div> 

                                      <div class="span3">
                                        <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                          <div class="widget-header" style="background: #B20034" align="left">
                                              <i class="icon-calendar"> <strong><font size="3">Fechas a consultar</font></strong></i>                                                  
                                          </div>
                                          <div class="widget-content">
                                            <center>
                                              <label>Fecha de inicio</label>
                                              <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                  <span class="add-on"><i class="icon-th"></i></span>
                                                  <span class="add-on"><i class="icon-remove"></i></span>
                                                  <input class="form-control span7" size="15" type="text" value="" readonly id="fecha_inicioMc">
                                              </div> 
                                              <label>Fecha de término</label>
                                              <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                  <span class="add-on"><i class="icon-th"></i></span>
                                                  <span class="add-on"><i class="icon-remove"></i></span>
                                                  <input class="form-control span7" size="15" type="text" value="" readonly id="fecha_finMc">
                                              </div>
                                              <input type="hidden" name="vtab" id="vtab4" value="4">
                                              <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta_mc">Consultar</button>
                                            </center>
                                          </div> 
                                        </div>  
                                      </div>

                                    </div>
                                  </div>
                              </div>
                            </div>

                            <div id="barras5" class="tab-pane fade"> 
                              <div class="container-fluid">
                                  <div class="row-fluid">
                                    <div class="span12">
                                      <div class="span9">                                          
                                          <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                              <div class="widget-header" style="background: #B20034">
                                                  <i class="icon-bar-chart"> <strong><font size="3">Partido Verde</font></strong></i>                                              
                                              </div>
                                              <div class="widget-content">                                          
                                                  <div id="chart_div10" style="height: 400px;"></div> 
                                                  <div id="con5"></div>  <!--Grafica despues de la consulta-->
                                              </div>
                                          </div> 
                                      </div> 

                                      <div class="span3">
                                        <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                          <div class="widget-header" style="background: #B20034" align="left">
                                              <i class="icon-calendar"> <strong><font size="3">Fechas a consultar</font></strong></i>                                                  
                                          </div>
                                          <div class="widget-content">
                                            <center>
                                              <label>Fecha de inicio</label>
                                              <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                  <span class="add-on"><i class="icon-th"></i></span>
                                                  <span class="add-on"><i class="icon-remove"></i></span>
                                                  <input class="form-control span7" size="15" type="text" value="" readonly id="fecha_inicioVerde">
                                              </div> 
                                              <label>Fecha de término</label>
                                              <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                  <span class="add-on"><i class="icon-th"></i></span>
                                                  <span class="add-on"><i class="icon-remove"></i></span>
                                                  <input class="form-control span7" size="15" type="text" value="" readonly id="fecha_finVerde">
                                              </div>
                                              <input type="hidden" name="vtab" id="vtab5" value="5">
                                              <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta_verde">Consultar</button>
                                            </center>
                                          </div> 
                                        </div>  
                                      </div>

                                    </div>
                                  </div>
                              </div>
                            </div>         

                            <div id="barras6" class="tab-pane fade"> 
                              <div class="container-fluid">
                                  <div class="row-fluid">
                                    <div class="span12">
                                      <div class="span9">                                          
                                          <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                              <div class="widget-header" style="background: #B20034">
                                                  <i class="icon-bar-chart"> <strong><font size="3">PT</font></strong></i>                                              
                                              </div>
                                              <div class="widget-content">                                          
                                                  <div id="chart_div11" style="height: 400px;"></div> 
                                                  <div id="con6"></div>  <!--Grafica despues de la consulta-->
                                              </div>
                                          </div> 
                                      </div> 

                                      <div class="span3">
                                        <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                          <div class="widget-header" style="background: #B20034" align="left">
                                              <i class="icon-calendar"> <strong><font size="3">Fechas a consultar</font></strong></i>                                                  
                                          </div>
                                          <div class="widget-content">
                                            <center>
                                              <label>Fecha de inicio</label>
                                              <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                  <span class="add-on"><i class="icon-th"></i></span>
                                                  <span class="add-on"><i class="icon-remove"></i></span>
                                                  <input class="form-control span7" size="15" type="text" value="" readonly id="fecha_inicioPt">
                                              </div> 
                                              <label>Fecha de término</label>
                                              <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                  <span class="add-on"><i class="icon-th"></i></span>
                                                  <span class="add-on"><i class="icon-remove"></i></span>
                                                  <input class="form-control span7" size="15" type="text" value="" readonly id="fecha_finPt">
                                              </div>
                                              <input type="hidden" name="vtab" id="vtab6" value="6">
                                              <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta_pt">Consultar</button>
                                            </center>
                                          </div> 
                                        </div>  
                                      </div>

                                    </div>
                                  </div>
                              </div>
                            </div>  

                            <div id="barras7" class="tab-pane fade"> 
                              <div class="container-fluid">
                                  <div class="row-fluid">
                                    <div class="span12">
                                      <div class="span9">                                          
                                          <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                              <div class="widget-header" style="background: #B20034">
                                                  <i class="icon-bar-chart"> <strong><font size="3">MORENA</font></strong></i>                                              
                                              </div>
                                              <div class="widget-content">                                          
                                                  <div id="chart_div12" style="height: 400px;"></div> 
                                                  <div id="con7"></div>  <!--Grafica despues de la consulta-->
                                              </div>
                                          </div> 
                                      </div> 

                                      <div class="span3">
                                        <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                          <div class="widget-header" style="background: #B20034" align="left">
                                              <i class="icon-calendar"> <strong><font size="3">Fechas a consultar</font></strong></i>                                                  
                                          </div>
                                          <div class="widget-content">
                                            <center>
                                              <label>Fecha de inicio</label>
                                              <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                  <span class="add-on"><i class="icon-th"></i></span>
                                                  <span class="add-on"><i class="icon-remove"></i></span>
                                                  <input class="form-control span7" size="15" type="text" value="" readonly id="fecha_inicioMorena">
                                              </div> 
                                              <label>Fecha de término</label>
                                              <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                  <span class="add-on"><i class="icon-th"></i></span>
                                                  <span class="add-on"><i class="icon-remove"></i></span>
                                                  <input class="form-control span7" size="15" type="text" value="" readonly id="fecha_finMorena">
                                              </div>
                                              <input type="hidden" name="vtab" id="vtab7" value="7">
                                              <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta_morena">Consultar</button>
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
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart2);    

    ////////PRI
    <?php //char1  
        $a = array();
        foreach ($pri as $pri) 
        {
            $a[] = array(
                "fecha" => $pri->fecha,
                "seguidores" => $pri->seguidores,
                "siguiendo" => $pri->siguiendo,
                "tweets" => $pri->tweets,
                "promedio" => ($pri->seguidores+$pri->siguiendo+$pri->tweets)/3
            );
        }                       
    ?> 
    <?php //char2  
        $a2 = array();
        foreach ($jips_2015 as $jips_2015) 
        {
            $a2[] = array(
                "fecha" => $jips_2015->fecha,
                "seguidores" => $jips_2015->seguidores,
                "siguiendo" => $jips_2015->siguiendo,
                "tweets" => $jips_2015->tweets,
                "promedio" => ($jips_2015->seguidores+$jips_2015->siguiendo+$jips_2015->tweets)/3
            );
        }                       
    ?> 
    <?php //char3  
        $a3 = array();
        foreach ($JIPSColima as $JIPSColima) 
        {
            $a3[] = array(
                "fecha" => $JIPSColima->fecha,
                "seguidores" => $JIPSColima->seguidores,
                "siguiendo" => $JIPSColima->siguiendo,
                "tweets" => $JIPSColima->tweets,
                "promedio" => ($JIPSColima->seguidores+$JIPSColima->siguiendo+$JIPSColima->tweets)/3
            );
        }                       
    ?> 
    <?php //char4  
        $a4 = array();
        foreach ($jipsvdea as $jipsvdea) 
        {
            $a4[] = array(
                "fecha" => $jipsvdea->fecha,
                "seguidores" => $jipsvdea->seguidores,
                "siguiendo" => $jipsvdea->siguiendo,
                "tweets" => $jipsvdea->tweets,
                "promedio" => ($jipsvdea->seguidores+$jipsvdea->siguiendo+$jipsvdea->tweets)/3
            );
        }                       
    ?>
    <?php //char5  
        $a5 = array();
        foreach ($MiSelfiecoNacho as $MiSelfiecoNacho) 
        {
            $a5[] = array(
                "fecha" => $MiSelfiecoNacho->fecha,
                "seguidores" => $MiSelfiecoNacho->seguidores,
                "siguiendo" => $MiSelfiecoNacho->siguiendo,
                "tweets" => $MiSelfiecoNacho->tweets,
                "promedio" => ($MiSelfiecoNacho->seguidores+$MiSelfiecoNacho->siguiendo+$MiSelfiecoNacho->tweets)/3
            );
        }                       
    ?>
    ////////PAN
    <?php //char6  
        $a6 = array();
        foreach ($PANDColima as $PANDColima) 
        {
            $a6[] = array(
                "fecha" => $PANDColima->fecha,
                "seguidores" => $PANDColima->seguidores,
                "siguiendo" => $PANDColima->siguiendo,
                "tweets" => $PANDColima->tweets,
                "promedio" => ($PANDColima->seguidores+$PANDColima->siguiendo+$PANDColima->tweets)/3
            );
        }                       
    ?>
    <?php //char8 
        $a8 = array();
        foreach ($cdepancolima as $cdepancolima) 
        {
            $a8[] = array(
                "fecha" => $cdepancolima->fecha,
                "seguidores" => $cdepancolima->seguidores,
                "siguiendo" => $cdepancolima->siguiendo,
                "tweets" => $cdepancolima->tweets,
                "promedio" => ($cdepancolima->seguidores+$cdepancolima->siguiendo+$cdepancolima->tweets)/3
            );
        }                       
    ?>
    ////////PRD
    <?php //char7 
        $a7 = array();
        foreach ($PRDcolima as $PRDcolima) 
        {
            $a7[] = array(
                "fecha" => $PRDcolima->fecha,
                "seguidores" => $PRDcolima->seguidores,
                "siguiendo" => $PRDcolima->siguiendo,
                "tweets" => $PRDcolima->tweets,
                "promedio" => ($PRDcolima->seguidores+$PRDcolima->siguiendo+$PRDcolima->tweets)/3
            );
        }                       
    ?>
    ////////MOVIMIENTO CIUDADANO
    <?php //char9 
        $a9 = array();
        foreach ($MovCiudadanoCol as $MovCiudadanoCol) 
        {
            $a9[] = array(
                "fecha" => $MovCiudadanoCol->fecha,
                "seguidores" => $MovCiudadanoCol->seguidores,
                "siguiendo" => $MovCiudadanoCol->siguiendo,
                "tweets" => $MovCiudadanoCol->tweets,
                "promedio" => ($MovCiudadanoCol->seguidores+$MovCiudadanoCol->siguiendo+$MovCiudadanoCol->tweets)/3
            );
        }                       
    ?>
    ////////VERDE
    <?php //char10 
        $a10 = array();
        foreach ($ColPartidoVerde as $ColPartidoVerde) 
        {
            $a10[] = array(
                "fecha" => $ColPartidoVerde->fecha,
                "seguidores" => $ColPartidoVerde->seguidores,
                "siguiendo" => $ColPartidoVerde->siguiendo,
                "tweets" => $ColPartidoVerde->tweets,
                "promedio" => ($ColPartidoVerde->seguidores+$ColPartidoVerde->siguiendo+$ColPartidoVerde->tweets)/3
            );
        }                       
    ?>
    ////////PT
    <?php //char11 
        $a11 = array();
        foreach ($PT_Colima as $PT_Colima) 
        {
            $a11[] = array(
                "fecha" => $PT_Colima->fecha,
                "seguidores" => $PT_Colima->seguidores,
                "siguiendo" => $PT_Colima->siguiendo,
                "tweets" => $PT_Colima->tweets,
                "promedio" => ($PT_Colima->seguidores+$PT_Colima->siguiendo+$PT_Colima->tweets)/3
            );
        }                       
    ?>
    ////////MORENA
    <?php //char12 
        $a12 = array();
        foreach ($MorenaColima1 as $MorenaColima1) 
        {
            $a12[] = array(
                "fecha" => $MorenaColima1->fecha,
                "seguidores" => $MorenaColima1->seguidores,
                "siguiendo" => $MorenaColima1->siguiendo,
                "tweets" => $MorenaColima1->tweets,
                "promedio" => ($MorenaColima1->seguidores+$MorenaColima1->siguiendo+$MorenaColima1->tweets)/3
            );
        }                       
    ?>

    ////////////////////////////////////////PRI
    function drawChart() {
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
        title: '@PRI_Colima',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      chart.draw(data, options);

      //////////////char2
      var data2 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
          <?php for ($i=0; $i<count($a2); $i++) {
              ?>
              ['<?php echo $a2[$i]['fecha'] ?>', <?php echo $a2[$i]['seguidores'] ?>, <?php echo $a2[$i]['siguiendo'] ?>, <?php echo $a2[$i]['tweets'] ?>, <?php echo $a2[$i]['promedio'] ?>],
          <?php } ?>
        ]
      );  
      var options2 = {
        title: '@JIPS2015',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart2 = new google.visualization.ComboChart(document.getElementById('chart_div2'));
      chart2.draw(data2, options2);

    //////////////char3
    var data3 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
          <?php for ($i=0; $i<count($a3); $i++) {
              ?>
              ['<?php echo $a3[$i]['fecha'] ?>', <?php echo $a3[$i]['seguidores'] ?>, <?php echo $a3[$i]['siguiendo'] ?>, <?php echo $a3[$i]['tweets'] ?>, <?php echo $a3[$i]['promedio'] ?>],
          <?php } ?>
        ]
      );  
      var options3 = {
        title: '@JIPSColima',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart3 = new google.visualization.ComboChart(document.getElementById('chart_div3'));
      chart3.draw(data3, options3);

      //////////////char4
    var data4 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
          <?php for ($i=0; $i<count($a4); $i++) {
              ?>
              ['<?php echo $a4[$i]['fecha'] ?>', <?php echo $a4[$i]['seguidores'] ?>, <?php echo $a4[$i]['siguiendo'] ?>, <?php echo $a4[$i]['tweets'] ?>, <?php echo $a4[$i]['promedio'] ?>],
          <?php } ?>
        ]
      );  
      var options4 = {
        title: '@jipsvdea',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div4'));
      chart4.draw(data4, options4);

        //////////////char5
    var data5 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
          <?php for ($i=0; $i<count($a5); $i++) {
              ?>
              ['<?php echo $a5[$i]['fecha'] ?>', <?php echo $a5[$i]['seguidores'] ?>, <?php echo $a5[$i]['siguiendo'] ?>, <?php echo $a5[$i]['tweets'] ?>, <?php echo $a5[$i]['promedio'] ?>],
          <?php } ?>
        ]
      );  
      var options5 = {
        title: '@MiSelfiecoNacho',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart5 = new google.visualization.ComboChart(document.getElementById('chart_div5'));
      chart5.draw(data5, options5);
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
    ////////////////////////////////////////PAN
    function drawChart2() {
      var data6 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
          <?php for ($i=0; $i<count($a6); $i++) {
              ?>
              ['<?php echo $a6[$i]['fecha'] ?>', <?php echo $a6[$i]['seguidores'] ?>, <?php echo $a6[$i]['siguiendo'] ?>, <?php echo $a6[$i]['tweets'] ?>, <?php echo $a6[$i]['promedio'] ?>],
          <?php } ?>
        ]
      );  
      var options6 = {
        title: '@PANDColima',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart6 = new google.visualization.ComboChart(document.getElementById('chart_div6'));
      chart6.draw(data6, options6);    

      //////////////char8
      var data8 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
          <?php for ($i=0; $i<count($a8); $i++) {
              ?>
              ['<?php echo $a8[$i]['fecha'] ?>', <?php echo $a8[$i]['seguidores'] ?>, <?php echo $a8[$i]['siguiendo'] ?>, <?php echo $a8[$i]['tweets'] ?>, <?php echo $a8[$i]['promedio'] ?>],
          <?php } ?>
        ]
      );  
      var options8 = {
        title: '@cdepancolima',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart8 = new google.visualization.ComboChart(document.getElementById('chart_div8'));
      chart8.draw(data8, options8);    
    }

    ////////////////////////////////////////PRD
    function drawChart3() {
      var data7 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
          <?php for ($i=0; $i<count($a7); $i++) {
              ?>
              ['<?php echo $a7[$i]['fecha'] ?>', <?php echo $a7[$i]['seguidores'] ?>, <?php echo $a7[$i]['siguiendo'] ?>, <?php echo $a7[$i]['tweets'] ?>, <?php echo $a7[$i]['promedio'] ?>],
          <?php } ?>
        ]
      );  
      var options7 = {
        title: '@PRDcolima',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart7 = new google.visualization.ComboChart(document.getElementById('chart_div7'));
      chart7.draw(data7, options7);      
    }

    ////////////////////////////////////////MOVIMIENTO CIUDADANO
    function drawChart4() {
      var data9 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
          <?php for ($i=0; $i<count($a9); $i++) {
              ?>
              ['<?php echo $a9[$i]['fecha'] ?>', <?php echo $a9[$i]['seguidores'] ?>, <?php echo $a9[$i]['siguiendo'] ?>, <?php echo $a9[$i]['tweets'] ?>, <?php echo $a9[$i]['promedio'] ?>],
          <?php } ?>
        ]
      );  
      var options9 = {
        title: '@MovCiudadanoCol',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart9 = new google.visualization.ComboChart(document.getElementById('chart_div9'));
      chart9.draw(data9, options9);      
    }

    ////////////////////////////////////////VERDE
    function drawChart5() {
      var data10 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
          <?php for ($i=0; $i<count($a10); $i++) {
              ?>
              ['<?php echo $a10[$i]['fecha'] ?>', <?php echo $a10[$i]['seguidores'] ?>, <?php echo $a10[$i]['siguiendo'] ?>, <?php echo $a10[$i]['tweets'] ?>, <?php echo $a10[$i]['promedio'] ?>],
          <?php } ?>
        ]
      );  
      var options10 = {
        title: '@ColPartidoVerde',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart10 = new google.visualization.ComboChart(document.getElementById('chart_div10'));
      chart10.draw(data10, options10);      
    }

    ////////////////////////////////////////PT
    function drawChart6() {
      var data11 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
          <?php for ($i=0; $i<count($a11); $i++) {
              ?>
              ['<?php echo $a11[$i]['fecha'] ?>', <?php echo $a11[$i]['seguidores'] ?>, <?php echo $a11[$i]['siguiendo'] ?>, <?php echo $a11[$i]['tweets'] ?>, <?php echo $a11[$i]['promedio'] ?>],
          <?php } ?>
        ]
      );  
      var options11 = {
        title: '@PT_Colima',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart11 = new google.visualization.ComboChart(document.getElementById('chart_div11'));
      chart11.draw(data11, options11);      
    }

    ////////////////////////////////////////MORENA
    function drawChart7() {
      var data12 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
          <?php for ($i=0; $i<count($a12); $i++) {
              ?>
              ['<?php echo $a12[$i]['fecha'] ?>', <?php echo $a12[$i]['seguidores'] ?>, <?php echo $a12[$i]['siguiendo'] ?>, <?php echo $a12[$i]['tweets'] ?>, <?php echo $a12[$i]['promedio'] ?>],
          <?php } ?>
        ]
      );  
      var options12 = {
        title: '@MorenaColima1',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart12 = new google.visualization.ComboChart(document.getElementById('chart_div12'));
      chart12.draw(data12, options12);      
    }
  </script>

  <script type="text/javascript">
    $(document).ready(function(){                                        
      $("#consulta_pri").click(function(event) {
        var fecha_inicio = document.getElementById("fecha_inicio").value; 
        var fecha_fin = document.getElementById("fecha_fin").value;  
        var vtab = document.getElementById("vtab1").value;
                
        var parametros = {
                "fecha_inicio": fecha_inicio,
                "fecha_fin": fecha_fin,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/partidos_RangoFechas');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con').html(html);   
          }
        });            
      });       
    });

    $(document).ready(function(){                                        
      $("#consulta_pan").click(function(event) {
        var fecha_inicio = document.getElementById("fecha_inicioPan").value; 
        var fecha_fin = document.getElementById("fecha_finPan").value;  
        var vtab = document.getElementById("vtab2").value;
                
        var parametros = {
                "fecha_inicio": fecha_inicio,
                "fecha_fin": fecha_fin,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/partidos_RangoFechas');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con2').html(html);   
          }
        });            
      });       
    });

    $(document).ready(function(){                                        
      $("#consulta_prd").click(function(event) {
        var fecha_inicio = document.getElementById("fecha_inicioPrd").value; 
        var fecha_fin = document.getElementById("fecha_finPrd").value;  
        var vtab = document.getElementById("vtab3").value;
                
        var parametros = {
                "fecha_inicio": fecha_inicio,
                "fecha_fin": fecha_fin,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/partidos_RangoFechas');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con3').html(html);   
          }
        });            
      });       
    });

    $(document).ready(function(){                                        
      $("#consulta_mc").click(function(event) {
        var fecha_inicio = document.getElementById("fecha_inicioMc").value; 
        var fecha_fin = document.getElementById("fecha_finMc").value;  
        var vtab = document.getElementById("vtab4").value;
                
        var parametros = {
                "fecha_inicio": fecha_inicio,
                "fecha_fin": fecha_fin,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/partidos_RangoFechas');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con4').html(html);   
          }
        });            
      });       
    });

    $(document).ready(function(){                                        
      $("#consulta_verde").click(function(event) {
        var fecha_inicio = document.getElementById("fecha_inicioVerde").value; 
        var fecha_fin = document.getElementById("fecha_finVerde").value;  
        var vtab = document.getElementById("vtab5").value;
                
        var parametros = {
                "fecha_inicio": fecha_inicio,
                "fecha_fin": fecha_fin,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/partidos_RangoFechas');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con5').html(html);   
          }
        });            
      });       
    });

    $(document).ready(function(){                                        
      $("#consulta_pt").click(function(event) {
        var fecha_inicio = document.getElementById("fecha_inicioPt").value; 
        var fecha_fin = document.getElementById("fecha_finPt").value;  
        var vtab = document.getElementById("vtab6").value;
                
        var parametros = {
                "fecha_inicio": fecha_inicio,
                "fecha_fin": fecha_fin,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/partidos_RangoFechas');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con6').html(html);   
          }
        });            
      });       
    });

    $(document).ready(function(){                                        
      $("#consulta_morena").click(function(event) {
        var fecha_inicio = document.getElementById("fecha_inicioMorena").value; 
        var fecha_fin = document.getElementById("fecha_finMorena").value;  
        var vtab = document.getElementById("vtab7").value;
                
        var parametros = {
                "fecha_inicio": fecha_inicio,
                "fecha_fin": fecha_fin,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/partidos_RangoFechas');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con7').html(html);   
          }
        });            
      });       
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
      },50)    
      $('#chart_div').width('100%');  
      $('#chart_div2').width('100%'); 
      $('#chart_div3').width('100%');  
      $('#chart_div4').width('100%');
      $('#chart_div5').width('100%');  
      $('#chart_div6').width('100%');
      $('#chart_div7').width('100%');  
    }   
  </script>

</body>
</html>

