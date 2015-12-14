<!--Mapa de Coquimatlán-->
<script type="text/javascript">
    //Datos Coqui
    <?php //Llenamos el array con las coordenadas
        $a25 = array();
        foreach ($gobernadores_coqui as $gobernadores_coqui) 
        {
            $a25[] = array(
                "Lat" => $gobernadores_coqui->latitud,
                "Long" => $gobernadores_coqui->longitud
            );
        }  
                          
    ?>

      function drawChart7() 
      {        
        //Datos Coqui
        var data7 = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a25); $i++) {
              ?>
              [<?php echo $a25[$i]['Lat'] ?>, <?php echo $a25[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
        var options = { showTip: true };
        var map7 = new google.visualization.Map(document.getElementById('map_div7'));
        map7.draw(data7, options);
      }
      drawChart7();
</script>