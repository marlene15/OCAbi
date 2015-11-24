<script type="text/javascript">
  if (<?php echo $vtab ?>==1) {   
    if (<?php echo $fechaInicioMayor ?><1 && <?php echo $existe ?>>0)
    {
        $('#alert').hide(); 
        google.load("visualization", "1", {packages: ["corechart"]});    
        google.setOnLoadCallback(drawChart);
        ////////PRI
        <?php //char1  
            $a = array();
            foreach ($pri as $pri) 
            {
                $a[] = array(
                    "fecha" => $pri->fecha,
                    "seguidores" => $pri->seguidores,
                    "siguiendo" => $pri->siguiendo,
                    "tweets" => $pri->tweets,
                    "promedio" => ($pri->seguidores+$pri->siguiendo+$pri->tweets)/3
                );
            }                     
        ?> 
        <?php //char2  
            $a2 = array();
            foreach ($jips_2015 as $jips_2015) 
            {
                $a2[] = array(
                    "fecha" => $jips_2015->fecha,
                    "seguidores" => $jips_2015->seguidores,
                    "siguiendo" => $jips_2015->siguiendo,
                    "tweets" => $jips_2015->tweets,
                    "promedio" => ($jips_2015->seguidores+$jips_2015->siguiendo+$jips_2015->tweets)/3
                );
            }                       
        ?> 
        <?php //char3  
            $a3 = array();
            foreach ($JIPSColima as $JIPSColima) 
            {
                $a3[] = array(
                    "fecha" => $JIPSColima->fecha,
                    "seguidores" => $JIPSColima->seguidores,
                    "siguiendo" => $JIPSColima->siguiendo,
                    "tweets" => $JIPSColima->tweets,
                    "promedio" => ($JIPSColima->seguidores+$JIPSColima->siguiendo+$JIPSColima->tweets)/3
                );
            }                       
        ?> 
        <?php //char4  
            $a4 = array();
            foreach ($jipsvdea as $jipsvdea) 
            {
                $a4[] = array(
                    "fecha" => $jipsvdea->fecha,
                    "seguidores" => $jipsvdea->seguidores,
                    "siguiendo" => $jipsvdea->siguiendo,
                    "tweets" => $jipsvdea->tweets,
                    "promedio" => ($jipsvdea->seguidores+$jipsvdea->siguiendo+$jipsvdea->tweets)/3
                );
            }                       
        ?>
        <?php //char5  
            $a5 = array();
            foreach ($MiSelfiecoNacho as $MiSelfiecoNacho) 
            {
                $a5[] = array(
                    "fecha" => $MiSelfiecoNacho->fecha,
                    "seguidores" => $MiSelfiecoNacho->seguidores,
                    "siguiendo" => $MiSelfiecoNacho->siguiendo,
                    "tweets" => $MiSelfiecoNacho->tweets,
                    "promedio" => ($MiSelfiecoNacho->seguidores+$MiSelfiecoNacho->siguiendo+$MiSelfiecoNacho->tweets)/3
                );
            }                       
        ?>

        ////////////////////////////////////////PRI
        function drawChart() {
          var data = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
              <?php for ($i=0; $i<count($a); $i++) {
                  ?>
                  ['<?php echo $a[$i]['fecha'] ?>', <?php echo $a[$i]['seguidores'] ?>, <?php echo $a[$i]['siguiendo'] ?>, <?php echo $a[$i]['tweets'] ?>, <?php echo $a[$i]['promedio'] ?>],
              <?php } ?>
            ]
          );  
          var options = {
            title: '@PRI_Colima',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {3: {type: "line"}}
          };
          var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
          chart.draw(data, options);

          //////////////char2
          var data2 = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
              <?php for ($i=0; $i<count($a2); $i++) {
                  ?>
                  ['<?php echo $a2[$i]['fecha'] ?>', <?php echo $a2[$i]['seguidores'] ?>, <?php echo $a2[$i]['siguiendo'] ?>, <?php echo $a2[$i]['tweets'] ?>, <?php echo $a2[$i]['promedio'] ?>],
              <?php } ?>
            ]
          );  
          var options2 = {
            title: '@JIPS2015',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {3: {type: "line"}}
          };
          var chart2 = new google.visualization.ComboChart(document.getElementById('chart_div2'));
          chart2.draw(data2, options2);

          //////////////char3
          var data3 = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
              <?php for ($i=0; $i<count($a3); $i++) {
                  ?>
                  ['<?php echo $a3[$i]['fecha'] ?>', <?php echo $a3[$i]['seguidores'] ?>, <?php echo $a3[$i]['siguiendo'] ?>, <?php echo $a3[$i]['tweets'] ?>, <?php echo $a3[$i]['promedio'] ?>],
              <?php } ?>
            ]
          );  
          var options3 = {
            title: '@JIPSColima',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {3: {type: "line"}}
          };
          var chart3 = new google.visualization.ComboChart(document.getElementById('chart_div3'));
          chart3.draw(data3, options3);

          //////////////char4
          var data4 = google.visualization.arrayToDataTable(
              [
                ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
                <?php for ($i=0; $i<count($a4); $i++) {
                    ?>
                    ['<?php echo $a4[$i]['fecha'] ?>', <?php echo $a4[$i]['seguidores'] ?>, <?php echo $a4[$i]['siguiendo'] ?>, <?php echo $a4[$i]['tweets'] ?>, <?php echo $a4[$i]['promedio'] ?>],
                <?php } ?>
              ]
            );  
            var options4 = {
              title: '@jipsvdea',
              hAxis: {title: "Fecha"},
              seriesType: "bars",
              series: {3: {type: "line"}}
            };
            var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div4'));
            chart4.draw(data4, options4);

           //////////////char5
          var data5 = google.visualization.arrayToDataTable(
              [
                ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
                <?php for ($i=0; $i<count($a5); $i++) {
                    ?>
                    ['<?php echo $a5[$i]['fecha'] ?>', <?php echo $a5[$i]['seguidores'] ?>, <?php echo $a5[$i]['siguiendo'] ?>, <?php echo $a5[$i]['tweets'] ?>, <?php echo $a5[$i]['promedio'] ?>],
                <?php } ?>
              ]
            );  
            var options5 = {
              title: '@MiSelfiecoNacho',
              hAxis: {title: "Fecha"},
              seriesType: "bars",
              series: {3: {type: "line"}}
            };
            var chart5 = new google.visualization.ComboChart(document.getElementById('chart_div5'));
            chart5.draw(data5, options5);
      }
      drawChart();
      $('#chart_div').width('100%');  
      $('#chart_div2').width('100%');  
      $('#chart_div3').width('100%');  
      $('#chart_div4').width('100%');  
      $('#chart_div5').width('100%'); 
    };   
  };   

  if (<?php echo $vtab ?>==2) {   
    if (<?php echo $fechaInicioMayor ?><1 && <?php echo $existe ?>>0)
    {
        $('#alert').hide(); 
        google.load("visualization", "1", {packages: ["corechart"]});    
        google.setOnLoadCallback(drawChart);
        ////////PAN
        <?php //char6  
            $a6 = array();
            foreach ($PANDColima as $PANDColima) 
            {
                $a6[] = array(
                    "fecha" => $PANDColima->fecha,
                    "seguidores" => $PANDColima->seguidores,
                    "siguiendo" => $PANDColima->siguiendo,
                    "tweets" => $PANDColima->tweets,
                    "promedio" => ($PANDColima->seguidores+$PANDColima->siguiendo+$PANDColima->tweets)/3
                );
            }                       
        ?>
        <?php //char8 
            $a8 = array();
            foreach ($cdepancolima as $cdepancolima) 
            {
                $a8[] = array(
                    "fecha" => $cdepancolima->fecha,
                    "seguidores" => $cdepancolima->seguidores,
                    "siguiendo" => $cdepancolima->siguiendo,
                    "tweets" => $cdepancolima->tweets,
                    "promedio" => ($cdepancolima->seguidores+$cdepancolima->siguiendo+$cdepancolima->tweets)/3
                );
            }                       
        ?>
        ////////////////////////////////////////PAN
        function drawChart2() {
          var data6 = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
              <?php for ($i=0; $i<count($a6); $i++) {
                  ?>
                  ['<?php echo $a6[$i]['fecha'] ?>', <?php echo $a6[$i]['seguidores'] ?>, <?php echo $a6[$i]['siguiendo'] ?>, <?php echo $a6[$i]['tweets'] ?>, <?php echo $a6[$i]['promedio'] ?>],
              <?php } ?>
            ]
          );  
          var options6 = {
            title: '@PANDColima',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {3: {type: "line"}}
          };
          var chart6 = new google.visualization.ComboChart(document.getElementById('chart_div6'));
          chart6.draw(data6, options6);    

          //////////////char8
          var data8 = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
              <?php for ($i=0; $i<count($a8); $i++) {
                  ?>
                  ['<?php echo $a8[$i]['fecha'] ?>', <?php echo $a8[$i]['seguidores'] ?>, <?php echo $a8[$i]['siguiendo'] ?>, <?php echo $a8[$i]['tweets'] ?>, <?php echo $a8[$i]['promedio'] ?>],
              <?php } ?>
            ]
          );  
          var options8 = {
            title: '@cdepancolima',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {3: {type: "line"}}
          };
          var chart8 = new google.visualization.ComboChart(document.getElementById('chart_div8'));
          chart8.draw(data8, options8);    
        }
      }
      drawChart2();
      $('#chart_div6').width('100%');  
      $('#chart_div8').width('100%'); 
    }; 

  if (<?php echo $vtab ?>==3) {   
    if (<?php echo $fechaInicioMayor ?><1 && <?php echo $existe ?>>0)
    {
        $('#alert').hide(); 
        google.load("visualization", "1", {packages: ["corechart"]});    
        google.setOnLoadCallback(drawChart);
        ////////PRD
        <?php //char7 
            $a7 = array();
            foreach ($PRDcolima as $PRDcolima) 
            {
                $a7[] = array(
                    "fecha" => $PRDcolima->fecha,
                    "seguidores" => $PRDcolima->seguidores,
                    "siguiendo" => $PRDcolima->siguiendo,
                    "tweets" => $PRDcolima->tweets,
                    "promedio" => ($PRDcolima->seguidores+$PRDcolima->siguiendo+$PRDcolima->tweets)/3
                );
            }                       
        ?>
        ////////////////////////////////////////PRD
        function drawChart3() {
          var data7 = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
              <?php for ($i=0; $i<count($a7); $i++) {
                  ?>
                  ['<?php echo $a7[$i]['fecha'] ?>', <?php echo $a7[$i]['seguidores'] ?>, <?php echo $a7[$i]['siguiendo'] ?>, <?php echo $a7[$i]['tweets'] ?>, <?php echo $a7[$i]['promedio'] ?>],
              <?php } ?>
            ]
          );  
          var options7 = {
            title: '@PRDcolima',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {3: {type: "line"}}
          };
          var chart7 = new google.visualization.ComboChart(document.getElementById('chart_div7'));
          chart7.draw(data7, options7);      
        }
      }
      drawChart3();
      $('#chart_div7').width('100%');  
    }; 

  if (<?php echo $vtab ?>==4) {   
    if (<?php echo $fechaInicioMayor ?><1 && <?php echo $existe ?>>0)
    {
        $('#alert').hide(); 
        google.load("visualization", "1", {packages: ["corechart"]});    
        google.setOnLoadCallback(drawChart);
        ////////MOVIMIENTO CIUDADANO
        <?php //char9 
            $a9 = array();
            foreach ($MovCiudadanoCol as $MovCiudadanoCol) 
            {
                $a9[] = array(
                    "fecha" => $MovCiudadanoCol->fecha,
                    "seguidores" => $MovCiudadanoCol->seguidores,
                    "siguiendo" => $MovCiudadanoCol->siguiendo,
                    "tweets" => $MovCiudadanoCol->tweets,
                    "promedio" => ($MovCiudadanoCol->seguidores+$MovCiudadanoCol->siguiendo+$MovCiudadanoCol->tweets)/3
                );
            }                       
        ?>
        ////////////////////////////////////////MOVIMIENTO CIUDADANO
        function drawChart4() {
          var data9 = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
              <?php for ($i=0; $i<count($a9); $i++) {
                  ?>
                  ['<?php echo $a9[$i]['fecha'] ?>', <?php echo $a9[$i]['seguidores'] ?>, <?php echo $a9[$i]['siguiendo'] ?>, <?php echo $a9[$i]['tweets'] ?>, <?php echo $a9[$i]['promedio'] ?>],
              <?php } ?>
            ]
          );  
          var options9 = {
            title: '@MovCiudadanoCol',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {3: {type: "line"}}
          };
          var chart9 = new google.visualization.ComboChart(document.getElementById('chart_div9'));
          chart9.draw(data9, options9);      
        }
      }
      drawChart4();
      $('#chart_div9').width('100%');  
    }; 

  if (<?php echo $vtab ?>==5) {   
    if (<?php echo $fechaInicioMayor ?><1 && <?php echo $existe ?>>0)
    {
        $('#alert').hide(); 
        google.load("visualization", "1", {packages: ["corechart"]});    
        google.setOnLoadCallback(drawChart);
        ////////VERDE
        <?php //char10 
            $a10 = array();
            foreach ($ColPartidoVerde as $ColPartidoVerde) 
            {
                $a10[] = array(
                    "fecha" => $ColPartidoVerde->fecha,
                    "seguidores" => $ColPartidoVerde->seguidores,
                    "siguiendo" => $ColPartidoVerde->siguiendo,
                    "tweets" => $ColPartidoVerde->tweets,
                    "promedio" => ($ColPartidoVerde->seguidores+$ColPartidoVerde->siguiendo+$ColPartidoVerde->tweets)/3
                );
            }                       
        ?>
        ////////////////////////////////////////VERDE
        function drawChart5() {
          var data10 = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
              <?php for ($i=0; $i<count($a10); $i++) {
                  ?>
                  ['<?php echo $a10[$i]['fecha'] ?>', <?php echo $a10[$i]['seguidores'] ?>, <?php echo $a10[$i]['siguiendo'] ?>, <?php echo $a10[$i]['tweets'] ?>, <?php echo $a10[$i]['promedio'] ?>],
              <?php } ?>
            ]
          );  
          var options10 = {
            title: '@ColPartidoVerde',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {3: {type: "line"}}
          };
          var chart10 = new google.visualization.ComboChart(document.getElementById('chart_div10'));
          chart10.draw(data10, options10);      
        }
      }
      drawChart5();
      $('#chart_div10').width('100%');  
    }; 

  if (<?php echo $vtab ?>==6) {   
    if (<?php echo $fechaInicioMayor ?><1 && <?php echo $existe ?>>0)
    {
        $('#alert').hide(); 
        google.load("visualization", "1", {packages: ["corechart"]});    
        google.setOnLoadCallback(drawChart);
        ////////PT
        <?php //char11 
            $a11 = array();
            foreach ($PT_Colima as $PT_Colima) 
            {
                $a11[] = array(
                    "fecha" => $PT_Colima->fecha,
                    "seguidores" => $PT_Colima->seguidores,
                    "siguiendo" => $PT_Colima->siguiendo,
                    "tweets" => $PT_Colima->tweets,
                    "promedio" => ($PT_Colima->seguidores+$PT_Colima->siguiendo+$PT_Colima->tweets)/3
                );
            }                       
        ?>
        ////////////////////////////////////////PT
        function drawChart6() {
          var data11 = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
              <?php for ($i=0; $i<count($a11); $i++) {
                  ?>
                  ['<?php echo $a11[$i]['fecha'] ?>', <?php echo $a11[$i]['seguidores'] ?>, <?php echo $a11[$i]['siguiendo'] ?>, <?php echo $a11[$i]['tweets'] ?>, <?php echo $a11[$i]['promedio'] ?>],
              <?php } ?>
            ]
          );  
          var options11 = {
            title: '@PT_Colima',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {3: {type: "line"}}
          };
          var chart11 = new google.visualization.ComboChart(document.getElementById('chart_div11'));
          chart11.draw(data11, options11);      
        }
      }
      drawChart6();
      $('#chart_div11').width('100%');  
    }; 

  if (<?php echo $vtab ?>==7) {   
    if (<?php echo $fechaInicioMayor ?><1 && <?php echo $existe ?>>0)
    {
        $('#alert').hide(); 
        google.load("visualization", "1", {packages: ["corechart"]});    
        google.setOnLoadCallback(drawChart);
        ////////MORENA
        <?php //char12 
            $a12 = array();
            foreach ($MorenaColima1 as $MorenaColima1) 
            {
                $a12[] = array(
                    "fecha" => $MorenaColima1->fecha,
                    "seguidores" => $MorenaColima1->seguidores,
                    "siguiendo" => $MorenaColima1->siguiendo,
                    "tweets" => $MorenaColima1->tweets,
                    "promedio" => ($MorenaColima1->seguidores+$MorenaColima1->siguiendo+$MorenaColima1->tweets)/3
                );
            }                       
        ?>
        ////////////////////////////////////////MORENA
        function drawChart7() {
          var data12 = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
              <?php for ($i=0; $i<count($a12); $i++) {
                  ?>
                  ['<?php echo $a12[$i]['fecha'] ?>', <?php echo $a12[$i]['seguidores'] ?>, <?php echo $a12[$i]['siguiendo'] ?>, <?php echo $a12[$i]['tweets'] ?>, <?php echo $a12[$i]['promedio'] ?>],
              <?php } ?>
            ]
          );  
          var options12 = {
            title: '@MorenaColima1',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {3: {type: "line"}}
          };
          var chart12 = new google.visualization.ComboChart(document.getElementById('chart_div12'));
          chart12.draw(data12, options12);      
        }
      }
      drawChart7();
      $('#chart_div12').width('100%');  
    }; 
  </script>



