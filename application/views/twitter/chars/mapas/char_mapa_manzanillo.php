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

        $a10 = array();
        foreach ($dipFederales_manzanillo as $dipFederales_manzanillo) 
        {
            $a10[] = array(
                "Lat" => $dipFederales_manzanillo->latitud,
                "Long" => $dipFederales_manzanillo->longitud
            );
        }

        $a11 = array();
        foreach ($dipLocales_manzanillo as $dipLocales_manzanillo) 
        {
            $a11[] = array(
                "Lat" => $dipLocales_manzanillo->latitud,
                "Long" => $dipLocales_manzanillo->longitud
            );
        }

        $a12 = array();
        foreach ($presidentes_manzanillo as $presidentes_manzanillo) 
        {
            $a12[] = array(
                "Lat" => $presidentes_manzanillo->latitud,
                "Long" => $presidentes_manzanillo->longitud
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
              <?php for ($i=0; $i<count($a10); $i++) {
              ?>
              [<?php echo $a10[$i]['Lat'] ?>, <?php echo $a10[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a11); $i++) {
              ?>
              [<?php echo $a11[$i]['Lat'] ?>, <?php echo $a11[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a12); $i++) {
              ?>
              [<?php echo $a12[$i]['Lat'] ?>, <?php echo $a12[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
        var map3 = new google.visualization.Map(document.getElementById('map_div3'));
        var options = { showTip: true };
        map3.draw(data3, options);
      }
      drawChart3();
</script>

