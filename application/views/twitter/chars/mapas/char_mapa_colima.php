<!--Mapa de Colima-->
<script type="text/javascript">
    //Mapa de Colima   
    //Datos Colima
    <?php //Llenamos el array con las coordenadas
        $a = array();
        foreach ($gobernadores_colima as $gobernadores_colima) 
        {
            $a[] = array(
                "Lat" => $gobernadores_colima->latitud,
                "Long" => $gobernadores_colima->longitud
            );
        }  
                        
    ?>

      function drawChart() 
      {        
        //Datos Colima
        var data = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a); $i++) {
              ?>
              [<?php echo $a[$i]['Lat'] ?>, <?php echo $a[$i]['Long'] ?>],
              <?php } ?>              
            ]
        );
        var options = { showTip: true };
        var map = new google.visualization.Map(document.getElementById('map_div'));
        map.draw(data, options);
      }
      drawChart();
</script>