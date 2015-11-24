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

        $a14 = array();
        foreach ($dipFederales_tecoman as $dipFederales_tecoman) 
        {
            $a14[] = array(
                "Lat" => $dipFederales_tecoman->latitud,
                "Long" => $dipFederales_tecoman->longitud
            );
        }

        $a15 = array();
        foreach ($dipLocales_tecoman as $dipLocales_tecoman) 
        {
            $a15[] = array(
                "Lat" => $dipLocales_tecoman->latitud,
                "Long" => $dipLocales_tecoman->longitud
            );
        }

        $a16 = array();
        foreach ($presidentes_tecoman as $presidentes_tecoman) 
        {
            $a16[] = array(
                "Lat" => $presidentes_tecoman->latitud,
                "Long" => $presidentes_tecoman->longitud
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
              <?php for ($i=0; $i<count($a14); $i++) {
              ?>
              [<?php echo $a14[$i]['Lat'] ?>, <?php echo $a14[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a15); $i++) {
              ?>
              [<?php echo $a15[$i]['Lat'] ?>, <?php echo $a15[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a16); $i++) {
              ?>
              [<?php echo $a16[$i]['Lat'] ?>, <?php echo $a16[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
        var map4 = new google.visualization.Map(document.getElementById('map_div4'));
        var options = { showTip: true };
        map4.draw(data4, options);
      }
      drawChart4();
</script>
