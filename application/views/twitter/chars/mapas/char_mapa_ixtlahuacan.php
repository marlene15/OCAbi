<!--Mapa de Ixtlahuacán-->
<script type="text/javascript">
    //Datos ixtlahuacan
    <?php //Llenamos el array con las coordenadas
        $a33 = array();
        foreach ($gobernadores_ixtlahuacan as $gobernadores_ixtlahuacan) 
        {
            $a33[] = array(
                "Lat" => $gobernadores_ixtlahuacan->latitud,
                "Long" => $gobernadores_ixtlahuacan->longitud
            );
        }                         
    ?>

      function drawChart9() 
      {        
        //Datos ixtlahuacan
        var data9 = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a33); $i++) {
              ?>
              [<?php echo $a33[$i]['Lat'] ?>, <?php echo $a33[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
        var options = { showTip: true };
        var map9 = new google.visualization.Map(document.getElementById('map_div9'));
        map9.draw(data9, options);
      }
      drawChart9();
</script>