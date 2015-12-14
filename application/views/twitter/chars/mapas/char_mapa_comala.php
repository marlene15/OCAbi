<!--Mapa de Comala-->
<script type="text/javascript">
    //Datos Comala
    <?php //Llenamos el array con las coordenadas
        $a21 = array();
        foreach ($gobernadores_comala as $gobernadores_comala) 
        {
            $a21[] = array(
                "Lat" => $gobernadores_comala->latitud,
                "Long" => $gobernadores_comala->longitud
            );
        }                        
    ?>

      function drawChart6() 
      {        
        //Datos Comala
        var data6 = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a21); $i++) {
              ?>
              [<?php echo $a21[$i]['Lat'] ?>, <?php echo $a21[$i]['Long'] ?>],
              <?php } ?>              
            ]
        );
        var options = { showTip: true };
        var map6 = new google.visualization.Map(document.getElementById('map_div6'));
        map6.draw(data6, options);
      }
      drawChart6();
</script>