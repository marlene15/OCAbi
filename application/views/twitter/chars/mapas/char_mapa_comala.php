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

        $a22 = array();
        foreach ($dipFederales_comala as $dipFederales_comala) 
        {
            $a22[] = array(
                "Lat" => $dipFederales_comala->latitud,
                "Long" => $dipFederales_comala->longitud
            );
        }

        $a23 = array();
        foreach ($dipLocales_comala as $dipLocales_comala) 
        {
            $a23[] = array(
                "Lat" => $dipLocales_comala->latitud,
                "Long" => $dipLocales_comala->longitud
            );
        }

        $a24 = array();
        foreach ($presidentes_comala as $presidentes_comala) 
        {
            $a24[] = array(
                "Lat" => $presidentes_comala->latitud,
                "Long" => $presidentes_comala->longitud
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
              <?php for ($i=0; $i<count($a22); $i++) {
              ?>
              [<?php echo $a22[$i]['Lat'] ?>, <?php echo $a22[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a23); $i++) {
              ?>
              [<?php echo $a23[$i]['Lat'] ?>, <?php echo $a23[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a24); $i++) {
              ?>
              [<?php echo $a24[$i]['Lat'] ?>, <?php echo $a24[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
        var options = { showTip: true };
        var map6 = new google.visualization.Map(document.getElementById('map_div6'));
        map6.draw(data6, options);
      }
      drawChart6();
</script>