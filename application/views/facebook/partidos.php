<html>
<head lang="es">
  <title>Candidatos por Partido</title> 
  <?php $this->load->view('comunes/header'); ?>
  <script src="<?php echo base_url()?>assets/facebook/d3/d3.min.js"></script>
  <script src="<?php echo base_url()?>assets/facebook/d3/d3.js"></script> 
  <script src="<?php echo base_url()?>assets/facebook/jsapi.js"></script> 
  <script src="<?php echo base_url()?>assets/facebook/recarga_partidos.js"></script> 
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
                          Partidos Políticos <small>Actividad en Facebook</small>
                        </h3>
                        <ul class="breadcrumb" id="ul_menu">
                            <li>
                                <i class="icon-flag"></i>
                                Partido 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-facebook"></i>
                                Facebook 
                                <i class="icon-angle-right"></i>                                
                            </li>                            
                        </ul>
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <center>
                      <div class="portlet-body form well">
                        <!--Código para el tap de pestañas-->   
                        <div class="bs-example bs-example-tabs">
                          <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a data-toggle="tab" href="#barras1" id="tab1">PRI</a></li> 
                            <li class=""><a data-toggle="tab" href="#barras2" id="tab2">PAN</a></li>                            
                            <li class=""><a data-toggle="tab" href="#barras3"id="tab3">PRD</a></li>                            
                            <li class=""><a data-toggle="tab" href="#barras4" id="tab4">MC</a></li>                                                        
                            <li class=""><a data-toggle="tab" href="#barras5" id="tab5">PV</a></li>                                                        
                            <li class=""><a data-toggle="tab" href="#barras6" id="tab6">PT</a></li>
                            <li class=""><a data-toggle="tab" href="#barras7" id="tab7">PM</a></li>                                                                                                                
                            <li class=""><a data-toggle="tab" href="#barras8" id="tab8">PNA</a></li>
                            <li class=""><a data-toggle="tab" href="#barras9" id="tab9">PES</a></li>
                            <li class=""><a data-toggle="tab" href="#barras10" id="tab10">PH</a></li>                                                                                                                                                                        
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
                                                    <h3>PRI</h3>                                                    
                                                </div>
                                                <div class="widget-content">                                          
                                                  <div id="chart_div" style="height: 400px;"></div> 
                                                  <div id="con"></div>  <!--Grafica despues de la consulta-->
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
                                                    <div id="chart_div2" style="height: 400px;"></div>
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
                                                    <div id="chart_div3" style="height: 400px;"></div> 
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
                                                    <div id="chart_div4" style="height: 400px;"></div> 
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
                                                    <div id="chart_div5" style="height: 400px;"></div> 
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
                                                    <div id="chart_div6" style="height: 400px;"></div> 
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
                                                    <i class="icon-bar-chart"> <strong><font size="3">Morena</font></strong></i>                                              
                                                </div>
                                                <div class="widget-content">                                          
                                                    <div id="chart_div7" style="height: 400px;"></div> 
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

                              <div id="barras8" class="tab-pane fade"> 
                                <div class="container-fluid">
                                    <div class="row-fluid">
                                      <div class="span12">
                                        <div class="span9">                                          
                                            <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                <div class="widget-header" style="background: #B20034">
                                                    <i class="icon-bar-chart"> <strong><font size="3">Nueva Alianza</font></strong></i>                                              
                                                </div>
                                                <div class="widget-content">                                          
                                                    <div id="chart_div8" style="height: 400px;"></div> 
                                                    <div id="con8"></div>  <!--Grafica despues de la consulta-->
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
                                                    <input class="form-control span7" size="15" type="text" value="" readonly id="fecha_iniciona">
                                                </div> 
                                                <label>Fecha de término</label>
                                                <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                    <span class="add-on"><i class="icon-th"></i></span>
                                                    <span class="add-on"><i class="icon-remove"></i></span>
                                                    <input class="form-control span7" size="15" type="text" value="" readonly id="fecha_finna">
                                                </div>
                                                <input type="hidden" name="vtab" id="vtab8" value="8">
                                                <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta_na">Consultar</button>
                                              </center>
                                            </div> 
                                          </div>  
                                        </div>

                                      </div>
                                    </div>
                                </div>
                              </div>
                                           
                              <div id="barras9" class="tab-pane fade"> 
                                <div class="container-fluid">
                                    <div class="row-fluid">
                                      <div class="span12">
                                        <div class="span9">                                          
                                            <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                <div class="widget-header" style="background: #B20034">
                                                    <i class="icon-bar-chart"> <strong><font size="3">Encuentro Social</font></strong></i>                                              
                                                </div>
                                                <div class="widget-content">                                          
                                                    <div id="chart_div9" style="height: 400px;"></div> 
                                                    <div id="con9"></div>  <!--Grafica despues de la consulta-->
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
                                                    <input class="form-control span7" size="15" type="text" value="" readonly id="fecha_inicioes">
                                                </div> 
                                                <label>Fecha de término</label>
                                                <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                    <span class="add-on"><i class="icon-th"></i></span>
                                                    <span class="add-on"><i class="icon-remove"></i></span>
                                                    <input class="form-control span7" size="15" type="text" value="" readonly id="fecha_fines">
                                                </div>
                                                <input type="hidden" name="vtab" id="vtab9" value="9">
                                                <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta_es">Consultar</button>
                                              </center>
                                            </div> 
                                          </div>  
                                        </div>

                                      </div>
                                    </div>
                                </div>
                              </div>

                              <div id="barras10" class="tab-pane fade"> 
                                <div class="container-fluid">
                                    <div class="row-fluid">
                                      <div class="span12">
                                        <div class="span9">                                          
                                            <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                <div class="widget-header" style="background: #B20034">
                                                    <i class="icon-bar-chart"> <strong><font size="3">Humanista</font></strong></i>                                              
                                                </div>
                                                <div class="widget-content">                                          
                                                    <div id="chart_div10" style="height: 400px;"></div> 
                                                    <div id="con10"></div>  <!--Grafica despues de la consulta-->
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
                                                    <input class="form-control span7" size="15" type="text" value="" readonly id="fecha_inicioh">
                                                </div> 
                                                <label>Fecha de término</label>
                                                <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                    <span class="add-on"><i class="icon-th"></i></span>
                                                    <span class="add-on"><i class="icon-remove"></i></span>
                                                    <input class="form-control span7" size="15" type="text" value="" readonly id="fecha_finh">
                                                </div>
                                                <input type="hidden" name="vtab" id="vtab10" value="10">
                                                <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta_h">Consultar</button>
                                              </center>
                                            </div> 
                                          </div>  
                                        </div>

                                      </div>
                                    </div>
                                </div>
                              </div>

                            </div>
                        </div> 
                      </div>
                    </center>
                </div>              
            </div>
        </div>
    </div>
  <?php $this->load->view('comunes/footer'); ?> 
