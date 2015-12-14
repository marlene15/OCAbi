<!--Mapa de Minatitlán-->
<script type="text/javascript">
    //Datos mina
    <?php //Llenamos el array con las coordenadas
        $a37 = array();
        foreach ($gobernadores_mina as $gobernadores_mina) 
        {
            $a37[] = array(
                "Lat" => $gobernadores_mina->latitud,
                "Long" => $gobernadores_mina->longitud
            );
        }                         
    ?>

      function drawChart10() 
      {        
        //Datos mina
        var data10 = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a37); $i++) {
              ?>
              [<?php echo $a37[$i]['Lat'] ?>, <?php echo $a37[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
        var options = { showTip: true };
        var map10 = new google.visualization.Map(document.getElementById('map_div10'));
        map10.draw(data10, options);
      }
      drawChart10();
</script>

