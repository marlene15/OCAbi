<!--Mapa de Villa de álvarez-->
<script type="text/javascript">
    //Datos villa de álvarez
    <?php //Llenamos el array con las coordenadas
        $a5 = array();
        foreach ($gobernadores_villa as $gobernadores_villa) 
        {
            $a5[] = array(
                "Lat" => $gobernadores_villa->latitud,
                "Long" => $gobernadores_villa->longitud
            );
        }                              
    ?>

      function drawChart2() 
      {
        //Datos villa de álvarez
        var data2 = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a5); $i++) {
              ?>
              [<?php echo $a5[$i]['Lat'] ?>, <?php echo $a5[$i]['Long'] ?>],
              <?php } ?>              
            ]
        );
        var map2 = new google.visualization.Map(document.getElementById('map_div2'));
        var options = { showTip: true };
        map2.draw(data2, options);
      }
      drawChart2();
</script>

