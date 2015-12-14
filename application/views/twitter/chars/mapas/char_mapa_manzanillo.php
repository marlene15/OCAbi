<!--Mapa de Manzanillo-->
<script type="text/javascript">
    //Datos Manzanillo
    <?php //Llenamos el array con las coordenadas
        $a9 = array();
        foreach ($gobernadores_manzanillo as $gobernadores_manzanillo) 
        {
            $a9[] = array(
                "Lat" => $gobernadores_manzanillo->latitud,
                "Long" => $gobernadores_manzanillo->longitud
            );
        }                               
    ?>
      function drawChart3() 
      {
        //Datos Manzanillo
        var data3 = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a9); $i++) {
              ?>
              [<?php echo $a9[$i]['Lat'] ?>, <?php echo $a9[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
        var map3 = new google.visualization.Map(document.getElementById('map_div3'));
        var options = { showTip: true };
        map3.draw(data3, options);
      }
      drawChart3();
</script>

