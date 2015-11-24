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
  <title>Dip. Locales</title> 
  <?php $this->load->view('comunes/header'); ?>
  <script src="<?php echo base_url()?>assets/twitter/jsapi.js"></script> 
  <script src="<?php echo base_url()?>assets/twitter/tabsDL.js"></script>  
  <!--Para poder usar el calendario, importar las librerias-->
  <link href="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <!--Para usar la nube-->
  <script src="<?php echo base_url()?>assets/twitter/d3/d3.js"></script> 
  <script src="<?php echo base_url()?>assets/twitter/d3/d3.layout.cloud.js"></script>
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
                            Candidatos a Diputado Local <small>Actividad en Twitter </small>
                        </h3>
                        <ul class="breadcrumb" id="ul_menu">
                             <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo site_url('inicio'); ?>">Home</a> 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-table"></i>
                                Cargo 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-twitter"></i>
                                Twitter 
                                <i class="icon-angle-right"></i>                                
                            </li>
                            <li>
                                <i class="icon-user"></i>
                                <a href="<?php echo site_url('twitter/controlador_inicio/dip_locales');?>">Diputado Local</a>
                            </li>                            
                        </ul>
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                  <center>
                    <div class="portlet-body form well">
                      <div id="alert"></div> 
                      <div id="alert2"></div> 
                      <!--Código para el tab de pestañas-->   
                      <div class="bs-example bs-example-tabs">
                        <ul class="nav nav-tabs" id="myTab">
                          <li class="active"><a data-toggle="tab" href="#barras1">Distrito 1</a></li>
                          <li><a data-toggle="tab" href="#barras2">Distrito 2</a></li>
                          <li><a data-toggle="tab" href="#barras3">Distrito 3</a></li>
                          <li><a data-toggle="tab" href="#barras4">Distrito 4</a></li>
                          <li><a data-toggle="tab" href="#barras5">Distrito 5</a></li>
                          <li><a data-toggle="tab" href="#barras6">Distrito 6</a></li>
                          <li><a data-toggle="tab" href="#barras7">Distrito 7</a></li>
                          <li><a data-toggle="tab" href="#barras8">Distrito 8</a></li>
                          <li><a data-toggle="tab" href="#barras9">Distrito 9</a></li>
                          <li><a data-toggle="tab" href="#barras10">Distrito 10</a></li>
                          <li><a data-toggle="tab" href="#barras11">Distrito 11</a></li>
                          <li><a data-toggle="tab" href="#barras12">Distrito 12</a></li>
                          <li><a data-toggle="tab" href="#barras13">Distrito 13</a></li>
                          <li><a data-toggle="tab" href="#barras14">Distrito 14</a></li>
                          <li><a data-toggle="tab" href="#barras15">Distrito 15</a></li>
                          <li><a data-toggle="tab" href="#barras16">Distrito 16</a></li> 
                          <li><a data-toggle="tab" href="#nube" onclick="nube();">Nube de Palabras</a></li>                         
                        </ul>
                          <div class="tab-content" id="tabs">

                          <div id="barras1" class="tab-pane fade active in"> 
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  

                                    <div class="span9">  
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                          <i class="icon-bar-chart"></i>
                                          <h3 id="fecha_contenedor"><?php echo $ultima_fecha ?></h3>                                                    
                                        </div>
                                        <div class="widget-content">                                          
                                          <div id="chart_div"></div>  
                                          <div id="con"></div> 
                                        </div>
                                      </div> 
                                    </div> 

                                    <div class="span3">
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                            <i class="icon-calendar"></i>
                                            <h3>Fecha a consultar</h3>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab1" value="1">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta">Consultar</button>
                                          </center>
                                        </div> 
                                      </div>  
                                    </div>
                                    <!--Tabla con candidatos con cuentas-->
                                    <div class="span3">
                                      <div class="span12">Candidatos que tienen cuenta de Twitter</div>
                                      <table class="table table-hover table-bordered">
                                        <tbody> 
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Hilda Ceballos </center></td>
                                          </tr> 
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Yadira Carrillo</center></td>
                                          </tr>                        
                                        </tbody>
                                      </table>                                      
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
                                        <div class="widget-header" style="background: #B20034" align="left">
                                          <i class="icon-bar-chart"></i>
                                          <h3 id="fecha_contenedor2"><?php echo $ultima_fecha ?></h3>                                                    
                                        </div>
                                        <div class="widget-content">                                          
                                          <div id="chart_div2"></div>  
                                          <div id="con2"></div> 
                                        </div>
                                      </div> 
                                    </div> 

                                    <div class="span3">
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                            <i class="icon-calendar"></i>
                                            <h3>Fecha a consultar</h3>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha2">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab2" value="2">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta2">Consultar</button>
                                          </center>
                                        </div> 
                                      </div>  
                                    </div>
                                    <!--Tabla con candidatos con cuentas-->
                                    <div class="span3">
                                      <div class="span12">Candidatos que tienen cuenta de Twitter</div>
                                      <table class="table table-hover table-bordered">
                                        <tbody> 
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PVEM.gif" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Viviana Ramirez</center></td>
                                          </tr> 
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Guillermo Rangel</center></td>
                                          </tr>                        
                                        </tbody>
                                      </table>                                      
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
                                        <div class="widget-header" style="background: #B20034" align="left">
                                          <i class="icon-bar-chart"></i>
                                          <h3 id="fecha_contenedor3"><?php echo $ultima_fecha ?></h3>                                                    
                                        </div>
                                        <div class="widget-content">                                          
                                          <div id="chart_div3"></div>  
                                          <div id="con3"></div> 
                                        </div>
                                      </div> 
                                    </div> 

                                    <div class="span3">
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                            <i class="icon-calendar"></i>
                                            <h3>Fecha a consultar</h3>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha3">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab3" value="3">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta3">Consultar</button>
                                          </center>
                                        </div> 
                                      </div>  
                                    </div>
                                    <!--Tabla con candidatos con cuentas-->
                                    <div class="span3">
                                      <div class="span12">Candidatos que tienen cuenta de Twitter</div>
                                      <table class="table table-hover table-bordered">
                                        <tbody> 
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/pan.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Crispín Guerra</center></td>
                                          </tr> 
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PVEM.gif" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Isis Villaseñor</center></td>
                                          </tr>  
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>AlmaDeliaArreolaCruz</center></td>
                                          </tr>                                        
                                        </tbody>
                                      </table>                                      
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
                                        <div class="widget-header" style="background: #B20034" align="left">
                                          <i class="icon-bar-chart"></i>
                                          <h3 id="fecha_contenedor4"><?php echo $ultima_fecha ?></h3>                                                    
                                        </div>
                                        <div class="widget-content">                                          
                                          <div id="chart_div4"></div>  
                                          <div id="con4"></div> 
                                        </div>
                                      </div> 
                                    </div> 

                                    <div class="span3">
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                            <i class="icon-calendar"></i>
                                            <h3>Fecha a consultar</h3>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha4">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab4" value="4">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta4">Consultar</button>
                                          </center>
                                        </div> 
                                      </div>  
                                    </div>
                                    <!--Tabla con candidatos con cuentas-->
                                    <div class="span3">
                                      <div class="span12">Candidatos que tienen cuenta de Twitter</div>
                                      <table class="table table-hover table-bordered">
                                        <tbody> 
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/pan.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Janeth Paz</center></td>
                                          </tr>  
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Juanita Andrés</center></td>
                                          </tr>                                        
                                        </tbody>
                                      </table>                                      
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
                                        <div class="widget-header" style="background: #B20034" align="left">
                                          <i class="icon-bar-chart"></i>
                                          <h3 id="fecha_contenedor5"><?php echo $ultima_fecha ?></h3>                                                    
                                        </div>
                                        <div class="widget-content">                                          
                                          <div id="chart_div5"></div>  
                                          <div id="con5"></div> 
                                        </div>
                                      </div> 
                                    </div> 

                                    <div class="span3">
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                            <i class="icon-calendar"></i>
                                            <h3>Fecha a consultar</h3>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha5">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab5" value="5">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta5">Consultar</button>
                                          </center>
                                        </div> 
                                      </div>  
                                    </div>
                                    <!--Tabla con candidatos con cuentas-->
                                    <div class="span3">
                                      <div class="span12">Candidatos que tienen cuenta de Twitter</div>
                                      <table class="table table-hover table-bordered">
                                        <tbody> 
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PVEM.gif" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Lupe Benavides Dip</center></td>
                                          </tr>                                        
                                        </tbody>
                                      </table>                                      
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
                                        <div class="widget-header" style="background: #B20034" align="left">
                                          <i class="icon-bar-chart"></i>
                                          <h3 id="fecha_contenedor6"><?php echo $ultima_fecha ?></h3>                                                    
                                        </div>
                                        <div class="widget-content">                                          
                                          <div id="chart_div6"></div>  
                                          <div id="con6"></div> 
                                        </div>
                                      </div> 
                                    </div> 

                                    <div class="span3">
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                            <i class="icon-calendar"></i>
                                            <h3>Fecha a consultar</h3>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha6">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab6" value="6">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta6">Consultar</button>
                                          </center>
                                        </div> 
                                      </div>  
                                    </div>
                                    <!--Tabla con candidatos con cuentas-->
                                    <div class="span3">
                                      <div class="span12">Candidatos que tienen cuenta de Twitter</div>
                                      <table class="table table-hover table-bordered">
                                        <tbody> 
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PVEM.gif" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>OCTAVIO TINTOS</center></td>
                                          </tr>                                        
                                        </tbody>
                                      </table>                                      
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
                                        <div class="widget-header" style="background: #B20034" align="left">
                                          <i class="icon-bar-chart"></i>
                                          <h3 id="fecha_contenedor7"><?php echo $ultima_fecha ?></h3>                                                    
                                        </div>
                                        <div class="widget-content">                                          
                                          <div id="chart_div7"></div>  
                                          <div id="con7"></div> 
                                        </div>
                                      </div> 
                                    </div> 

                                    <div class="span3">
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                            <i class="icon-calendar"></i>
                                            <h3>Fecha a consultar</h3>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha7">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab7" value="7">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta7">Consultar</button>
                                          </center>
                                        </div> 
                                      </div>  
                                    </div>
                                    <!--Tabla con candidatos con cuentas-->
                                    <div class="span3">
                                      <div class="span12">Candidatos que tienen cuenta de Twitter</div>
                                      <table class="table table-hover table-bordered">
                                        <tbody> 
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRD.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Sara Cernas Verduzco</center></td>
                                          </tr> 
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PT.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Joel Padilla Peña</center></td>
                                          </tr>                                        
                                        </tbody>
                                      </table>                                      
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
                                        <div class="widget-header" style="background: #B20034" align="left">
                                          <i class="icon-bar-chart"></i>
                                          <h3 id="fecha_contenedor8"><?php echo $ultima_fecha ?></h3>                                                    
                                        </div>
                                        <div class="widget-content">                                          
                                          <div id="chart_div8"></div>  
                                          <div id="con8"></div> 
                                        </div>
                                      </div> 
                                    </div> 

                                    <div class="span3">
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                            <i class="icon-calendar"></i>
                                            <h3>Fecha a consultar</h3>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha8">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab8" value="8">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta8">Consultar</button>
                                          </center>
                                        </div> 
                                      </div>  
                                    </div>
                                    <!--Tabla con candidatos con cuentas-->
                                    <div class="span3">
                                      <div class="span12">Candidatos que tienen cuenta de Twitter</div>
                                      <table class="table table-hover table-bordered">
                                        <tbody> 
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/pan.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Meyly Meyly</center></td>
                                          </tr> 
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PVEM.gif" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Héctor Magaña Lara</center></td>
                                          </tr>                                        
                                        </tbody>
                                      </table>                                      
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
                                        <div class="widget-header" style="background: #B20034" align="left">
                                          <i class="icon-bar-chart"></i>
                                          <h3 id="fecha_contenedor9"><?php echo $ultima_fecha ?></h3>                                                    
                                        </div>
                                        <div class="widget-content">                                          
                                          <div id="chart_div9"></div>  
                                          <div id="con9"></div> 
                                        </div>
                                      </div> 
                                    </div> 

                                    <div class="span3">
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                            <i class="icon-calendar"></i>
                                            <h3>Fecha a consultar</h3>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha9">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab9" value="9">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta9">Consultar</button>
                                          </center>
                                        </div> 
                                      </div>  
                                    </div>
                                    <!--Tabla con candidatos con cuentas-->
                                    <div class="span3">
                                      <div class="span12">Candidatos que tienen cuenta de Twitter</div>
                                      <table class="table table-hover table-bordered">
                                        <tbody>
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Eusebio Mesina Reyes</center></td>
                                          </tr>                                        
                                        </tbody>
                                      </table>                                      
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
                                        <div class="widget-header" style="background: #B20034" align="left">
                                          <i class="icon-bar-chart"></i>
                                          <h3 id="fecha_contenedor10"><?php echo $ultima_fecha ?></h3>                                                    
                                        </div>
                                        <div class="widget-content">                                          
                                          <div id="chart_div10"></div>  
                                          <div id="con10"></div> 
                                        </div>
                                      </div> 
                                    </div> 

                                    <div class="span3">
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                            <i class="icon-calendar"></i>
                                            <h3>Fecha a consultar</h3>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha10">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab10" value="10">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta10">Consultar</button>
                                          </center>
                                        </div> 
                                      </div>  
                                    </div>
                                    <!--Tabla con candidatos con cuentas-->
                                    <div class="span3">
                                      <div class="span12">Candidatos que tienen cuenta de Twitter</div>
                                      <table class="table table-hover table-bordered">
                                        <tbody>
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/pan.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>adriana mesina tena</center></td>
                                          </tr>
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PVEM.gif" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Juan Carlos Pinto</center></td>
                                          </tr>                                        
                                        </tbody>
                                      </table>                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>   

                            <div id="barras11" class="tab-pane fade"> 
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  

                                    <div class="span9">  
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                          <i class="icon-bar-chart"></i>
                                          <h3 id="fecha_contenedor11"><?php echo $ultima_fecha ?></h3>                                                    
                                        </div>
                                        <div class="widget-content">                                          
                                          <div id="chart_div11"></div>  
                                          <div id="con11"></div> 
                                        </div>
                                      </div> 
                                    </div> 

                                    <div class="span3">
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                            <i class="icon-calendar"></i>
                                            <h3>Fecha a consultar</h3>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha11">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab11" value="11">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta11">Consultar</button>
                                          </center>
                                        </div> 
                                      </div>  
                                    </div>
                                    <!--Tabla con candidatos con cuentas-->
                                    <div class="span3">
                                      <div class="span12">Candidatos que tienen cuenta de Twitter</div>
                                      <table class="table table-hover table-bordered">
                                        <tbody>
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PVEM.gif" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Armida Núñez García</center></td>
                                          </tr>                                        
                                        </tbody>
                                      </table>                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>  

                            <div id="barras12" class="tab-pane fade"> 
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  

                                    <div class="span9">  
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                          <i class="icon-bar-chart"></i>
                                          <h3 id="fecha_contenedor12"><?php echo $ultima_fecha ?></h3>                                                    
                                        </div>
                                        <div class="widget-content">                                          
                                          <div id="chart_div12"></div>  
                                          <div id="con12"></div> 
                                        </div>
                                      </div> 
                                    </div> 

                                    <div class="span3">
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                            <i class="icon-calendar"></i>
                                            <h3>Fecha a consultar</h3>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha12">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab12" value="12">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta12">Consultar</button>
                                          </center>
                                        </div> 
                                      </div>  
                                    </div>
                                    <!--Tabla con candidatos con cuentas-->
                                    <div class="span3">
                                      <div class="span12">Candidatos que tienen cuenta de Twitter</div>
                                      <table class="table table-hover table-bordered">
                                        <tbody>
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/pan.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Martha Sosa</center></td>
                                          </tr> 
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRD.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>ANA MARIA SANCHEZ LA</center></td>
                                          </tr>                                       
                                        </tbody>
                                      </table>                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>     

                            <div id="barras13" class="tab-pane fade"> 
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  

                                    <div class="span9">  
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                          <i class="icon-bar-chart"></i>
                                          <h3 id="fecha_contenedor13"><?php echo $ultima_fecha ?></h3>                                                    
                                        </div>
                                        <div class="widget-content">                                          
                                          <div id="chart_div13"></div>  
                                          <div id="con13"></div> 
                                        </div>
                                      </div> 
                                    </div> 

                                    <div class="span3">
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                            <i class="icon-calendar"></i>
                                            <h3>Fecha a consultar</h3>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha13">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab13" value="13">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta13">Consultar</button>
                                          </center>
                                        </div> 
                                      </div>  
                                    </div>
                                    <!--Tabla con candidatos con cuentas-->
                                    <div class="span3">
                                      <div class="span12">Candidatos que tienen cuenta de Twitter</div>
                                      <table class="table table-hover table-bordered">
                                        <tbody>
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PVEM.gif" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Sergio Sanchez Ochoa</center></td>
                                          </tr>                                       
                                        </tbody>
                                      </table>                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>    

                            <div id="barras14" class="tab-pane fade"> 
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  

                                    <div class="span9">  
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                          <i class="icon-bar-chart"></i>
                                          <h3 id="fecha_contenedor14"><?php echo $ultima_fecha ?></h3>                                                    
                                        </div>
                                        <div class="widget-content">                                          
                                          <div id="chart_div14"></div>  
                                          <div id="con14"></div> 
                                        </div>
                                      </div> 
                                    </div> 

                                    <div class="span3">
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                            <i class="icon-calendar"></i>
                                            <h3>Fecha a consultar</h3>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha14">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab14" value="14">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta14">Consultar</button>
                                          </center>
                                        </div> 
                                      </div>  
                                    </div>
                                    <!--Tabla con candidatos con cuentas-->
                                    <div class="span3">
                                      <div class="span12">Candidatos que tienen cuenta de Twitter</div>
                                      <table class="table table-hover table-bordered">
                                        <tbody>
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PVEM.gif" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Martha Meza Oregon</center></td>
                                          </tr>                                       
                                        </tbody>
                                      </table>                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="barras15" class="tab-pane fade"> 
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  

                                    <div class="span9">  
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                          <i class="icon-bar-chart"></i>
                                          <h3 id="fecha_contenedor15"><?php echo $ultima_fecha ?></h3>                                                    
                                        </div>
                                        <div class="widget-content">                                          
                                          <div id="chart_div15"></div>  
                                          <div id="con15"></div> 
                                        </div>
                                      </div> 
                                    </div> 

                                    <div class="span3">
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                            <i class="icon-calendar"></i>
                                            <h3>Fecha a consultar</h3>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha15">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab15" value="15">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta15">Consultar</button>
                                          </center>
                                        </div> 
                                      </div>  
                                    </div>
                                    <!--Tabla con candidatos con cuentas-->
                                    <div class="span3">
                                      <div class="span12">Candidatos que tienen cuenta de Twitter</div>
                                      <table class="table table-hover table-bordered">
                                        <tbody>
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PVEM.gif" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Felicitas Peña</center></td>
                                          </tr>                                       
                                        </tbody>
                                      </table>                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="barras16" class="tab-pane fade"> 
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  

                                    <div class="span9">  
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                          <i class="icon-bar-chart"></i>
                                          <h3 id="fecha_contenedor16"><?php echo $ultima_fecha ?></h3>                                                    
                                        </div>
                                        <div class="widget-content">                                          
                                          <div id="chart_div16"></div>  
                                          <div id="con16"></div> 
                                        </div>
                                      </div> 
                                    </div> 

                                    <div class="span3">
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                            <i class="icon-calendar"></i>
                                            <h3>Fecha a consultar</h3>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha16">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab16" value="16">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta16">Consultar</button>
                                          </center>
                                        </div> 
                                      </div>  
                                    </div>
                                    <!--Tabla con candidatos con cuentas-->
                                    <div class="span3">
                                      <div class="span12">Candidatos que tienen cuenta de Twitter</div>
                                      <table class="table table-hover table-bordered">
                                        <tbody>
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PVEM.gif" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Santiago Chavez</center></td>
                                          </tr>                                       
                                        </tbody>
                                      </table>                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>                           

                            <div id="nube" class="tab-pane fade ">  
                              <div class="row-fluid">
                                <div class="span10">
                                  <div id="container">
                                    <center><div id="contenido_nube" viewBox="0 0 1000 500" preserveAspectRatio="xMidYMid"></div></center>  
                                    <center><div id="nube_consulta" viewBox="0 0 1000 500" preserveAspectRatio="xMidYMid"></div></center>           
                                  </div>                           
                                </div>

                                <div class="span2">
                                  </br></br>
                                  <div class="btn-toolbar" align="left"> 
                                    <div class="btn-group-vertical">
                                      <a class="btn btn-success btn-lg active" id="consulta_nube"> Marzo</a>
                                      <a class="btn btn-primary btn-lg" id="consulta_nube2"> Abril</a>
                                      <a class="btn btn-primary btn-lg" id="consulta_nube3"> Mayo</a>
                                      <a class="btn btn-primary btn-lg" id="consulta_nube4"> Junio</a>
                                    </div>
                                  </div>
                                </div>                    
                              </div>                                                  
                            </div>

                        </div>
                      </div> <!--Cierra div del tab de pestañas-->        
                    </div>
                  </center>
                </div>              
            </div>
        </div>
    </div>

  <?php $this->load->view('comunes/footer'); ?> 
  <!--Para poder usar el calendario, importar las librerias-->
  <script type="text/javascript" src="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>  