</body>
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

<!--GRÁFICA POR PARTIDO PRI-->
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
                "Megusta" => $pri->Megusta,
                "PersonasHablan" => $pri->PersonasHablan
            );
        }                       
    ?>
    <?php //char2  
        $a2 = array();
        foreach ($pan as $pan) 
        {
            $a2[] = array(
                "fecha" => $pan->fecha,
                "Megusta" => $pan->Megusta,
                "PersonasHablan" => $pan->PersonasHablan
            );
        }                       
    ?>    
    <?php //char3  
        $a3 = array();
        foreach ($pna as $pna) 
        {
            $a3[] = array(
                "fecha" => $pna->fecha,
                "Megusta" => $pna->Megusta,
                "PersonasHablan" => $pna->PersonasHablan
            );
        }                       
    ?>   
    <?php //char4
        $a4 = array();
        foreach ($pv as $pv) 
        {
            $a4[] = array(
                "fecha" => $pv->fecha,
                "Megusta" => $pv->Megusta,
                "PersonasHablan" => $pv->PersonasHablan
            );
        }                       
    ?>       
    <?php //char5
        $a5 = array();
        foreach ($prd as $prd) 
        {
            $a5[] = array(
                "fecha" => $prd->fecha,
                "Megusta" => $prd->Megusta,
                "PersonasHablan" => $prd->PersonasHablan
            );
        }                       
    ?> 
    <?php //char6
        $a6 = array();
        foreach ($pt as $pt) 
        {
            $a6[] = array(
                "fecha" => $pt->fecha,
                "Megusta" => $pt->Megusta,
                "PersonasHablan" => $pt->PersonasHablan
            );
        }                       
    ?> 
    <?php //char7
        $a7 = array();
        foreach ($pmc as $pmc) 
        {
            $a7[] = array(
                "fecha" => $pmc->fecha,
                "Megusta" => $pmc->Megusta,
                "PersonasHablan" => $pmc->PersonasHablan
            );
        }                       
    ?> 
    <?php //char8
        $a8 = array();
        foreach ($pm as $pm) 
        {
            $a8[] = array(
                "fecha" => $pm->fecha,
                "Megusta" => $pm->Megusta,
                "PersonasHablan" => $pm->PersonasHablan
            );
        }                       
    ?>     
    <?php //char9
        $a9 = array();
        foreach ($pes as $pes) 
        {
            $a9[] = array(
                "fecha" => $pes->fecha,
                "Megusta" => $pes->Megusta,
                "PersonasHablan" => $pes->PersonasHablan
            );
        }                       
    ?>      
    <?php //char10
        $a10 = array();
        foreach ($ph as $ph) 
        {
            $a10[] = array(
                "fecha" => $ph->fecha,
                "Megusta" => $ph->Megusta,
                "PersonasHablan" => $ph->PersonasHablan
            );
        }                       
    ?>  

