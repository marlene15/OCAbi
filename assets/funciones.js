
$(document).ready(function(){
  
  //Funcion no recarargar las paginas al dar clic
  $('.botonMenu').on('click',function(){
    direccion=$(this).attr('href');
    $.ajax({
      type:"post",
      url:direccion,
      success:function(data){
        $('#page-inner').html(data);
      },
      error:function(){
        $('#page-inner').html('Galletas');
      }
    });
    return false;
  });

//
});