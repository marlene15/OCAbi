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
<body class="page-header-fixed page-quick-sidebar-over-content">
    <!--Carga la barra superior-->
    <?php $this->load->view('comunes/barra_superior'); ?>
    <div class="page-container">
        <?php $this->load->view('comunes/nav'); ?> 
        <div class="page-content">
            <div class="container-fluid"> 
                <br>
                <!--CONTENIDO DE LA PÁGINA -->     
                <div id="dashboard">                       
                    <div class="portlet-body form">
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
                    </div>                                         
                </div>

            </div>
        </div>      
    </div>

	<?php $this->load->view('comunes/footer'); ?> 
</body>
    <script>
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
    </script>
</html>
