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
        ['PRI', <?php echo $seguidoresh ?>, <?php echo $siguiendoh ?>, <?php echo $tweetsh ?>]
      ]);       
      if (<?php echo $seguidores_yadira ?>!=0 && <?php echo $siguiendo_yadira ?>!=0 && <?php echo $tweets_yadira ?>!=0)
      {  
        $('#alert').hide();
        data.addRows([          
          ['PNAL', <?php echo $seguidores_yadira ?>, <?php echo $siguiendo_yadira ?>, <?php echo $tweets_yadira ?>]
        ]);         
      }else{
        $('#alert').show();
        $('#alert').html('<div id="alert" class="alert alert-block"><button type="button" class="close" data-dismiss="alert"></button><strong>La información de Yadira Carrillo!</strong> Se encuentra disponible a partir de la fecha: 14 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $ultima_fecha ?></div>'); 
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
          ['PVE', <?php echo $seguidores_viviana ?>, <?php echo $siguiendo_viviana ?>, <?php echo $tweets_viviana ?>],
          ['PNAL', <?php echo $seguidores_rangel ?>, <?php echo $siguiendo_rangel ?>, <?php echo $tweets_rangel ?>]        
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
      drawChart2();
    $('#chart_div2').width('100%');   

    if (<?php echo $existe ?> ==2) {
      $('#alert').show();
      $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
    }
    else
    {
      $('#alert').hide();      
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
          ['PAN', <?php echo $seguidores_crispin ?>, <?php echo $siguiendo_crispin ?>, <?php echo $tweets_crispin ?>]
        ]); 
        if (<?php echo $seguidores_isis ?>!=0 && <?php echo $siguiendo_isis ?>!=0 && <?php echo $tweets_isis ?>!=0)
        {
          $('#alert').hide();
          data.addRows([
            ['PVE', <?php echo $seguidores_isis ?>, <?php echo $siguiendo_isis ?>, <?php echo $tweets_isis ?>]          
          ]);
        }else{
          $('#alert').show();
          $('#alert').html('<div id="alert" class="alert alert-block"><button type="button" class="close" data-dismiss="alert"></button><strong>La información de Isis Villaseñor!</strong> Se encuentra disponible a partir de la fecha: 14 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $ultima_fecha ?></div>'); 
        } 
        if(<?php echo $seguidores_alma ?>!=0 && <?php echo $siguiendo_alma ?>!=0 && <?php echo $tweets_alma ?>!=0)
        {
          $('#alert2').hide();
          data.addRows([
            ['PRI', <?php echo $seguidores_alma ?>, <?php echo $siguiendo_alma ?>, <?php echo $tweets_alma ?>]      
          ]);
        }
        else{
          $('#alert2').show();
          $('#alert2').html('<div id="alert" class="alert alert-block"><button type="button" class="close" data-dismiss="alert"></button><strong>La información de Alma Delia Arreola!</strong> Se encuentra disponible a partir de la fecha: 19 Mayo 2015 al 3 de Junio 2015 </div>'); 
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
          ['Coalición \n PRI-PVE-PNAL', <?php echo $seguidores_lupe ?>, <?php echo $siguiendo_lupe ?>, <?php echo $tweets_lupe ?>]
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
          ['Coalición \n PRI-PVE-PNAL', <?php echo $seguidores_octavio ?>, <?php echo $siguiendo_octavio ?>, <?php echo $tweets_octavio ?>]
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
      drawChart6();
    $('#chart_div6').width('100%');  

    if (<?php echo $existe ?> ==2) {
      $('#alert').show();
      $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
    }
    else
    {
      $('#alert').hide();      
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
          ['PAN', <?php echo $seguidores_meyly ?>, <?php echo $siguiendo_meyly ?>, <?php echo $tweets_meyly ?>],
          ['Coalición \n PRI-PVE-PNAL', <?php echo $seguidores_hector ?>, <?php echo $siguiendo_hector ?>, <?php echo $tweets_hector ?>]
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

  if (<?php echo $vtab ?>==10) {  
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart10);

      function drawChart10() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');     
        data.addRows([
          ['PAN', <?php echo $seguidores_mesina ?>, <?php echo $siguiendo_mesina ?>, <?php echo $tweets_mesina ?>],
          ['Coalición \n PRI-PVE-PNAL', <?php echo $seguidores_pinto ?>, <?php echo $siguiendo_pinto ?>, <?php echo $tweets_pinto ?>]
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
      drawChart10();
    $('#chart_div10').width('100%');  

    if (<?php echo $existe ?> ==2) {
      $('#alert').show();
      $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
    }
    else
    {
      $('#alert').hide();      
    }
    $('#fecha_contenedor10').html('<?php echo $fecha ?>'); 
  }; 

  if (<?php echo $vtab ?>==11) {   
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart11);
      function drawChart11() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');  
        data.addRows([
          ['Coalición \n PRI-PVE-PNAL', <?php echo $seguidores_armida ?>, <?php echo $siguiendo_armida ?>, <?php echo $tweets_armida ?>]
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
      drawChart11();
    $('#chart_div11').width('100%');   

    if (<?php echo $existe ?> ==2) {
      $('#alert').show();
      $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
    }
    else
    {
      $('#alert').hide();      
    }
    $('#fecha_contenedor11').html('<?php echo $fecha ?>');
  }; 

  if (<?php echo $vtab ?>==12) {  
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart12);
      function drawChart12() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');  
        if (<?php echo $seguidores_marthaS ?>!=0 && <?php echo $siguiendo_marthaS ?>!=0 && <?php echo $tweets_marthaS ?>!=0)
        {
          $('#alert').hide();
          data.addRows([
            ['PAN', <?php echo $seguidores_marthaS ?>, <?php echo $siguiendo_marthaS ?>, <?php echo $tweets_marthaS ?>]
          ]);
        }else{
          $('#alert').show();
          $('#alert').html('<div id="alert" class="alert alert-block"><button type="button" class="close" data-dismiss="alert"></button><strong>La información de Martha Sosa!</strong> Se encuentra disponible a partir de la fecha: 14 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $ultima_fecha ?></div>'); 
        }
        data.addRows([
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
      drawChart12();
    $('#chart_div12').width('100%'); 

    if (<?php echo $existe ?> ==2) {
      $('#alert').show();
      $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
    }
    $('#fecha_contenedor12').html('<?php echo $fecha ?>');  
  }; 

  if (<?php echo $vtab ?>==13) {  
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart13);
      function drawChart13() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');     
        data.addRows([
          ['Coalición \n PRI-PVE-PNAL', <?php echo $seguidores_sergio ?>, <?php echo $siguiendo_sergio ?>, <?php echo $tweets_sergio ?>]
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
      drawChart13();
    $('#chart_div13').width('100%');   

    if (<?php echo $existe ?> ==2) {
      $('#alert').show();
      $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
    }
    else
    {
      $('#alert').hide();      
    }
    $('#fecha_contenedor13').html('<?php echo $fecha ?>');
  }; 

  if (<?php echo $vtab ?>==14) {   
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart14);
      function drawChart14() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');     
        data.addRows([
          ['PVE', <?php echo $seguidores_martha ?>, <?php echo $siguiendo_martha ?>, <?php echo $tweets_martha ?>]
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
      drawChart14();
    $('#chart_div14').width('100%');  

    if (<?php echo $existe ?> ==2) {
      $('#alert').show();
      $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
    }
    else
    {
      $('#alert').hide();      
    }
    $('#fecha_contenedor14').html('<?php echo $fecha ?>'); 
  }; 

  if (<?php echo $vtab ?>==15) { 
    if (<?php echo $seguidores_felicitas ?>!=0 && <?php echo $siguiendo_felicitas ?>!=0 && <?php echo $tweets_felicitas ?>!=0)
    {   
        $('#alert').hide(); 
        google.load("visualization", "1", {packages: ["corechart"]});
        google.setOnLoadCallback(drawChart15);
        function drawChart15() {
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Candidatos');
          data.addColumn('number', 'Seguidores');
          data.addColumn('number', 'Siguiendo');
          data.addColumn('number', 'Tweets');     
          data.addRows([          
              ['Coalición \n PRI-PVE-PNAL', <?php echo $seguidores_felicitas ?>, <?php echo $siguiendo_felicitas ?>, <?php echo $tweets_felicitas ?>]
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
        drawChart15();
      $('#chart_div15').width('100%');  
    }
    else{
      $('#alert').show();
      $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong>Fecha No Encontrada!</strong> Se encuentra disponible a partir de la fecha: 19 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $ultima_fecha ?> <br/> Se cargaron los datos de la última fecha encontrada</div>');
    }
    $('#fecha_contenedor15').html('<?php echo $fecha ?>');
  }; 

  if (<?php echo $vtab ?>==16) {  
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart16);

      function drawChart16() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');     
        data.addRows([
          ['Coalición \n PRI-PVE-PNAL', <?php echo $seguidores_santiago ?>, <?php echo $siguiendo_santiago ?>, <?php echo $tweets_santiago ?>]
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
      drawChart16();
    $('#chart_div16').width('100%');   

    if (<?php echo $existe ?> ==2) {
      $('#alert').show();
      $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
    }
    else
    {
      $('#alert').hide();      
    }
    $('#fecha_contenedor16').html('<?php echo $fecha ?>');
  }; 
  </script>

