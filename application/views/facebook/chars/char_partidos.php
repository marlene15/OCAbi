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
                  "Megusta" => $pri->Megusta,
                  "PersonasHablan" => $pri->PersonasHablan
              );
          }                       
      ?>
      //Chart 1 PRI
      function drawChart() {
      var data = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Likes', 'Post'],
          <?php for ($i=0; $i<count($a); $i++) {
              ?>
              ['<?php echo $a[$i]['fecha'] ?>', <?php echo $a[$i]['Megusta'] ?>, <?php echo $a[$i]['PersonasHablan'] ?>],
          <?php } ?>
        ]
      );  
      var options = {
        title: '',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      chart.draw(data, options);
      }   
    }
    drawChart();
    $('#chart_div').width('100%');  
  };    
 
 if (<?php echo $vtab ?>==2) {   
    if (<?php echo $fechaInicioMayor ?><1 && <?php echo $existe ?>>0)
    {
       $('#alert').hide(); 
        google.load("visualization", "1", {packages: ["corechart"]});    
        google.setOnLoadCallback(drawChart);
        ////////PAN
       <?php //char2  
        $a2 = array();
        foreach ($pan as $pan) 
        {
            $a2[] = array(
                "fecha" => $pan->fecha,
                "Megusta" => $pan->Megusta,
                "PersonasHablan" => $pan->PersonasHablan
            );
        }                       
      ?>
      //Chart2
      function drawChart2(){
      var data2 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Likes', 'Post'],
          <?php for ($i=0; $i<count($a2); $i++) {
              ?>
              ['<?php echo $a2[$i]['fecha'] ?>', <?php echo $a2[$i]['Megusta'] ?>, <?php echo $a2[$i]['PersonasHablan'] ?>],
          <?php } ?>
        ]
      );  
      var options2 = {
        title: '',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart2 = new google.visualization.ComboChart(document.getElementById('chart_div2'));
      chart2.draw(data2, options2);                  
      }   
    }
    drawChart2();
    $('#chart_div2').width('100%');  
  };    

 if (<?php echo $vtab ?>==3) {   
    if (<?php echo $fechaInicioMayor ?><1 && <?php echo $existe ?>>0)
    {
        $('#alert').hide(); 
        google.load("visualization", "1", {packages: ["corechart"]});    
        google.setOnLoadCallback(drawChart);

        <?php //char3  
            $a3 = array();
            foreach ($pna as $pna) 
            {
                $a3[] = array(
                    "fecha" => $pna->fecha,
                    "Megusta" => $pna->Megusta,
                    "PersonasHablan" => $pna->PersonasHablan
                );
            }                       
        ?>
        //Chart3
         function drawChart3(){ 
           var data3 = google.visualization.arrayToDataTable(
              [
                ['Fecha', 'Likes', 'Post'],
                <?php for ($i=0; $i<count($a3); $i++) {
                    ?>
                    ['<?php echo $a3[$i]['fecha'] ?>', <?php echo $a3[$i]['Megusta'] ?>, <?php echo $a3[$i]['PersonasHablan'] ?>],
                <?php } ?>
              ]
            );  
            var options3 = {
              title: '',
              hAxis: {title: "Fecha"},
              seriesType: "bars",
              series: {3: {type: "line"}}
            };
            var chart3 = new google.visualization.ComboChart(document.getElementById('chart_div3'));
            chart3.draw(data3, options3);      
        }         
    }
    drawChart3();
    $('#chart_div3').width('100%'); 
}

 if (<?php echo $vtab ?>==4) {   
    if (<?php echo $fechaInicioMayor ?><1 && <?php echo $existe ?>>0)
    {
      $('#alert').hide(); 
      google.load("visualization", "1", {packages: ["corechart"]});    
      google.setOnLoadCallback(drawChart);
      //char4
      <?php 
        $a4 = array();
        foreach ($pv as $pv) 
        {
            $a4[] = array(
                "fecha" => $pv->fecha,
                "Megusta" => $pv->Megusta,
                "PersonasHablan" => $pv->PersonasHablan
            );
        }                       
      ?> 
      //Chart4
      function drawChart4(){    
       var data4 = google.visualization.arrayToDataTable(
          [
            ['Fecha', 'Likes', 'Post'],
            <?php for ($i=0; $i<count($a4); $i++) {
                ?>
                ['<?php echo $a4[$i]['fecha'] ?>', <?php echo $a4[$i]['Megusta'] ?>, <?php echo $a4[$i]['PersonasHablan'] ?>],
            <?php } ?>
          ]
        );  
        var options4 = {
          title: '',
          hAxis: {title: "Fecha"},
          seriesType: "bars",
          series: {3: {type: "line"}}
        };
        var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div4'));
        chart4.draw(data4, options4);           
      }    
    }
    drawChart4();
    $('#chart_div4').width('100%');     
}
if (<?php echo $vtab ?>==5) {   
    if (<?php echo $fechaInicioMayor ?><1 && <?php echo $existe ?>>0)
    {
      $('#alert').hide(); 
      google.load("visualization", "1", {packages: ["corechart"]});    
      google.setOnLoadCallback(drawChart);
      //char5
      <?php 
          $a5 = array();
          foreach ($prd as $prd) 
          {
              $a5[] = array(
                  "fecha" => $prd->fecha,
                  "Megusta" => $prd->Megusta,
                  "PersonasHablan" => $prd->PersonasHablan
              );
          }                       
      ?>
      //Chart5
      function drawChart5(){
           var data5 = google.visualization.arrayToDataTable(
              [
                ['Fecha', 'Likes', 'Post'],
                <?php for ($i=0; $i<count($a5); $i++) {
                    ?>
                    ['<?php echo $a5[$i]['fecha'] ?>', <?php echo $a5[$i]['Megusta'] ?>, <?php echo $a5[$i]['PersonasHablan'] ?>],
                <?php } ?>
              ]
            );  
            var options5 = {
              title: '',
              hAxis: {title: "Fecha"},
              seriesType: "bars",
              series: {3: {type: "line"}}
            };
            var chart5 = new google.visualization.ComboChart(document.getElementById('chart_div5'));
            chart5.draw(data5, options5);   
      }      
    }
    drawChart5();
    $('#chart_div5').width('100%'); 
}

