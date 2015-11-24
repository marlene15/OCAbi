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

        $a38 = array();
        foreach ($dipFederales_mina as $dipFederales_mina) 
        {
            $a38[] = array(
                "Lat" => $dipFederales_mina->latitud,
                "Long" => $dipFederales_mina->longitud
            );
        }

        $a39 = array();
        foreach ($dipLocales_mina as $dipLocales_mina) 
        {
            $a39[] = array(
                "Lat" => $dipLocales_mina->latitud,
                "Long" => $dipLocales_mina->longitud
            );
        }

        $a40 = array();
        foreach ($presidentes_mina as $presidentes_mina) 
        {
            $a40[] = array(
                "Lat" => $presidentes_mina->latitud,
                "Long" => $presidentes_mina->longitud
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
              <?php for ($i=0; $i<count($a38); $i++) {
              ?>
              [<?php echo $a38[$i]['Lat'] ?>, <?php echo $a38[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a39); $i++) {
              ?>
              [<?php echo $a39[$i]['Lat'] ?>, <?php echo $a39[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a40); $i++) {
              ?>
              [<?php echo $a40[$i]['Lat'] ?>, <?php echo $a40[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
        var options = { showTip: true };
        var map10 = new google.visualization.Map(document.getElementById('map_div10'));
        map10.draw(data10, options);
      }
      drawChart10();
</script>

