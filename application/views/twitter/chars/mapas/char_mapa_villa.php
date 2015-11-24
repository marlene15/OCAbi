<!--Mapa de Villa de álvarez-->
<script type="text/javascript">
    //Datos villa de álvarez
    <?php //Llenamos el array con las coordenadas
        $a5 = array();
        foreach ($gobernadores_villa as $gobernadores_villa) 
        {
            $a5[] = array(
                "Lat" => $gobernadores_villa->latitud,
                "Long" => $gobernadores_villa->longitud
            );
        }  

        $a6 = array();
        foreach ($dipFederales_villa as $dipFederales_villa) 
        {
            $a6[] = array(
                "Lat" => $dipFederales_villa->latitud,
                "Long" => $dipFederales_villa->longitud
            );
        }

        $a7 = array();
        foreach ($dipLocales_villa as $dipLocales_villa) 
        {
            $a7[] = array(
                "Lat" => $dipLocales_villa->latitud,
                "Long" => $dipLocales_villa->longitud
            );
        }

        $a8 = array();
        foreach ($presidentes_villa as $presidentes_villa) 
        {
            $a8[] = array(
                "Lat" => $presidentes_villa->latitud,
                "Long" => $presidentes_villa->longitud
            );
        }                          
    ?>

      function drawChart2() 
      {
        //Datos villa de álvarez
        var data2 = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a5); $i++) {
              ?>
              [<?php echo $a5[$i]['Lat'] ?>, <?php echo $a5[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a6); $i++) {
              ?>
              [<?php echo $a6[$i]['Lat'] ?>, <?php echo $a6[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a7); $i++) {
              ?>
              [<?php echo $a7[$i]['Lat'] ?>, <?php echo $a7[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a8); $i++) {
              ?>
              [<?php echo $a8[$i]['Lat'] ?>, <?php echo $a8[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
        var map2 = new google.visualization.Map(document.getElementById('map_div2'));
        var options = { showTip: true };
        map2.draw(data2, options);
      }
      drawChart2();
</script>

