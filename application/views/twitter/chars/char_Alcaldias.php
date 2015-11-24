<script type="text/javascript">
  if (<?php echo $vtab ?>==1) {
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');                
        data.addRows([
          ['PAN', <?php echo $seguidoresh ?>, <?php echo $siguiendoh ?>, <?php echo $tweetsh ?>],
          ['PVE', <?php echo $seguidoreses ?>, <?php echo $siguiendoes ?>, <?php echo $tweetses ?>],
          ['MC', <?php echo $seguidoresma ?>, <?php echo $siguiendoma ?>, <?php echo $tweetsma ?>]          
        ]);
        if (<?php echo $seguidores_oscar ?>!=0 && <?php echo $siguiendo_oscar ?>!=0 && <?php echo $tweets_oscar ?>!=0)
        {
          $('#alert').hide(); 
          data.addRows([
            ['PRI', <?php echo $seguidores_oscar ?>, <?php echo $siguiendo_oscar ?>, <?php echo $tweets_oscar ?>]
          ]);
        }else{
          $('#alert').show();
          $('#alert').html('<div id="alert" class="alert alert-block"><button type="button" class="close" data-dismiss="alert"></button><center><strong>La información de Oscar Valdovinos!</strong> Se encuentra disponible a partir de la fecha: 14 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $ultima_fecha ?></center></div>'); 
        }
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
    	drawChart();
    	$('#chart_div').width('100%');	

      if (<?php echo $existe ?> ==2) {
        $('#alert').show();
        $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
      }
      $('#fecha_contenedor').html('<?php echo $fecha ?>'); 
  };   

  if (<?php echo $vtab ?>==2) { 
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart2);
      function drawChart2() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');             
        data.addRows([
          ['Coalición \n PRI-PVE-PNA', <?php echo $seguidoresp ?>, <?php echo $siguiendop ?>, <?php echo $tweetsp ?>],
          ['PT', <?php echo $seguidoresmarc ?>, <?php echo $siguiendomarc ?>, <?php echo $tweetsmarc ?>]          
        ]);
        if (<?php echo $seguidores_ruben ?>!=0 && <?php echo $siguiendo_ruben ?>!=0 && <?php echo $tweets_ruben ?>!=0)
        {          
          $('#alert').hide(); 
          data.addRows([
            ['MC', <?php echo $seguidores_ruben ?>, <?php echo $siguiendo_ruben ?>, <?php echo $tweets_ruben ?>]
          ]);
        }else{
          $('#alert').show();
          $('#alert').html('<div id="alert" class="alert alert-block"><button type="button" class="close" data-dismiss="alert"></button><center><strong>La información de Rubén Romo!</strong> Se encuentra disponible a partir de la fecha: 14 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $ultima_fecha ?></center></div>'); 
        } 

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
      drawChart2();
    $('#chart_div2').width('100%');

    if (<?php echo $existe ?> ==2) {
        $('#alert').show();
        $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
      }
    $('#fecha_contenedor2').html('<?php echo $fecha ?>');    
  };

  if (<?php echo $vtab ?>==3) {   
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart3);
      function drawChart3() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');               
        data.addRows([
          ['PAN', <?php echo $seguidores_yulenny ?>, <?php echo $siguiendo_yulenny ?>, <?php echo $tweets_yulenny ?>],
          ['Coalición \n PRI-PVE-PNA', <?php echo $seguidores_oswy ?>, <?php echo $siguiendo_oswy ?>, <?php echo $tweets_oswy ?>]                              
        ]);
        if (<?php echo $seguidores_jaime ?>!=0 && <?php echo $siguiendo_jaime ?>!=0 && <?php echo $tweets_jaime ?>!=0)
        {
          $('#alert').hide();
          data.addRows([
            ['PRD', <?php echo $seguidores_jaime ?>, <?php echo $siguiendo_jaime ?>, <?php echo $tweets_jaime ?>]
          ]);
        }else{
          $('#alert').show();
          $('#alert').html('<div id="alert" class="alert alert-block"><button type="button" class="close" data-dismiss="alert"></button><center><strong>La información de Jaime Sotelo!</strong> Se encuentra disponible a partir de la fecha: 14 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $ultima_fecha ?></center></div>'); 
        }

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
      drawChart3();
    $('#chart_div3').width('100%'); 

    if (<?php echo $existe ?> ==2) {
        $('#alert').show();
        $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
      }
    $('#fecha_contenedor3').html('<?php echo $fecha ?>');  
  };   

  if (<?php echo $vtab ?>==4) {   
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart4);
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
      drawChart4();
    $('#chart_div4').width('100%');   

    if (<?php echo $existe ?> ==2) {
      $('#alert').show();
      $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
    }
    else
    {
      $('#alert').hide();      
    }
    $('#fecha_contenedor4').html('<?php echo $fecha ?>'); 
  }; 

  if (<?php echo $vtab ?>==5) {  
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart5);
      function drawChart5() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['Coalición \n PRI-PVE-PNA', <?php echo $seguidores_arturo ?>, <?php echo $siguiendo_arturo ?>, <?php echo $tweets_arturo ?>]
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
      drawChart5();
    $('#chart_div5').width('100%'); 

    if (<?php echo $existe ?> ==2) {
      $('#alert').show();
      $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
    }
    else
    {
      $('#alert').hide();      
    }
    $('#fecha_contenedor5').html('<?php echo $fecha ?>');  
  }; 

  if (<?php echo $vtab ?>==6) {   
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart6);
      function drawChart6() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');   
        data.addRows([
          ['PRI', <?php echo $seguidores_blanca ?>, <?php echo $siguiendo_blanca ?>, <?php echo $tweets_blanca ?>]          
        ]);
        if (<?php echo $seguidores_blancaU ?>!=0 && <?php echo $siguiendo_blancaU ?>!=0 && <?php echo $tweets_blancaU ?>!=0)
        {
          $('#alert').hide();
          data.addRows([
            ['PH', <?php echo $seguidores_blancaU ?>, <?php echo $siguiendo_blancaU ?>, <?php echo $tweets_blancaU ?>]
          ]);
        }else{
          $('#alert').show();
          $('#alert').html('<div id="alert" class="alert alert-block"><button type="button" class="close" data-dismiss="alert"></button><center><strong>La información de Blanca Ursúa!</strong> Se encuentra disponible a partir de la fecha: 14 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $ultima_fecha ?></center></div>'); 
        }  
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
      drawChart6();
      $('#chart_div6').width('100%');  

      if (<?php echo $existe ?> ==2) {
        $('#alert').show();
        $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
      }
      $('#fecha_contenedor6').html('<?php echo $fecha ?>');  
  }; 

  if (<?php echo $vtab ?>==7) {   
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart7);
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
      drawChart7();
    $('#chart_div7').width('100%');  

    if (<?php echo $existe ?> ==2) {
      $('#alert').show();
      $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
    }
    else
    {
      $('#alert').hide();      
    }
    $('#fecha_contenedor7').html('<?php echo $fecha ?>'); 
  }; 

  if (<?php echo $vtab ?>==8) {    
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart8);
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
      drawChart8();
    $('#chart_div8').width('100%');   

    if (<?php echo $existe ?> ==2) {
      $('#alert').show();
      $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
    }
    else
    {
      $('#alert').hide();      
    }
    $('#fecha_contenedor8').html('<?php echo $fecha ?>'); 
  }; 

  if (<?php echo $vtab ?>==9) {    
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart9);
      function drawChart9() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['PNAL', <?php echo $seguidores_hiram ?>, <?php echo $siguiendo_hiram ?>, <?php echo $tweets_hiram ?>]
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
      drawChart9();
    $('#chart_div9').width('100%'); 

    if (<?php echo $existe ?> ==2) {
      $('#alert').show();
      $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
    }
    else
    {
      $('#alert').hide();      
    }
    $('#fecha_contenedor9').html('<?php echo $fecha ?>');   
  }; 
  </script>

