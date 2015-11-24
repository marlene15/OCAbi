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

        $a34 = array();
        foreach ($dipFederales_ixtlahuacan as $dipFederales_ixtlahuacan) 
        {
            $a34[] = array(
                "Lat" => $dipFederales_ixtlahuacan->latitud,
                "Long" => $dipFederales_ixtlahuacan->longitud
            );
        }

        $a35 = array();
        foreach ($dipLocales_ixtlahuacan as $dipLocales_ixtlahuacan) 
        {
            $a35[] = array(
                "Lat" => $dipLocales_ixtlahuacan->latitud,
                "Long" => $dipLocales_ixtlahuacan->longitud
            );
        }

        $a36 = array();
        foreach ($presidentes_ixtlahuacan as $presidentes_ixtlahuacan) 
        {
            $a36[] = array(
                "Lat" => $presidentes_ixtlahuacan->latitud,
                "Long" => $presidentes_ixtlahuacan->longitud
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
              <?php for ($i=0; $i<count($a34); $i++) {
              ?>
              [<?php echo $a34[$i]['Lat'] ?>, <?php echo $a34[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a35); $i++) {
              ?>
              [<?php echo $a35[$i]['Lat'] ?>, <?php echo $a35[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a36); $i++) {
              ?>
              [<?php echo $a36[$i]['Lat'] ?>, <?php echo $a36[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
        var options = { showTip: true };
        var map9 = new google.visualization.Map(document.getElementById('map_div9'));
        map9.draw(data9, options);
      }
      drawChart9();
</script>