	<div class="footer">
        <div class="footer-inner">
            2015 &copy; OCA
        </div>
        <div class="footer-tools">
            <span class="go-top">
            <i class="icon-angle-up"></i>
            </span>
        </div>
    </div>
    <!--Para usar el calendario-->
    <script src="<?php echo base_url()?>assets/calendar/jquery-1.8.3.min.js" type="text/javascript"></script>

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   
	<script src="<?= base_url();?>assets/plantilla/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<!--<script src="<?= base_url();?>assets/plantilla/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	-->
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="<?= base_url();?>assets/plantilla/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="<?= base_url();?>assets/plantilla/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!--<script src="<?= base_url();?>assets/plantilla/plugins/bootstrap/js/bootstrap.js" type="text/javascript"></script>-->
	<!--<script src="<?= base_url();?>assets/plantilla/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	-->
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<!--<script src="<?= base_url();?>assets/plantilla/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>assets/plantilla/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="<?= base_url();?>assets/plantilla/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>assets/plantilla/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	-->
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?= base_url();?>assets/plantilla/scripts/app.js" type="text/javascript"></script>
	<!--<script src="<?= base_url();?>assets/plantilla/scripts/index.js" type="text/javascript"></script>-->
	<script src="<?= base_url();?>assets/plantilla/scripts/tasks.js" type="text/javascript"></script>     

	<!-- END PAGE LEVEL SCRIPTS -->  
	<script>
		jQuery(document).ready(function() {    
		   App.init(); // initlayout and core plugins
		   //Tasks.initDashboardWidget();
		});
	</script>
	<script type="text/javascript">
	    $(document).ready(function(){
	        var cambio = false;
	        $('.page-sidebar-menu li a').each(function(index) {
	            if(this.href.trim() == window.location){
	                $(this).parent().addClass("active");
	                cambio = true;
	            }
	        });
	        if(!cambio){
	            $('.page-sidebar-menu li:first').addClass("active"); //Para seleccionar el primer li
	        }

	        var cambio2 = false;
	        $('.sub-menu li a').each(function(index) {
	            if(this.href.trim() == window.location){

	                $(this).parent().addClass("active");
	                $(this).parent().parent().parent().addClass("start open active");
	                $(this).parent().parent().parent().parent().parent().addClass("start open");
	                $(this).parent().parent().parent().parent().parent().addClass("start active");
	                cambio2 = true;
	            }
	        });
	    });	
	</script>
	<!-- END JAVASCRIPTS -->