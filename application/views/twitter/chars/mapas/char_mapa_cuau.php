<!--Mapa de Cuauhtémoc-->
<script type="text/javascript">
    //Datos cuau
    <?php //Llenamos el array con las coordenadas
        $a29 = array();
        foreach ($gobernadores_cuau as $gobernadores_cuau) 
        {
            $a29[] = array(
                "Lat" => $gobernadores_cuau->latitud,
                "Long" => $gobernadores_cuau->longitud
            );
        }                        
    ?>

      function drawChart8() 
      {        
        //Datos Coqui
        var data8 = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a29); $i++) {
              ?>
              [<?php echo $a29[$i]['Lat'] ?>, <?php echo $a29[$i]['Long'] ?>],
              <?php } ?>              
            ]
        );
        var options = { showTip: true };
        var map8 = new google.visualization.Map(document.getElementById('map_div8'));
        map8.draw(data8, options);
      }
      drawChart8();
</script>