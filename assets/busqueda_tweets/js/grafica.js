plotword=function(lugar,datos){
  Morris.Line({
    // ID of the element in which to draw the chart.
    // element: 'porPalabra',
    element:lugar,
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    // data: [
    //   { year: '2008', value: 20 },
    //   { year: '2009', value: 10 },
    //   { year: '2010', value: 5 },
    //   { year: '2011', value: 5 },
    //   { year: '2012', value: 20 }
    // ],
    data:datos,
    // The name of the data record attribute that contains x-values.
    xkey: 'year',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['value'],
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['Value']
  });
}

barra = function(lugar,datos){
  Morris.Bar({
    element: lugar,
    data: datos,
    xkey: 'date',
    ykeys: ['value'],
    labels: ['Orders']
  });
}

$.ajax({
  url:'consultas.php',
  data:{id:'fecha',},
  type:'post',
  success:function(data){
    // console.log(data);
    $('#chart').html('');
    datos=JSON.parse(data);
    barra('chart',datos);
    // console.log(datos);
  }

});

$('#palabra').on('change',function(){
  palabra=$(this).val();
  $.ajax({
    type:"post",
    data:{
      id:'palabra',
      palabra:palabra
    },
    url:'consultas.php',
    success:function(data){
      // console.log(data);
      $('#porPalabra').html('');
      datos=JSON.parse(data);
      if(!datos.error){
        total=0;
        $.each(datos,function(index,val){
          total+=(val.value);
        });
         // console.log(data);
        plotword('porPalabra',datos);
        $('#total').html("Total:" + total);
        // console.log(total);
      }
      else{
        $('#total').html('');
        alert(datos.error);
      }
    }
  })
});