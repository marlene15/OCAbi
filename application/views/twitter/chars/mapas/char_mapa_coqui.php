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

        $a26 = array();
        foreach ($dipFederales_coqui as $dipFederales_coqui) 
        {
            $a26[] = array(
                "Lat" => $dipFederales_coqui->latitud,
                "Long" => $dipFederales_coqui->longitud
            );
        }

        $a27 = array();
        foreach ($dipLocales_coqui as $dipLocales_coqui) 
        {
            $a27[] = array(
                "Lat" => $dipLocales_coqui->latitud,
                "Long" => $dipLocales_coqui->longitud
            );
        }

        $a28 = array();
        foreach ($presidentes_coqui as $presidentes_coqui) 
        {
            $a28[] = array(
                "Lat" => $presidentes_coqui->latitud,
                "Long" => $presidentes_coqui->longitud
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
              <?php for ($i=0; $i<count($a26); $i++) {
              ?>
              [<?php echo $a26[$i]['Lat'] ?>, <?php echo $a26[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a27); $i++) {
              ?>
              [<?php echo $a27[$i]['Lat'] ?>, <?php echo $a27[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a28); $i++) {
              ?>
              [<?php echo $a28[$i]['Lat'] ?>, <?php echo $a28[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
        var options = { showTip: true };
        var map7 = new google.visualization.Map(document.getElementById('map_div7'));
        map7.draw(data7, options);
      }
      drawChart7();
</script>