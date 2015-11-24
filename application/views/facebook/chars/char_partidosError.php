<script type="text/javascript">
	if (<?php echo $fechaInicioMayor ?>==1){
      $('#alert').show();
      $('#alert').html('<div id="alert" class="alert fade in"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha de Inicio es mayor!</strong> La fecha de inicio no debe ser mayor a la de término</center></div>');
    }else 
    if(<?php echo $existe ?>==0){
      $('#alert').show();
      $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong><center>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 3 de Marzo 2015 al 3 de Junio 2015 y del 8 de Junio 2015 al <?php echo $ultima_fecha ?></center></div>');
    }
    else{
    	$('#alert').hide(); 
    }
</script>