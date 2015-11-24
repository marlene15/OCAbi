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
        <?php echo form_open('login'); ?>
		<form class="form-vertical login-form" action="<?php echo site_url('login'); ?>" method="post">
			<h3 class="form-title"><center>Ingresa a tu cuenta</center></h3>
			<div class="alert alert-error hide">
				<button class="close" data-dismiss="alert"></button>
				<span>Ingresa tu Usuario y Contraseña</span>
			</div>
			<div class="control-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">Usuario</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="Usuario" name="username"/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Contraseña</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-lock"></i>
						<input class="m-wrap placeholder-no-fix" type="password" autocomplete="off" placeholder="Contraseña" name="password"/>
					</div>
				</div>
			</div>
			<div class="form-actions">
				<button name="registra" class="btn green pull-right" style="float:left" value="1">
					Registrarte <i class="m-icon-swapright m-icon-white"></i>
				</button>            				
				<button type="submit" class="btn green pull-right" name="registra" value="0">
				Ingresar <i class="m-icon-swapright m-icon-white"></i>
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

	<script type="text/javascript">
	    $(document).ready(function(){                                        
	      $("#registra").click(function(event) {
	      	alert("hola");
	        $.ajax({     
	          url: '<?php echo site_url('inicio/registra');?>'
	        });            
	      });       
	    });
    </script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>