if (<?php echo $vtab ?>==6) {   
    if (<?php echo $fechaInicioMayor ?><1 && <?php echo $existe ?>>0)
    {
      $('#alert').hide(); 
      google.load("visualization", "1", {packages: ["corechart"]});    
      google.setOnLoadCallback(drawChart);
      <?php //char6
          $a6 = array();
          foreach ($pt as $pt) 
          {
              $a6[] = array(
                  "fecha" => $pt->fecha,
                  "Megusta" => $pt->Megusta,
                  "PersonasHablan" => $pt->PersonasHablan
              );
          }                       
      ?>
    //Chart6
    function drawChart6(){    
      var data6 = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Likes', 'Post'],
          <?php for ($i=0; $i<count($a6); $i++) {
              ?>
              ['<?php echo $a6[$i]['fecha'] ?>', <?php echo $a6[$i]['Megusta'] ?>, <?php echo $a6[$i]['PersonasHablan'] ?>],
          <?php } ?>
        ]
      );  
      var options6 = {
        title: '',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart6 = new google.visualization.ComboChart(document.getElementById('chart_div6'));
      chart6.draw(data6, options6);                      
    }
  }
  drawChart6();
  $('#chart_div6').width('100%'); 
}          


if (<?php echo $vtab ?>==7) {   
    if (<?php echo $fechaInicioMayor ?><1 && <?php echo $existe ?>>0)
    {
      $('#alert').hide(); 
      google.load("visualization", "1", {packages: ["corechart"]});    
      google.setOnLoadCallback(drawChart);
      <?php //char7
          $a7 = array();
          foreach ($pmc as $pmc) 
          {
              $a7[] = array(
                  "fecha" => $pmc->fecha,
                  "Megusta" => $pmc->Megusta,
                  "PersonasHablan" => $pmc->PersonasHablan
              );
          }                       
      ?> 
      //Chart7
      function drawChart7(){      
           var data7 = google.visualization.arrayToDataTable(
              [
                ['Fecha', 'Likes', 'Post'],
                <?php for ($i=0; $i<count($a7); $i++) {
                    ?>
                    ['<?php echo $a7[$i]['fecha'] ?>', <?php echo $a7[$i]['Megusta'] ?>, <?php echo $a7[$i]['PersonasHablan'] ?>],
                <?php } ?>
              ]
            );  
            var options7 = {
              title: '',
              hAxis: {title: "Fecha"},
              seriesType: "bars",
              series: {3: {type: "line"}}
            };
            var chart7 = new google.visualization.ComboChart(document.getElementById('chart_div7'));
            chart7.draw(data7, options7);       
      }      
    }
  drawChart7();
  $('#chart_div7').width('100%');     
}  

