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
    <link rel="stylesheet" href="<?= base_url();?>assets/twitter/morris/morris.css">
    <script src="<?= base_url();?>assets/twitter/morris/jquery-1.9.0.min.js"></script>
    <script src="<?= base_url();?>assets/twitter/raphael/raphael-min.js"></script>
    <script src="<?= base_url();?>assets/twitter/morris/morris.min.js"></script>
</head>
<body class="page-header-fixed page-sidebar-closed">
    <!--Carga la barra superior-->
    <?php $this->load->view('comunes/barra_superior'); ?>
    <div class="page-container">
        <?php $this->load->view('comunes/nav'); ?> 
        <div class="page-content">
            <div class="container-fluid"> 
                <div class="row-fluid">
                    <div class="span12" id="encabezado">
                        <h3 class="page-title" id="titulo">
                            Minería de Datos
                        </h3>
                        <ul class="breadcrumb" id="ul_menu">
                          <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo site_url('inicio'); ?>">Home</a> 
                                <i class="icon-angle-right"></i>
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
                          <li class="active"><a data-toggle="tab" href="#facebook">Facebook</a></li>
                          <li class=""><a data-toggle="tab" href="#twitter">Twitter</a></li>                          
                        </ul>
                          <div class="tab-content" id="myTabContent">

                            <div id="facebook" class="tab-pane fade active in"> 
                                                                                     
                            </div>

                            <div id="twitter" class="tab-pane fade ">
                              <form class="form-horizontal form-bordered well" id="form-username" action="javascript:;" method="post">
                                  <div class="form-group">    
                                      <h5 class="page-title"> N° Tweets por día </h5>                            
                                      <div id="chart" style="height: 250px;"></div><hr>
                                      <h5 class="page-title"> Buscar palabras en Tweets </h5>  
                                      <div style="text-align:left" class="input-group">
                                          <input type="text" id="palabra" name="" class="form-control">
                                          <span class="input-group-btn">
                                              <a id="palabra" class="btn green" href="javascript:;">
                                              <i class="fa fa-check"></i> Buscar </a>
                                          </span>
                                      </div>
                                      <h1 id="total" class="col-sm-9"></h1>
                                      <div id="porPalabra" style="height: 250px;"></div>
                                  </div>
                              </form>  
                              <br/>
                              <br/>
                              <a href="<?= base_url();?>assets/twitter/cuentasOca/cuentas.php" class="btn btn-primary" role="button" target="_blank">Guardar cuentas</a>                      
                            </div>

                        </div>
                      </div> <!--Cierra TABS-->

                        
                    </div>                                         
                </div>

            </div>
        </div>      
    </div>

	<?php $this->load->view('comunes/footer'); ?> 
</body>
    <script>
    function grafica()
    {
        plotword=function(lugar,datos){
          Morris.Line({
            // ID of the element in which to draw the chart.
            // element: 'porPalabra',
            element:lugar,
            data:datos,
            // The name of the data record attribute that contains x-values.
            xkey: 'year',
            // A list of names of data record attributes that contain y-values.
            ykeys: ['value'],
            // Labels for the ykeys -- will be displayed when you hover over the
            // chart.
            labels: ['Value']
          });
        }

        barra = function(lugar,datos){
          Morris.Bar({
            element: lugar,
            data: datos,
            xkey: 'date',
            ykeys: ['value'],
            labels: ['Orders']
          });
        }

        $.ajax({
          url:'<?= base_url();?>assets/busqueda_tweets/consultas.php',
          data:{id:'fecha',},
          type:'post',
          success:function(data){
            // console.log(data);
            $('#chart').html('');
            datos=JSON.parse(data);
            barra('chart',datos);
            // console.log(datos);
          }

        });

        $('#palabra').on('change',function(){
          palabra=$(this).val();
          $.ajax({
            type:"post",
            data:{
              id:'palabra',
              palabra:palabra
            },
            url:'<?= base_url();?>assets/busqueda_tweets/consultas.php',
            success:function(data){
              // console.log(data);
              $('#porPalabra').html('');
              datos=JSON.parse(data);
              if(!datos.error){
                total=0;
                $.each(datos,function(index,val){
                  total+=(val.value);
                });
                 // console.log(data);
                plotword('porPalabra',datos);
                $('#total').html("Total:" + total);
                // console.log(total);
              }
              else{
                $('#total').html('');
                alert(datos.error);
              }
            }
          })
        });
      }

      $(document).ready(function(){
      //Carga la grafica
      $('[data-toggle=tab][href=#twitter]').on('click',function(){
        setTimeout(function(){
          grafica();
        },500)
      });
    });
    </script>
</html>
