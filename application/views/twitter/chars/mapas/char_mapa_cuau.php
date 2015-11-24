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

        $a30 = array();
        foreach ($dipFederales_cuau as $dipFederales_cuau) 
        {
            $a30[] = array(
                "Lat" => $dipFederales_cuau->latitud,
                "Long" => $dipFederales_cuau->longitud
            );
        }

        $a31 = array();
        foreach ($dipLocales_cuau as $dipLocales_cuau) 
        {
            $a31[] = array(
                "Lat" => $dipLocales_cuau->latitud,
                "Long" => $dipLocales_cuau->longitud
            );
        }

        $a32 = array();
        foreach ($presidentes_cuau as $presidentes_cuau) 
        {
            $a32[] = array(
                "Lat" => $presidentes_cuau->latitud,
                "Long" => $presidentes_cuau->longitud
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
              <?php for ($i=0; $i<count($a30); $i++) {
              ?>
              [<?php echo $a30[$i]['Lat'] ?>, <?php echo $a30[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a31); $i++) {
              ?>
              [<?php echo $a31[$i]['Lat'] ?>, <?php echo $a31[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a32); $i++) {
              ?>
              [<?php echo $a32[$i]['Lat'] ?>, <?php echo $a32[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
        var options = { showTip: true };
        var map8 = new google.visualization.Map(document.getElementById('map_div8'));
        map8.draw(data8, options);
      }
      drawChart8();
</script>