$(document).ready(function(){
      $('[data-toggle=tab][href=#barras1]').on('click',function(){
        setTimeout(function(){
          drawChart();
        },500)    
        $('#chart_div').width('100%');  
        $('#chart_div2').width('100%');  
        $('#chart_div3').width('100%');  
        $('#chart_div4').width('100%');  
        $('#chart_div5').width('100%');  
      });
      $('[data-toggle=tab][href=#barras2]').on('click',function(){
        setTimeout(function(){
          drawChart2();
        },500)
        $('#chart_div6').width('100%'); 
        $('#chart_div8').width('100%'); 
      });
      $('[data-toggle=tab][href=#barras3]').on('click',function(){
        setTimeout(function(){
          drawChart3();
        },500)
        $('#chart_div7').width('100%'); 
      });
      $('[data-toggle=tab][href=#barras4]').on('click',function(){
        setTimeout(function(){
          drawChart4();
        },500)
        $('#chart_div9').width('100%'); 
      });
      $('[data-toggle=tab][href=#barras5]').on('click',function(){
        setTimeout(function(){
          drawChart5();
        },500)
        $('#chart_div10').width('100%'); 
      });
      $('[data-toggle=tab][href=#barras6]').on('click',function(){
        setTimeout(function(){
          drawChart6();
        },500)
        $('#chart_div11').width('100%'); 
      });
      $('[data-toggle=tab][href=#barras7]').on('click',function(){
        setTimeout(function(){
          drawChart7();
        },500)
        $('#chart_div12').width('100%'); 
        $('#chart_div13').width('100%');  
      });
});