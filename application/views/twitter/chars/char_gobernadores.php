<script type="text/javascript">
if (<?php echo $vtab ?>==1) {
      google.load("visualization", "1", {packages: ["corechart"]});    
      google.setOnLoadCallback(drawChart);
      function drawChart() 
      {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['PAN', <?php echo $seguidoresj ?>, <?php echo $siguiendoj ?>, <?php echo $tweetsj ?>],
          ['PRI, PVE, PNA', <?php echo $seguidoresn ?>, <?php echo $siguiendon ?>, <?php echo $tweetsn ?>],
          ['PRD', <?php echo $seguidoresm ?>, <?php echo $siguiendom ?>, <?php echo $tweetsm ?>],
          ['MC', <?php echo $seguidoresl ?>, <?php echo $siguiendol ?>, <?php echo $tweetsl ?>]        
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
          title: 'C A N D I D A T O S'
        },         
        height: 400,
        series: {
          0: {
            type: 'bars',
            color: '#DF0101'
          },
          1: {
            type: 'bars',
            color: '#0101DF'
          },
          2: {
            type: 'bars',
            color: '#868A08'
          }
        },
        vAxis: {
          title: 'C A N T I D A D'
        }
      };       

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(view, options);          
      }
      drawChart();
      $('#chart_div').width('100%');  
  };      
  if (<?php echo $existe ?> ==2) {
    $('#alert').show();
    $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $ultima_fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
  }
  else
  {
    $('#alert').hide();      
  }
  $('#fecha_contenedor').html('<?php echo $ultima_fecha ?>');
  </script>