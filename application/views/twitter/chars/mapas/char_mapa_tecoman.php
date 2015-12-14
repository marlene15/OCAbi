<!--Mapa de Tecomán-->
<script type="text/javascript">
    //Datos Tecomán
    <?php //Llenamos el array con las coordenadas
        $a13 = array();
        foreach ($gobernadores_tecoman as $gobernadores_tecoman) 
        {
            $a13[] = array(
                "Lat" => $gobernadores_tecoman->latitud,
                "Long" => $gobernadores_tecoman->longitud
            );
        }                          
    ?>
        
      function drawChart4() 
      {
        //Datos Manzanillo
        var data4 = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a13); $i++) {
              ?>
              [<?php echo $a13[$i]['Lat'] ?>, <?php echo $a13[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
        var map4 = new google.visualization.Map(document.getElementById('map_div4'));
        var options = { showTip: true };
        map4.draw(data4, options);
      }
      drawChart4();
</script>
