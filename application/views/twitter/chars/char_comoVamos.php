<script type="text/javascript">
  if (<?php echo $vtab ?>==2) {   
    if (<?php echo $fechaInicioMayor ?><1 && <?php echo $existe ?>>0)
    {
        $('#alert').hide(); 
        google.load("visualization", "1", {packages: ["corechart"]});    
        google.setOnLoadCallback(drawChart2);
        <?php //char2 TWITTER
          $a = array();
          foreach ($comoVamos as $comoVamos) 
          {
              $a[] = array(
                  "fecha" => $comoVamos->fecha,
                  "seguidores" => $comoVamos->seguidores,
                  "siguiendo" => $comoVamos->siguiendo,
                  "tweets" => $comoVamos->tweets,
                  "promedio" => ($comoVamos->seguidores+$comoVamos->siguiendo+$comoVamos->tweets)/3
              );
          }                       
        ?> 

         ////////////////////////////////////////comoVamos TWITTER
        function drawChart2() {
          var data = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
              <?php for ($i=0; $i<count($a); $i++) {
                  ?>
                  ['<?php echo $a[$i]['fecha'] ?>', <?php echo $a[$i]['seguidores'] ?>, <?php echo $a[$i]['siguiendo'] ?>, <?php echo $a[$i]['tweets'] ?>, <?php echo $a[$i]['promedio'] ?>],
              <?php } ?>
            ]
          );  
          var options = {
            title: '@Comovamoscolima',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {3: {type: "line"}}
          };
          var chart = new google.visualization.ComboChart(document.getElementById('chart_div2'));
          chart.draw(data, options);              
        }   
      drawChart2();
      $('#chart_div2').width('100%');  
    };   
  }; 
  </script>
