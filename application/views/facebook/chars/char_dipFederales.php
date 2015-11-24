<script type="text/javascript">
  if (<?php echo $vtab ?>==1) {
  	  google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Likes');
        data.addColumn('number', 'Posts');       
        data.addRows([
          ['PAN',<?php echo $megustacj ?>, <?php echo $seguidorescj ?>],
          ['PRI',<?php echo $megustace ?>, <?php echo $seguidoresce ?>],
          ['PRD',<?php echo $megustaci ?>, <?php echo $seguidoresci ?>],
          ['MC',<?php echo $megustacs ?>, <?php echo $seguidorescs ?>],
          ['PM',<?php echo $megustaca ?>, <?php echo $seguidoresca ?>],
          ['PES',<?php echo $megustacr ?>, <?php echo $seguidorescr ?>],
          ['PH',<?php echo $megustacc ?>, <?php echo $seguidorescc ?>]
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
            title: 'Candidatos'
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
      $('#alert').html('<div id="alert" class="alert fade in"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 3 Marzo 2015 hasta el <?php echo $fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
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
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['Coalición \n PRI-PVE',<?php echo $megustacn ?>, <?php echo $seguidorescn ?>],
        ['NA',<?php echo $megustacp ?>, <?php echo $seguidorescp ?>],
        ['PT',<?php echo $megustacev ?>, <?php echo $seguidorescev ?>],
        ['MC',<?php echo $megustacju ?>, <?php echo $seguidorescju ?>],
        ['PM',<?php echo $megustacm ?>, <?php echo $seguidorescm ?>]
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
          title: 'Candidatos'
        },         
        width: 1000,
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
      $('#alert').html('<div id="alert" class="alert fade in"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 3 Marzo 2015 hasta el <?php echo $fecha ?><br/>Se colocó la última fecha encontrada</center></div>');
    }
    else
    {
      $('#alert').hide();      
    }
    $('#fecha_contenedor2').html('<?php echo $fecha ?>');
   };
 </script>