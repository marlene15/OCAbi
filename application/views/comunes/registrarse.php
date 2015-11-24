<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="es"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<?php 
		header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
		header("Cache-Control: post-check=0, pre-check=0", false);
	?>
	
	<title>OCA</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="<?= base_url();?>assets/plantilla/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url();?>assets/plantilla/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url();?>assets/plantilla/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url();?>assets/plantilla/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url();?>assets/plantilla/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url();?>assets/plantilla/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url();?>assets/plantilla/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?= base_url();?>assets/plantilla/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/plantilla/plugins/select2/select2_metro.css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="<?= base_url();?>assets/plantilla/css/pages/login.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="<?= base_url();?>favicon.ico" />
	<style type="text/css"> 
		.btn-circle {
		  width: 30px;
		  height: 30px;
		  text-align: center;
		  padding: 6px 0;
		  font-size: 12px;
		  line-height: 1.42;
		  border-radius: 15px;
		}
	</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
	<!-- BEGIN LOGO -->
	<div class="logo">
		<!-- <img src="<?= base_url();?>assets/plantilla/img/logo-big.png" alt="" />  -->
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content">
		<!-- BEGIN LOGIN FORM -->
		<?php echo validation_errors(); ?>
        <?php echo form_open('registro'); ?>
		<form class="form-vertical login-form" action="<?php echo site_url('registro'); ?>" method="post">
			<h3 class="form-title"><center>Regístrate</center></h3>
			<div class="alert alert-error hide">
				<button class="close" data-dismiss="alert"></button>
				<span>Ingresa tu Usuario y Contraseña</span>
			</div>
			<div class="control-group">
				<div class="controls">					
					<div class="input-icon">
						<input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="Nombre" name="nombre" title='Nombre'/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">					
					<div class="input-icon">
						<input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="Primer Apellido" name="p_apellido" title='Primer Apellido'/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">					
					<div class="input-icon">
						<input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="Segundo Apellido" name="s_apellido" title='Segundo Apellido'/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">					
					<div class="input-icon">
						<input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="Correo Electrónico" name="email" title='Email'/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">					
					<div class="input-icon">
						<input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="Nombre de usuario" name="usuario" title='Usuario'/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">					
					<div class="input-icon">
						<textarea name="motivos" rows="5" cols="50" autocomplete="off" placeholder="Motivos para obtener cuenta" title='Motivos'></textarea>
					</div>
				</div>
			</div>
			
			<div class="form-actions">
				<a href="javascript:void(0)" class="btn btn-default btn-fab btn-raised mdi-action-grade"></a>
				<button type="" class="btn green pull-right">
					Solicitar cuenta <i class="m-icon-swapright m-icon-white"></i>
				</button> 
			</div>
		</form>
		<?php echo form_close();?>
	<!-- END LOGIN FORM -->        
	</div>
	<!-- END LOGIN -->
	<!-- BEGIN COPYRIGHT -->
	<div class="copyright">
		2015 &copy; OCA
	</div>
	<!-- END COPYRIGHT -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   <script src="<?= base_url();?>assets/plantilla/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>assets/plantilla/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="<?= base_url();?>assets/plantilla/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="<?= base_url();?>assets/plantilla/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>assets/plantilla/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="<?= base_url();?>assets/plantilla/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>assets/plantilla/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="<?= base_url();?>assets/plantilla/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>assets/plantilla/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="<?= base_url();?>assets/plantilla/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>	
	<script type="text/javascript" src="<?= base_url();?>assets/plantilla/plugins/select2/select2.min.js"></script>     
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?= base_url();?>assets/plantilla/scripts/app.js" type="text/javascript"></script>
	<script src="<?= base_url();?>assets/plantilla/scripts/login.js" type="text/javascript"></script> 
	<!-- END PAGE LEVEL SCRIPTS --> 
	<script>
		jQuery(document).ready(function() {     
		  App.init();
		  Login.init();
		
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>