if (<?php echo $vtab ?>==8) {   
    if (<?php echo $fechaInicioMayor ?><1 && <?php echo $existe ?>>0)
    {
      $('#alert').hide(); 
      google.load("visualization", "1", {packages: ["corechart"]});    
      google.setOnLoadCallback(drawChart);
      <?php //char8
          $a8 = array();
          foreach ($pm as $pm) 
          {
              $a8[] = array(
                  "fecha" => $pm->fecha,
                  "Megusta" => $pm->Megusta,
                  "PersonasHablan" => $pm->PersonasHablan
              );
          }                       
      ?>
      //Chart8
      function drawChart8(){
       var data8 = google.visualization.arrayToDataTable(
          [
            ['Fecha', 'Likes', 'Post'],
            <?php for ($i=0; $i<count($a8); $i++) {
                ?>
                ['<?php echo $a8[$i]['fecha'] ?>', <?php echo $a8[$i]['Megusta'] ?>, <?php echo $a8[$i]['PersonasHablan'] ?>],
            <?php } ?>
          ]
        );  
        var options8 = {
          title: '',
          hAxis: {title: "Fecha"},
          seriesType: "bars",
          series: {3: {type: "line"}}
        };
        var chart8 = new google.visualization.ComboChart(document.getElementById('chart_div8'));
        chart8.draw(data8, options8);       
      }      
    }
    drawChart8();
    $('#chart_div8').width('100%');     
}

if (<?php echo $vtab ?>==9) {   
    if (<?php echo $fechaInicioMayor ?><1 && <?php echo $existe ?>>0)
    {
      $('#alert').hide(); 
      google.load("visualization", "1", {packages: ["corechart"]});    
      google.setOnLoadCallback(drawChart);      
      <?php //char9
          $a9 = array();
          foreach ($pes as $pes) 
          {
              $a9[] = array(
                  "fecha" => $pes->fecha,
                  "Megusta" => $pes->Megusta,
                  "PersonasHablan" => $pes->PersonasHablan
              );
          }                       
      ?>
      //Chart9
      function drawChart9(){      
       var data9 = google.visualization.arrayToDataTable(
          [
            ['Fecha', 'Likes', 'Post'],
            <?php for ($i=0; $i<count($a9); $i++) {
                ?>
                ['<?php echo $a9[$i]['fecha'] ?>', <?php echo $a9[$i]['Megusta'] ?>, <?php echo $a9[$i]['PersonasHablan'] ?>],
            <?php } ?>
          ]
        );  
        var options9 = {
          title: '',
          hAxis: {title: "Fecha"},
          seriesType: "bars",
          series: {3: {type: "line"}}
        };
        var chart9 = new google.visualization.ComboChart(document.getElementById('chart_div9'));
        chart9.draw(data9, options9);     
      }      
 
     }
    drawChart9();
    $('#chart_div9').width('100%');     
}

if (<?php echo $vtab ?>==10) {   
    if (<?php echo $fechaInicioMayor ?><1 && <?php echo $existe ?>>0)
    {
      $('#alert').hide(); 
      google.load("visualization", "1", {packages: ["corechart"]});    
      google.setOnLoadCallback(drawChart);    
      <?php //char10
          $a10 = array();
          foreach ($ph as $ph) 
          {
              $a10[] = array(
                  "fecha" => $ph->fecha,
                  "Megusta" => $ph->Megusta,
                  "PersonasHablan" => $ph->PersonasHablan
              );
          }                       
      ?>
      //Chart10
      function drawChart10(){    
       var data10 = google.visualization.arrayToDataTable(
          [
            ['Fecha', 'Likes', 'Post'],
            <?php for ($i=0; $i<count($a10); $i++) {
                ?>
                ['<?php echo $a10[$i]['fecha'] ?>', <?php echo $a10[$i]['Megusta'] ?>, <?php echo $a10[$i]['PersonasHablan'] ?>],
            <?php } ?>
          ]
        );  
        var options10 = {
          title: '',
          hAxis: {title: "Fecha"},
          seriesType: "bars",
          series: {3: {type: "line"}}
        };
        var chart10 = new google.visualization.ComboChart(document.getElementById('chart_div10'));
        chart10.draw(data10, options10);         
      } 
    }     
    drawChart10();
    $('#chart_div10').width('100%');     
}    
</script>



