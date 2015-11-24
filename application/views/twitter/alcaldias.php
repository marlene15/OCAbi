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
  <title>Alcaldías</title> 
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
                            Candidatos a Presidente Municipal <small>Actividad en Twitter</small>
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
                                <a href="<?php echo site_url('twitter/controlador_inicio/alcaldias');?>">Presidente Municipal</a>
                            </li>                            
                        </ul>
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                  <center>
                    <div class="portlet-body form well">
                      <div id="alert"></div> 
                      <!--Código para el tab de pestañas-->   
                      <div class="bs-example bs-example-tabs">
                        <ul class="nav nav-tabs" id="myTab">
                          <li class="active"><a data-toggle="tab" href="#barras8">Armería</a></li>
                          <li><a data-toggle="tab" href="#barras1">Colima</a></li>
                          <li><a data-toggle="tab" href="#barras4">Comala</a></li>
                          <li><a data-toggle="tab" href="#barras10">Coquimatlán</a></li>
                          <li><a data-toggle="tab" href="#barras6">Cuauhtémoc</a></li>
                          <li><a data-toggle="tab" href="#barras9">Ixtlahuacán</a></li>
                          <li><a data-toggle="tab" href="#barras2">Manzanillo</a></li>
                          <li><a data-toggle="tab" href="#barras7">Minatitlán</a></li>
                          <li><a data-toggle="tab" href="#barras5">Tecomán</a></li>
                          <li><a data-toggle="tab" href="#barras3">Villa de Álvarez</a></li>  
                          <li><a data-toggle="tab" href="#nube" onclick="nube();">Nube de Palabras</a></li>                              
                        </ul>
                          <div class="tab-content" id="tabs">

                            <div id="barras8" class="tab-pane fade active in"> 
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  

                                    <div class="span9">  
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                          <i class="icon-bar-chart"> <strong><font size="3"><?php echo $ultima_fecha ?></font></strong></i>                                                   
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
                                            <i class="icon-calendar"> <strong><font size="3">Fecha a consultar</font></strong></i>                                               
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span7" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha8">
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
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Esperanza Alcaraz </center></td>
                                          </tr>                                        
                                        </tbody>
                                      </table>                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="barras1" class="tab-pane fade"> 
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  

                                    <div class="span9">  
                                      <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                        <div class="widget-header" style="background: #B20034" align="left">
                                          <i class="icon-bar-chart"> <strong><font size="3"><?php echo $ultima_fecha ?></font></strong></i>                                                   
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
                                            <i class="icon-calendar"> <strong><font size="3">Fecha a consultar</font></strong></i>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span7" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha">
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
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/pan.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Héctor Insúa García</center></td>
                                          </tr> 
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PVEM.gif" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Esmeralda Cárdenas</center></td>
                                          </tr>  
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PMC.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>María Elena Abaroa</center></td>
                                          </tr>      
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Oscar Valdovinos</center></td>
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
                                          <i class="icon-bar-chart"> <strong><font size="3"><?php echo $ultima_fecha ?></font></strong></i>                                                   
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
                                            <i class="icon-calendar"> <strong><font size="3">Fecha a consultar</font></strong></i>                                                 
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span7" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha4">
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
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Salomón Salazar</center></td>
                                          </tr> 
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PES.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Mario Carrillo</center></td>
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
                                                                         
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div10">
                                      Los candidatos de Coquimatlán No tienen cuentas de Twitter
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
                                          <i class="icon-bar-chart"> <strong><font size="3"><?php echo $ultima_fecha ?></font></strong></i>                                                   
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
                                            <i class="icon-calendar"> <strong><font size="3">Fecha a consultar</font></strong></i>                                                     
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span7" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha6">
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
                                            <td class="success"><center>Blanca Rocha</center></td>
                                          </tr>   
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/HUMANISTA.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>UrsuaBlanca</center></td>
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
                                          <i class="icon-bar-chart"> <strong><font size="3"><?php echo $ultima_fecha ?></font></strong></i>                                                   
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
                                            <i class="icon-calendar"> <strong><font size="3">Fecha a consultar</font></strong></i>                                                     
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span7" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha9">
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
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>HIRAM RUIZ MANCILLA</center></td>
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
                                          <i class="icon-bar-chart"> <strong><font size="3"><?php echo $ultima_fecha ?></font></strong></i>                                                   
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
                                            <i class="icon-calendar"> <strong><font size="3">Fecha a consultar</font></strong></i>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span7" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha2">
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
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PVEM.gif" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Francisco Zepeda</center></td>
                                          </tr> 
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PT.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Marcos Barajas</center></td>
                                          </tr>   
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PMC.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>ruben romo ochoa</center></td>
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
                                          <i class="icon-bar-chart"> <strong><font size="3"><?php echo $ultima_fecha ?></font></strong></i>                                                    
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
                                            <i class="icon-calendar"> <strong><font size="3">Fecha a consultar</font></strong></i>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span7" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha7">
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
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Manuel Palacios R.</center></td>
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
                                          <i class="icon-bar-chart"> <strong><font size="3"><?php echo $ultima_fecha ?></font></strong></i>                                                    
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
                                            <i class="icon-calendar"> <strong><font size="3">Fecha a consultar</font></strong></i>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span7" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha5">
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
                                            <td class="success"><center>Arturo García Arias</center></td>
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
                                          <i class="icon-bar-chart"> <strong><font size="3"><?php echo $ultima_fecha ?></font></strong></i>                                                   
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
                                          <i class="icon-calendar"> <strong><font size="3">Fecha a consultar</font></strong></i>                                                    
                                        </div>
                                        <div class="widget-content">
                                          <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span7" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha3">
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
                                            <td class="success"><center>YULENNY CORTÉS</center></td>
                                          </tr> 
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PVEM.gif" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>Oswy Delgado</center></td>
                                          </tr>  
                                          <tr>
                                            <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRD.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                            <td class="success"><center>jaime sotelo garcia</center></td>
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
      google.setOnLoadCallback(drawChart8);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([          
          ['PAN', <?php echo $seguidoresh ?>, <?php echo $siguiendoh ?>, <?php echo $tweetsh ?>],
          ['MC', <?php echo $seguidoresma ?>, <?php echo $siguiendoma ?>, <?php echo $tweetsma ?>],          
          ['PVEM', <?php echo $seguidoreses ?>, <?php echo $siguiendoes ?>, <?php echo $tweetses ?>],
          ['PRI', <?php echo $seguidores_oscar ?>, <?php echo $siguiendo_oscar ?>, <?php echo $tweets_oscar ?>]
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
      
      function drawChart2() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['Coalición \n PRI-PVEM-PNA', <?php echo $seguidoresp ?>, <?php echo $siguiendop ?>, <?php echo $tweetsp ?>],
          ['PT', <?php echo $seguidoresmarc ?>, <?php echo $siguiendomarc ?>, <?php echo $tweetsmarc ?>],
          ['MC', <?php echo $seguidores_ruben ?>, <?php echo $siguiendo_ruben ?>, <?php echo $tweets_ruben ?>]
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
      
      function drawChart3() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([          
          ['PAN', <?php echo $seguidores_yulenny ?>, <?php echo $siguiendo_yulenny ?>, <?php echo $tweets_yulenny ?>],
          ['Coalición \n PRI-PVEM-PNA', <?php echo $seguidores_oswy ?>, <?php echo $siguiendo_oswy ?>, <?php echo $tweets_oswy ?>],
          ['PRD', <?php echo $seguidores_jaime ?>, <?php echo $siguiendo_jaime ?>, <?php echo $tweets_jaime ?>]          
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
     
      function drawChart4() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['PRI', <?php echo $seguidores_salomon ?>, <?php echo $siguiendo_salomon ?>, <?php echo $tweets_salomon ?>],
          ['PES', <?php echo $seguidores_mario ?>, <?php echo $siguiendo_mario ?>, <?php echo $tweets_mario ?>]
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
      
      function drawChart5() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['Coalición \n PRI-PVEM-PNA', <?php echo $seguidores_arturo ?>, <?php echo $siguiendo_arturo ?>, <?php echo $tweets_arturo ?>]
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
      
      function drawChart6() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['Coalición \n PRI-PVEM-PNA', <?php echo $seguidores_blanca ?>, <?php echo $siguiendo_blanca ?>, <?php echo $tweets_blanca ?>],
          ['PH', <?php echo $seguidores_blancaU ?>, <?php echo $siguiendo_blancaU ?>, <?php echo $tweets_blancaU ?>]
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
      
      function drawChart7() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['PRI', <?php echo $seguidores_manuel ?>, <?php echo $siguiendo_manuel ?>, <?php echo $tweets_manuel ?>]
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
      
      function drawChart8() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['PRI', <?php echo $seguidores_esperanza ?>, <?php echo $siguiendo_esperanza ?>, <?php echo $tweets_esperanza ?>]
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
        var chart8 = new google.visualization.ComboChart(document.getElementById('chart_div8'));
        chart8.draw(view, options);          
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
      
      function drawChart9() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['PNA', <?php echo $seguidores_hiram ?>, <?php echo $siguiendo_hiram ?>, <?php echo $tweets_hiram ?>]
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
                      "size" => $value*15
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
          url: '<?php echo site_url('twitter/controlador_consultas/alcaldias');?>',                                      
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
          url: '<?php echo site_url('twitter/controlador_consultas/alcaldias');?>',                                      
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
          url: '<?php echo site_url('twitter/controlador_consultas/alcaldias');?>',                                      
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
          url: '<?php echo site_url('twitter/controlador_consultas/alcaldias');?>',                                      
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
          url: '<?php echo site_url('twitter/controlador_consultas/alcaldias');?>',                                      
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
          url: '<?php echo site_url('twitter/controlador_consultas/alcaldias');?>',                                      
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
          url: '<?php echo site_url('twitter/controlador_consultas/alcaldias');?>',                                      
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
          url: '<?php echo site_url('twitter/controlador_consultas/alcaldias');?>',                                      
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
          url: '<?php echo site_url('twitter/controlador_consultas/alcaldias');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con9').html(html);
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
          url: '<?php echo site_url('twitter/controlador_consultas/nube_Alcaldes');?>',                                      
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
          url: '<?php echo site_url('twitter/controlador_consultas/nube_Alcaldes');?>',                                      
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
          url: '<?php echo site_url('twitter/controlador_consultas/nube_Alcaldes');?>',                                      
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
          url: '<?php echo site_url('twitter/controlador_consultas/nube_Alcaldes');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#nube_consulta').html(html);   
          }
        });            
      });

    });
  </script>
  
</html>

