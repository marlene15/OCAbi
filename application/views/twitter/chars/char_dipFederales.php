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
        ['PAN', <?php echo $seguidoresjm ?>, <?php echo $siguiendojm ?>, <?php echo $tweetsjm ?>],
        ['Coalición \n PRI-PVE', <?php echo $seguidoresk ?>, <?php echo $siguiendok ?>, <?php echo $tweetsk ?>],
        ['PRD', <?php echo $seguidoresi ?>, <?php echo $siguiendoi ?>, <?php echo $tweetsi ?>]
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
  	drawChart();
  	$('#chart_div').width('100%');	

    if (<?php echo $existe ?> ==2) {
      $('#alert').show();
      $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
    }
    else
    {
      $('#alert').hide();      
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
        ['PRI Norma Galindo Matías', <?php echo $seguidoresn ?>, <?php echo $siguiendon ?>, <?php echo $tweetsn ?>],
        ['MOVIMIENTO CIUDADANO Juan Carlos Olave Neri', <?php echo $seguidoresj ?>, <?php echo $siguiendoj ?>, <?php echo $tweetsj ?>]
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
  </script>