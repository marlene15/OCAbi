
	<meta charset="utf-8"/>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Marlene Torres, Salma Negrete">
	<link rel="shortcut icon" href="../../assets/ico/favicon.ico">
	<?php 
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache"); 
	?>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->        
	<link href="<?= base_url();?>assets/plantilla/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url();?>assets/plantilla/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url();?>assets/plantilla/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url();?>assets/plantilla/fonts/font.css" rel="stylesheet" type="text/css"/>
	<!--<link href="<?= base_url();?>assets/plantilla/css/style-metro.css" rel="stylesheet" type="text/css"/>-->
	
	<link href="<?= base_url();?>assets/plantilla/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url();?>assets/plantilla/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url();?>assets/plantilla/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?= base_url();?>assets/plantilla/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url();?>assets/css.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
	<!--<link href="<?= base_url();?>assets/plantilla/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
	
	<link href="<?= base_url();?>assets/plantilla/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>assets/plantilla/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url();?>assets/plantilla/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="<?= base_url();?>assets/plantilla/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
	-->
	<!-- END PAGE LEVEL PLUGIN STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES 
	<link href="<?= base_url();?>assets/plantilla/css/pages/tasks.css" rel="stylesheet" type="text/css" media="screen"/>
	--> 
	
	<!--Script para Google Analytics-->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-72004722-1', 'auto');
	  ga('send', 'pageview');

	</script>