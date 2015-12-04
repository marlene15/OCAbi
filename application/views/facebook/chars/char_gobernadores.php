 <!--GRAFICA GOBERNADOR-->
  <script type="text/javascript">
  if (<?php echo $vtab ?>==1) 
  {
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Likes');
        data.addColumn('number', 'Posts');       
        data.addRows([
          ['PRI',<?php echo $megustaci ?>, <?php echo $seguidoresci ?>],
          ['PRI',<?php echo $megustacj ?>, <?php echo $seguidorescj ?>],
          ['PRD',<?php echo $megustacm ?>, <?php echo $seguidorescm ?>],
          ['MC',<?php echo $megustacl ?>, <?php echo $seguidorescl ?>]       
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
                        }]);
        var options = {
          //title: '@oca_face',
          hAxis: {
            title: 'C A N D I D A T O S'
          },         
          height: 600,
          series: {
            0: {
              type: 'bars',
              color: '#33559B'
            },
            1: {
              type: 'bars',
              color: '#6F3697'
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
    $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 al 3 de Junio 2015, del 8 de Junio 2015 al 3 de Julio 2015 y del 17 de Noviembre 2015 al <?php echo $ultima_fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
  }
  else
  {
    $('#alert').hide();      
  }
  $('#fecha_contenedor').html('<?php echo $ultima_fecha ?>');
  </script>