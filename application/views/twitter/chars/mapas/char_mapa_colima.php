<!--Mapa de Colima-->
<script type="text/javascript">
    //Mapa de Colima   
    //Datos Colima
    <?php //Llenamos el array con las coordenadas
        $a = array();
        foreach ($gobernadores_colima as $gobernadores_colima) 
        {
            $a[] = array(
                "Lat" => $gobernadores_colima->latitud,
                "Long" => $gobernadores_colima->longitud
            );
        }  

        $a2 = array();
        foreach ($dipFederales_colima as $dipFederales_colima) 
        {
            $a2[] = array(
                "Lat" => $dipFederales_colima->latitud,
                "Long" => $dipFederales_colima->longitud
            );
        }

        $a3 = array();
        foreach ($dipLocales_colima as $dipLocales_colima) 
        {
            $a3[] = array(
                "Lat" => $dipLocales_colima->latitud,
                "Long" => $dipLocales_colima->longitud
            );
        }

        $a4 = array();
        foreach ($presidentes_colima as $presidentes_colima) 
        {
            $a4[] = array(
                "Lat" => $presidentes_colima->latitud,
                "Long" => $presidentes_colima->longitud
            );
        }                        
    ?>

      function drawChart() 
      {        
        //Datos Colima
        var data = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a); $i++) {
              ?>
              [<?php echo $a[$i]['Lat'] ?>, <?php echo $a[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a2); $i++) {
              ?>
              [<?php echo $a2[$i]['Lat'] ?>, <?php echo $a2[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a3); $i++) {
              ?>
              [<?php echo $a3[$i]['Lat'] ?>, <?php echo $a3[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a4); $i++) {
              ?>
              [<?php echo $a4[$i]['Lat'] ?>, <?php echo $a4[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
        var options = { showTip: true };
        var map = new google.visualization.Map(document.getElementById('map_div'));
        map.draw(data, options);
      }
      drawChart();
</script>