function drawChart() {
  // Some raw data (not necessarily accurate)
      //Chart1
      var data = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Likes', 'Post'],
          <?php for ($i=0; $i<count($a); $i++) {
              ?>
              ['<?php echo $a[$i]['fecha'] ?>', <?php echo $a[$i]['Megusta'] ?>, <?php echo $a[$i]['PersonasHablan'] ?>],
          <?php } ?>
        ]
      );  
      var options = {
        title: '',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      chart.draw(data, options);
}      
function drawChart2(){
    //Chart2
      var data2 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Likes', 'Post'],
          <?php for ($i=0; $i<count($a2); $i++) {
              ?>
              ['<?php echo $a2[$i]['fecha'] ?>', <?php echo $a2[$i]['Megusta'] ?>, <?php echo $a2[$i]['PersonasHablan'] ?>],
          <?php } ?>
        ]
      );  
      var options2 = {
        title: '',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart2 = new google.visualization.ComboChart(document.getElementById('chart_div2'));
      chart2.draw(data2, options2);                  
}
 function drawChart3(){ 
      //Chart3
     var data3 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Likes', 'Post'],
          <?php for ($i=0; $i<count($a3); $i++) {
              ?>
              ['<?php echo $a3[$i]['fecha'] ?>', <?php echo $a3[$i]['Megusta'] ?>, <?php echo $a3[$i]['PersonasHablan'] ?>],
          <?php } ?>
        ]
      );  
      var options3 = {
        title: '',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart3 = new google.visualization.ComboChart(document.getElementById('chart_div3'));
      chart3.draw(data3, options3);      
}    
function drawChart4(){    
    //Chart4
     var data4 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Likes', 'Post'],
          <?php for ($i=0; $i<count($a4); $i++) {
              ?>
              ['<?php echo $a4[$i]['fecha'] ?>', <?php echo $a4[$i]['Megusta'] ?>, <?php echo $a4[$i]['PersonasHablan'] ?>],
          <?php } ?>
        ]
      );  
      var options4 = {
        title: '',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div4'));
      chart4.draw(data4, options4);           
}    
function drawChart5(){
      //Chart5
     var data5 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Likes', 'Post'],
          <?php for ($i=0; $i<count($a5); $i++) {
              ?>
              ['<?php echo $a5[$i]['fecha'] ?>', <?php echo $a5[$i]['Megusta'] ?>, <?php echo $a5[$i]['PersonasHablan'] ?>],
          <?php } ?>
        ]
      );  
      var options5 = {
        title: '',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart5 = new google.visualization.ComboChart(document.getElementById('chart_div5'));
      chart5.draw(data5, options5);   
}
function drawChart6(){    
    //Chart6
     var data6 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Likes', 'Post'],
          <?php for ($i=0; $i<count($a6); $i++) {
              ?>
              ['<?php echo $a6[$i]['fecha'] ?>', <?php echo $a6[$i]['Megusta'] ?>, <?php echo $a6[$i]['PersonasHablan'] ?>],
          <?php } ?>
        ]
      );  
      var options6 = {
        title: '',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart6 = new google.visualization.ComboChart(document.getElementById('chart_div6'));
      chart6.draw(data6, options6);                      
}
function drawChart7(){      
      //Chart7
     var data7 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Likes', 'Post'],
          <?php for ($i=0; $i<count($a7); $i++) {
              ?>
              ['<?php echo $a7[$i]['fecha'] ?>', <?php echo $a7[$i]['Megusta'] ?>, <?php echo $a7[$i]['PersonasHablan'] ?>],
          <?php } ?>
        ]
      );  
      var options7 = {
        title: '',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart7 = new google.visualization.ComboChart(document.getElementById('chart_div7'));
      chart7.draw(data7, options7);       
}      
function drawChart8(){
      //Chart8
     var data8 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Likes', 'Post'],
          <?php for ($i=0; $i<count($a8); $i++) {
              ?>
              ['<?php echo $a8[$i]['fecha'] ?>', <?php echo $a8[$i]['Megusta'] ?>, <?php echo $a8[$i]['PersonasHablan'] ?>],
          <?php } ?>
        ]
      );  
      var options8 = {
        title: '',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart8 = new google.visualization.ComboChart(document.getElementById('chart_div8'));
      chart8.draw(data8, options8);       
}
function drawChart9(){      
    //Chart9
     var data9 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Likes', 'Post'],
          <?php for ($i=0; $i<count($a9); $i++) {
              ?>
              ['<?php echo $a9[$i]['fecha'] ?>', <?php echo $a9[$i]['Megusta'] ?>, <?php echo $a9[$i]['PersonasHablan'] ?>],
          <?php } ?>
        ]
      );  
      var options9 = {
        title: '',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart9 = new google.visualization.ComboChart(document.getElementById('chart_div9'));
      chart9.draw(data9, options9);     
}
function drawChart10(){    
      //Chart10
     var data10 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Likes', 'Post'],
          <?php for ($i=0; $i<count($a10); $i++) {
              ?>
              ['<?php echo $a10[$i]['fecha'] ?>', <?php echo $a10[$i]['Megusta'] ?>, <?php echo $a10[$i]['PersonasHablan'] ?>],
          <?php } ?>
        ]
      );  
      var options10 = {
        title: '',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart10 = new google.visualization.ComboChart(document.getElementById('chart_div10'));
      chart10.draw(data10, options10);         
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
        url: '<?php echo site_url('facebook/controlador_consultas/partidos_RangoFechas');?>',                                      
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
        url: '<?php echo site_url('facebook/controlador_consultas/partidos_RangoFechas');?>',                                      
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
        url: '<?php echo site_url('facebook/controlador_consultas/partidos_RangoFechas');?>',                                      
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
        url: '<?php echo site_url('facebook/controlador_consultas/partidos_RangoFechas');?>',                                      
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

  $(document).ready(function(){                                        
    $("#consulta_na").click(function(event) {
      var fecha_inicio = document.getElementById("fecha_iniciona").value; 
      var fecha_fin = document.getElementById("fecha_finna").value;  
      var vtab = document.getElementById("vtab8").value;
              
      var parametros = {
              "fecha_inicio": fecha_inicio,
              "fecha_fin": fecha_fin,
              "vtab" : vtab
      };
      $.ajax({                                            
        type:"post",
        data:parametros,
        url: '<?php echo site_url('facebook/controlador_consultas/partidos_RangoFechas');?>',                                      
        dataType: 'html',
        success: function (html) {
          $('#con8').html(html);   
        }
      });            
    });       
  });  
  
  $(document).ready(function(){                                        
    $("#consulta_na").click(function(event) {
      var fecha_inicio = document.getElementById("fecha_inicioes").value; 
      var fecha_fin = document.getElementById("fecha_fines").value;  
      var vtab = document.getElementById("vtab9").value;
              
      var parametros = {
              "fecha_inicio": fecha_inicio,
              "fecha_fin": fecha_fin,
              "vtab" : vtab
      };
      $.ajax({                                            
        type:"post",
        data:parametros,
        url: '<?php echo site_url('facebook/controlador_consultas/partidos_RangoFechas');?>',                                      
        dataType: 'html',
        success: function (html) {
          $('#con9').html(html);   
        }
      });            
    });       
  });  

  $(document).ready(function(){                                        
    $("#consulta_na").click(function(event) {
      var fecha_inicio = document.getElementById("fecha_inicioh").value; 
      var fecha_fin = document.getElementById("fecha_finh").value;  
      var vtab = document.getElementById("vtab10").value;
              
      var parametros = {
              "fecha_inicio": fecha_inicio,
              "fecha_fin": fecha_fin,
              "vtab" : vtab
      };
      $.ajax({                                            
        type:"post",
        data:parametros,
        url: '<?php echo site_url('facebook/controlador_consultas/partidos_RangoFechas');?>',                                      
        dataType: 'html',
        success: function (html) {
          $('#con10').html(html);   
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
        drawChart8();
        drawChart9();
        drawChart10();
      },50)    
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
    }   
  </script>
</html> 