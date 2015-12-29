<script type="text/javascript">
  if (<?php echo $vtab ?>==1) {   
    if (<?php echo $fechaInicioMayor ?><1 && <?php echo $existe ?>>0)
    {
        $('#alert').hide(); 
        google.load("visualization", "1", {packages: ["corechart"]});    
        google.setOnLoadCallback(drawChart);
        <?php //char2 TWITTER
          $a = array();
          foreach ($afmedios as $afmedios) 
          {
            $a[] = array(
              "Fecha" => $afmedios->fecha,
              "Megusta" => $afmedios->Megusta,
              "PersonasHablan" => $afmedios->PersonasHablan
            );
          }                       
        ?> 

        function drawChart() {
          var data = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Likes', 'Posts'],
              <?php for ($i=0; $i<count($a); $i++) {
                  ?>
                  ['<?php echo $a[$i]['Fecha'] ?>', <?php echo $a[$i]['Megusta'] ?>, <?php echo $a[$i]['PersonasHablan'] ?>],
              <?php } ?>
            ]
          );  
          var options = {
            title: '@AFmedios',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {3: {type: "line"}}
          };
          var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
          chart.draw(data, options);              
        }   
      drawChart();
      $('#chart_div').width('100%');  
    };   
  }; 
  </script>