</body>

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
        ['PRI', <?php echo $seguidoresh ?>, <?php echo $siguiendoh ?>, <?php echo $tweetsh ?>],
        ['PNA', <?php echo $seguidores_yadira ?>, <?php echo $siguiendo_yadira ?>, <?php echo $tweets_yadira ?>]
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
        hAxis: {
          title: 'C A N D I D A T O S',
          titleTextStyle: {color: 'black', fontName: 'Arial Black'}
        },         
        height: 400,
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
          title: 'C A N T I D A D',
          titleTextStyle: { fontName: 'Arial Black'}
        }
      };  

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      chart.draw(view, options);          
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
    </script>

    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart2() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['PVEM', <?php echo $seguidores_viviana ?>, <?php echo $siguiendo_viviana ?>, <?php echo $tweets_viviana ?>],
        ['PNA', <?php echo $seguidores_rangel ?>, <?php echo $siguiendo_rangel ?>, <?php echo $tweets_rangel ?>]        
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
        hAxis: {
          title: 'C A N D I D A T O S',
          titleTextStyle: {color: 'black', fontName: 'Arial Black'}
        },         
        height: 400,
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
          title: 'C A N T I D A D',
          titleTextStyle: { fontName: 'Arial Black'}
        }
      };  

      var chart2 = new google.visualization.ComboChart(document.getElementById('chart_div2'));
      chart2.draw(view, options);          
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
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart3() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([        
        ['PAN', <?php echo $seguidores_crispin ?>, <?php echo $siguiendo_crispin ?>, <?php echo $tweets_crispin ?>],
        ['PVEM', <?php echo $seguidores_isis ?>, <?php echo $siguiendo_isis ?>, <?php echo $tweets_isis ?>],
        ['PRI', <?php echo $seguidores_alma ?>, <?php echo $siguiendo_alma ?>, <?php echo $tweets_alma ?>]
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
        hAxis: {
          title: 'C A N D I D A T O S',
          titleTextStyle: {color: 'black', fontName: 'Arial Black'}
        },         
        height: 400,
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
          title: 'C A N T I D A D',
          titleTextStyle: { fontName: 'Arial Black'}
        }
      };  
      var chart3 = new google.visualization.ComboChart(document.getElementById('chart_div3'));
      chart3.draw(view, options);          
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
    </script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart4() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['PAN', <?php echo $seguidores_janeth ?>, <?php echo $siguiendo_janeth ?>, <?php echo $tweets_janeth ?>],
        ['PRI', <?php echo $seguidores_juanita ?>, <?php echo $siguiendo_juanita ?>, <?php echo $tweets_juanita ?>]
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
        hAxis: {
          title: 'C A N D I D A T O S',
          titleTextStyle: {color: 'black', fontName: 'Arial Black'}
        },         
        height: 400,
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
          title: 'C A N T I D A D',
          titleTextStyle: { fontName: 'Arial Black'}
        }
      };  
      var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div4'));
      chart4.draw(view, options);          
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
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart5() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['Coalición \n PRI-PVEM-PNA', <?php echo $seguidores_lupe ?>, <?php echo $siguiendo_lupe ?>, <?php echo $tweets_lupe ?>]
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
        hAxis: {
          title: 'C A N D I D A T O S',
          titleTextStyle: {color: 'black', fontName: 'Arial Black'}
        },         
        height: 400,
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
          title: 'C A N T I D A D',
          titleTextStyle: { fontName: 'Arial Black'}
        }
      };  
      var chart5 = new google.visualization.ComboChart(document.getElementById('chart_div5'));
      chart5.draw(view, options);          
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
    </script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart6() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['Coalición \n PRI-PVEM-PNA', <?php echo $seguidores_octavio ?>, <?php echo $siguiendo_octavio ?>, <?php echo $tweets_octavio ?>]
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
        hAxis: {
          title: 'C A N D I D A T O S',
          titleTextStyle: {color: 'black', fontName: 'Arial Black'}
        },         
        height: 400,
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
          title: 'C A N T I D A D',
          titleTextStyle: { fontName: 'Arial Black'}
        }
      };  
      var chart6 = new google.visualization.ComboChart(document.getElementById('chart_div6'));
      chart6.draw(view, options);          
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
    </script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart7() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['PRD', <?php echo $seguidores_sara ?>, <?php echo $siguiendo_sara ?>, <?php echo $tweets_sara ?>],
        ['PT', <?php echo $seguidores_joel ?>, <?php echo $siguiendo_joel ?>, <?php echo $tweets_joel ?>]
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
        hAxis: {
          title: 'C A N D I D A T O S',
          titleTextStyle: {color: 'black', fontName: 'Arial Black'}
        },         
        height: 400,
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
          title: 'C A N T I D A D',
          titleTextStyle: { fontName: 'Arial Black'}
        }
      };
      var chart7 = new google.visualization.ComboChart(document.getElementById('chart_div7'));
      chart7.draw(view, options);          
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
    </script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart8() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['PAN', <?php echo $seguidores_meyly ?>, <?php echo $siguiendo_meyly ?>, <?php echo $tweets_meyly ?>],
        ['Coalición \n PRI-PVEM-PNA', <?php echo $seguidores_hector ?>, <?php echo $siguiendo_hector ?>, <?php echo $tweets_hector ?>]
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
        hAxis: {
          title: 'C A N D I D A T O S',
          titleTextStyle: {color: 'black', fontName: 'Arial Black'}
        },         
        height: 400,
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
          title: 'C A N T I D A D',
          titleTextStyle: { fontName: 'Arial Black'}
        }
      };
      var chart87 = new google.visualization.ComboChart(document.getElementById('chart_div8'));
      chart87.draw(view, options);          
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
    </script>

    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart9() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['PRI', <?php echo $seguidores_eusebio ?>, <?php echo $siguiendo_eusebio ?>, <?php echo $tweets_eusebio ?>]
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
        hAxis: {
          title: 'C A N D I D A T O S',
          titleTextStyle: {color: 'black', fontName: 'Arial Black'}
        },         
        height: 400,
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
          title: 'C A N T I D A D',
          titleTextStyle: { fontName: 'Arial Black'}
        }
      };  
      var chart9 = new google.visualization.ComboChart(document.getElementById('chart_div9'));
      chart9.draw(view, options);          
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
    </script>

    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart10() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['PAN', <?php echo $seguidores_mesina ?>, <?php echo $siguiendo_mesina ?>, <?php echo $tweets_mesina ?>],
        ['Coalición \n PRI-PVEM-PNA', <?php echo $seguidores_pinto ?>, <?php echo $siguiendo_pinto ?>, <?php echo $tweets_pinto ?>]
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
        hAxis: {
          title: 'C A N D I D A T O S',
          titleTextStyle: {color: 'black', fontName: 'Arial Black'}
        },         
        height: 400,
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
          title: 'C A N T I D A D',
          titleTextStyle: { fontName: 'Arial Black'}
        }
      };
      var chart10 = new google.visualization.ComboChart(document.getElementById('chart_div10'));
      chart10.draw(view, options);          
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
    </script>

    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart11() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['Coalición \n PRI-PVEM-PNA', <?php echo $seguidores_armida ?>, <?php echo $siguiendo_armida ?>, <?php echo $tweets_armida ?>]
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
        hAxis: {
          title: 'C A N D I D A T O S',
          titleTextStyle: {color: 'black', fontName: 'Arial Black'}
        },         
        height: 400,
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
          title: 'C A N T I D A D',
          titleTextStyle: { fontName: 'Arial Black'}
        }
      };
      var chart11 = new google.visualization.ComboChart(document.getElementById('chart_div11'));
      chart11.draw(view, options);          
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
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart12() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['PAN', <?php echo $seguidores_marthaS ?>, <?php echo $siguiendo_marthaS ?>, <?php echo $tweets_marthaS ?>],
        ['PRD', <?php echo $seguidores_amary ?>, <?php echo $siguiendo_amary ?>, <?php echo $tweets_amary ?>]
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
        hAxis: {
          title: 'C A N D I D A T O S',
          titleTextStyle: {color: 'black', fontName: 'Arial Black'}
        },         
        height: 400,
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
          title: 'C A N T I D A D',
          titleTextStyle: { fontName: 'Arial Black'}
        }
      };
      var chart12 = new google.visualization.ComboChart(document.getElementById('chart_div12'));
      chart12.draw(view, options);          
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
    </script>

    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart13() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');    
      data.addRows([
        ['Coalición \n PRI-PVEM-PNA', <?php echo $seguidores_sergio ?>, <?php echo $siguiendo_sergio ?>, <?php echo $tweets_sergio ?>]
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
        hAxis: {
          title: 'C A N D I D A T O S',
          titleTextStyle: {color: 'black', fontName: 'Arial Black'}
        },         
        height: 400,
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
          title: 'C A N T I D A D',
          titleTextStyle: { fontName: 'Arial Black'}
        }
      };
      var chart13 = new google.visualization.ComboChart(document.getElementById('chart_div13'));
      chart13.draw(view, options);          
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
    </script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart14() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');    
      data.addRows([
        ['PVEM', <?php echo $seguidores_martha ?>, <?php echo $siguiendo_martha ?>, <?php echo $tweets_martha ?>]
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
        hAxis: {
          title: 'C A N D I D A T O S',
          titleTextStyle: {color: 'black', fontName: 'Arial Black'}
        },         
        height: 400,
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
          title: 'C A N T I D A D',
          titleTextStyle: { fontName: 'Arial Black'}
        }
      };
      var chart14 = new google.visualization.ComboChart(document.getElementById('chart_div14'));
      chart14.draw(view, options);          
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

    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart15() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['Coalición \n PRI-PVEM-PNA', <?php echo $seguidores_felicitas ?>, <?php echo $siguiendo_felicitas ?>, <?php echo $tweets_felicitas ?>]
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
        hAxis: {
          title: 'C A N D I D A T O S',
          titleTextStyle: {color: 'black', fontName: 'Arial Black'}
        },         
        height: 400,
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
          title: 'C A N T I D A D',
          titleTextStyle: { fontName: 'Arial Black'}
        }
      };
      var chart15 = new google.visualization.ComboChart(document.getElementById('chart_div15'));
      chart15.draw(view, options);          
    }
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div15");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart15();
    });
    </script>

    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart16() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['Coalición \n PRI-PVEM-PNA', <?php echo $seguidores_santiago ?>, <?php echo $siguiendo_santiago ?>, <?php echo $tweets_santiago ?>]
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
        hAxis: {
          title: 'C A N D I D A T O S',
          titleTextStyle: {color: 'black', fontName: 'Arial Black'}
        },         
        height: 400,
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
          title: 'C A N T I D A D',
          titleTextStyle: { fontName: 'Arial Black'}
        }
      };
      var chart16 = new google.visualization.ComboChart(document.getElementById('chart_div16'));
      chart16.draw(view, options);          
    }
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div16");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart16();
    });
  </script>

  <script type="text/javascript">
    function nube()
    {
      //Limpiar div
      var d = document.getElementById("contenido_nube");
      while (d.hasChildNodes())
      {
        d.removeChild(d.firstChild);
      }

      <?php //Llenamos el array con las coordenadas        
            $aux=""; 
            for ($i=0; $i<count($hashtags); $i++)
            {
                $porciones = explode(" ", $hashtags[$i]->hashtags);
                for ($j=0; $j<count($porciones); $j++)
              {
                if ($porciones[$j] != "") 
                {
                  $aux = $aux." ".$porciones[$j]; 
                };
                
              };                    
            };    

          $test = preg_split('/[\s,]+/', $aux); //Coloca los hashtags en una sola línea, el separador son los espacios
          $palabras_contadas = array_count_values($test); //Cuenta la cantidad de veces que se repite una palabra

          $a2 = array();
          foreach ($palabras_contadas as $key => $value) { //Llena el array para convertirlo a json
              if($key != "")
              {
                $a2[] = array(
                      "text" => $key,
                      "size" => $value*25
                );
              }       
        };
        $palabras_JSON = json_encode($a2); //Convertimos el array a Json para poderlo colocar en la nube de palabras                   
      ?>
      var fill = d3.scale.category20();
      d3.layout.cloud().size([1000, 400])
          .words(<?php echo $palabras_JSON ?>)
          .padding(3)
          .rotate(function() { return ~~(Math.random() * 2) * 90; })
          .font("Impact")
          .fontSize(function(d) { return d.size; })
          .on("end", draw)
          .start();

      function draw(words) 
      {
          d3.select("#contenido_nube").append("svg")
              .attr("viewBox", "-15 0 " + 1000 + " " + 500 )
                .attr("preserveAspectRatio", "xMidYMid meet")
            .append("g")
              .attr("transform", "translate(472,250)")
            .selectAll("text")
              .data(words)
            .enter().append("text")
              .style("font-size", function(d) { return d.size + "px"; })
              .style("font-family", "Impact")
              .style("fill", function(d, i) { return fill(i); })
              .attr("text-anchor", "middle")
              .attr("transform", function(d) {
                return "translate(" + [d.x, d.y] + ")rotate(" + d.rotate + ")";
              })
              .text(function(d) { return d.text; });
      }
    }
    //Sirve para hacer la nube de palabars responsiva
    var aspect = 1000 / 400,
      chart = $("#contenido_nube");
    $(window).on("resize", function() {
        var targetWidth = chart.parent().width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
    });
  </script>

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
    $(document).ready(function(){                                        
      $("#consulta").click(function(event) {
        var fecha = document.getElementById("fecha").value;  
        var vtab = document.getElementById("vtab1").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con').html(html);   
          }
        });            
      }); 

      $("#consulta2").click(function(event) {
        var fecha = document.getElementById("fecha2").value; 
        var vtab = document.getElementById("vtab2").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con2').html(html);
          }
        });
      });

      $("#consulta3").click(function(event) {
        var fecha = document.getElementById("fecha3").value; 
        var vtab = document.getElementById("vtab3").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con3').html(html);
          }
        });
      });

      $("#consulta4").click(function(event) {
        var fecha = document.getElementById("fecha4").value; 
        var vtab = document.getElementById("vtab4").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con4').html(html);
          }
        });
      });

      $("#consulta5").click(function(event) {
        var fecha = document.getElementById("fecha5").value; 
        var vtab = document.getElementById("vtab5").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con5').html(html);
          }
        });
      });

      $("#consulta6").click(function(event) {
        var fecha = document.getElementById("fecha6").value; 
        var vtab = document.getElementById("vtab6").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con6').html(html);
          }
        });
      });

      $("#consulta7").click(function(event) {
        var fecha = document.getElementById("fecha7").value; 
        var vtab = document.getElementById("vtab7").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con7').html(html);
          }
        });
      });

      $("#consulta8").click(function(event) {
        var fecha = document.getElementById("fecha8").value; 
        var vtab = document.getElementById("vtab8").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con8').html(html);
          }
        });
      });

      $("#consulta9").click(function(event) {
        var fecha = document.getElementById("fecha9").value; 
        var vtab = document.getElementById("vtab9").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con9').html(html);
          }
        });
      });

      $("#consulta10").click(function(event) {
        var fecha = document.getElementById("fecha10").value; 
        var vtab = document.getElementById("vtab10").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con10').html(html);
          }
        });
      });

      $("#consulta11").click(function(event) {
        var fecha = document.getElementById("fecha11").value; 
        var vtab = document.getElementById("vtab11").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con11').html(html);
          }
        });
      });

      $("#consulta12").click(function(event) {
        var fecha = document.getElementById("fecha12").value; 
        var vtab = document.getElementById("vtab12").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con12').html(html);
          }
        });
      });

      $("#consulta13").click(function(event) {
        var fecha = document.getElementById("fecha13").value; 
        var vtab = document.getElementById("vtab13").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con13').html(html);
          }
        });
      });

      $("#consulta14").click(function(event) {
        var fecha = document.getElementById("fecha14").value; 
        var vtab = document.getElementById("vtab14").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con14').html(html);
          }
        });
      });

      $("#consulta15").click(function(event) {
        var fecha = document.getElementById("fecha15").value; 
        var vtab = document.getElementById("vtab15").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con15').html(html);
          }
        });
      });

      $("#consulta16").click(function(event) {
        var fecha = document.getElementById("fecha16").value; 
        var vtab = document.getElementById("vtab16").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con16').html(html);
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
        drawChart11();
        drawChart12();
        drawChart13();
        drawChart14();
        drawChart15();
        drawChart16();
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
      $('#chart_div12').width('100%');
      $('#chart_div13').width('100%');  
      $('#chart_div14').width('100%');
      $('#chart_div15').width('100%');  
      $('#chart_div16').width('100%'); 
    }
  </script>

  <!--Consulta de la nube de palabras-->
  <script type="text/javascript">
    $(document).ready(function(){ 

      $("#consulta_nube").click(function(event) {
        $("#consulta_nube").addClass('active btn-success');
        $("#consulta_nube2").removeClass('active btn-success');
        $("#consulta_nube3").removeClass('active btn-success');
        $("#consulta_nube4").removeClass('active btn-success');       
        var parametros = {
                "mes" : '03'
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/nube_dipLocales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#nube_consulta').html(html);   
          }
        });            
      }); 

      $("#consulta_nube2").click(function(event) {
        $("#consulta_nube2").addClass('active btn-success');
        $("#consulta_nube").removeClass('active btn-success');
        $("#consulta_nube").addClass('btn-primary');
        $("#consulta_nube3").removeClass('active btn-success');
        $("#consulta_nube4").removeClass('active btn-success');         
        var parametros = {
                "mes" : '04'
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/nube_dipLocales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#nube_consulta').html(html);   
          }
        });            
      });

      $("#consulta_nube3").click(function(event) {
        $("#consulta_nube3").addClass('active btn-success');
        $("#consulta_nube2").removeClass('active btn-success');
        $("#consulta_nube").removeClass('active btn-success');
        $("#consulta_nube").addClass('btn-primary');
        $("#consulta_nube4").removeClass('active btn-success'); 
        var parametros = {
                "mes" : '05'
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/nube_dipLocales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#nube_consulta').html(html);   
          }
        });            
      });

      $("#consulta_nube4").click(function(event) {
        $("#consulta_nube4").addClass('active btn-success');
        $("#consulta_nube2").removeClass('active btn-success');
        $("#consulta_nube3").removeClass('active btn-success');
        $("#consulta_nube").removeClass('active btn-success'); 
        $("#consulta_nube").addClass('btn-primary');
        var parametros = {
                "mes" : '06'
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/nube_dipLocales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#nube_consulta').html(html);   
          }
        });            
      });

    });
  </script>

</html>

