<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.1.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>RIBELA</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="/themes/metronic/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="/themes/metronic/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="/themes/metronic/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/themes/metronic/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="/themes/metronic/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE STYLES -->
<link href="/themes/metronic/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="/themes/metronic/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="/themes/metronic/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="/themes/metronic/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="/themes/metronic/admin/layout/css/themes/light2.css" rel="stylesheet" type="text/css">
<link href="/themes/metronic/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/stylo.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->




<!-- BEGIN PAGE LEVEL STYLES -->
<link href="/themes/metronic/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="/themes/metronic/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->

<!--<link id="style_color" href="/themes/metronic/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>-->

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="login">
<div id="blur_modals">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<div id="page">

            <div id="mainmenu">

                <?php
                if(!Yii::app()->user->isGuest)
                {
                    
                    $menu="
            

<body class='page-header-fixed page-quick-sidebar-over-content'>
<!-- BEGIN HEADER -->
<div class='page-header navbar navbar-fixed-top opacidad'>
	<!-- BEGIN HEADER INNER -->
	<div class='page-header-inner'>
		<!-- BEGIN LOGO -->
		<div class='page-logo bajar'>
		
			<font class='work'>Bienvenido: ".Yii::app()->user->name."</font>
			<div class='menu-toggler sidebar-toggler hide'>
				<!-- DOC: Remove the above 'hide' to enable the sidebar toggler button on header -->
			</div>
		</div>
        <div style='float:left' class='text-center page-logo margin-left-10'></div>
        <div style='float:left; width:23% !important; margin-left:5% !important;' class='text-center page-logo margin-left-10'>Atención al usuario +58 212 740 11 12<br> Ext. 900 - Email: soporteauto@etelix.com</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href='javascript:;' class='menu-toggler responsive-toggler' data-toggle='collapse' data-target='.navbar-collapse'>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class='top-menu'>
			<ul class='nav navbar-nav pull-right'>
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<li class='dropdown dropdown-extended dropdown-notification' id='header_notification_bar'>
					
				</li>
				<!-- END NOTIFICATION DROPDOWN -->
				<!-- BEGIN INBOX DROPDOWN -->
				<li class='dropdown dropdown-extended dropdown-inbox' id='header_inbox_bar'>
				
				</li>
				
				<li class='dropdown dropdown-extended dropdown-tasks' id='header_task_bar'>
					
				</li>
				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class='dropdown'>
					<a href='#' class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown' data-close-others='true'>
					
					<span class='username'></span>
					<i class='fa fa-download'></i>
					</a>
					<ul class='dropdown-menu'>
						
						<li>
							<a href='http://ribela.net/uploads/20150424-GSI-BPM Control de Calidad.pdf'>
							<i class='fa fa-file-text-o'></i> Control de Calidad </a>
						</li>
					</ul>
				</li>
				<li class='dropdown'>
					<a href='#' class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown' data-close-others='true'>
					
					<span class='username'></span>
					<i class='fa fa-th-large'></i>
					</a>
					<ul class='dropdown-menu'>
						
						<li>
							<a href='/site/logout'>
							<i class='icon-key'></i> Log Out </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
				<li class='dropdown dropdown-quick-sidebar-toggler'>
					<a href='javascript:;' class='dropdown-toggle'>
					<i class='icon-logout'></i>
					</a>
				</li>
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class='clearfix'>
</div>
<!-- BEGIN CONTAINER -->
<div class='page-container' style='margin-top:46px'>
	
	<!-- BEGIN CONTENT -->
	<div class='page-content-wrapper'>
		<div class='dashBoard'>". $content ."</div>
		</div>
	</div>
	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->
    <a href='javascript:;' class='page-quick-sidebar-toggler'><i class='icon-close'></i></a>
    <div class='page-quick-sidebar-wrapper'>
        <div class='page-quick-sidebar'>            
            <div class='nav-justified'>
                <ul class='nav nav-tabs nav-justified'>
                    <li class='active'>
                        <a href='#quick_sidebar_tab_1' data-toggle='tab'>
                        Users 
                        </a>
                    </li>
                    <li>
                        <a href='#quick_sidebar_tab_2' data-toggle='tab'>
                        Alertas 
                        </a>
                    </li>
                    <li class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown'>
                        More<i class='fa fa-angle-down'></i>
                        </a>
                        <ul class='dropdown-menu pull-right' role='menu'>
                            <li>
                                <a href='#quick_sidebar_tab_3' data-toggle='tab'>
                                <i class='icon-bell'></i> Alerts </a>
                            </li>
                            <li>
                                <a href='#quick_sidebar_tab_3' data-toggle='tab'>
                                <i class='icon-info'></i> Notifications </a>
                            </li>
                            <li>
                                <a href='#quick_sidebar_tab_3' data-toggle='tab'>
                                <i class='icon-speech'></i> Activities </a>
                            </li>
                            <li class='divider'>
                            </li>
                            <li>
                                <a href='#quick_sidebar_tab_3' data-toggle='tab'>
                                <i class='icon-settings'></i> Settings </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class='tab-content'>
                    <div class='tab-pane active page-quick-sidebar-chat' id='quick_sidebar_tab_1'>
                        <div class='page-quick-sidebar-chat-users' data-rail-color='#ddd' data-wrapper-class='page-quick-sidebar-list'>
                            <h3 class='list-heading'>Staff</h3>
                            <ul class='media-list list-items'>
                               
                               
                            </ul>
                            <h3 class='list-heading'>Customers</h3>
                            <ul class='media-list list-items'>
                               
                            </ul>
                        </div>
                        <div class='page-quick-sidebar-item'>
                            <div class='page-quick-sidebar-chat-user'>
                                <div class='page-quick-sidebar-nav'>
                                    <a href='javascript:;' class='page-quick-sidebar-back-to-list'><i class='icon-arrow-left'></i>Back</a>
                                </div>
                                <div class='page-quick-sidebar-chat-user-messages'>
                                  
                                </div>
                                <div class='page-quick-sidebar-chat-user-form'>
                                    <div class='input-group'>
                                        <input type='text' class='form-control' placeholder='Type a message here...'>
                                        <div class='input-group-btn'>
                                            <button type='button' class='btn blue'><i class='icon-paper-clip'></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tab-pane page-quick-sidebar-alerts' id='quick_sidebar_tab_2'>
                        <div class='page-quick-sidebar-alerts-list'>
                            <h3 class='list-heading'>General</h3>
                            <ul class='feeds list-items'>
                               
                            </ul>
                            <h3 class='list-heading'>System</h3>
                            <ul class='feeds list-items'>
                               
                            </ul>
                        </div>
                    </div>
                    <div class='tab-pane page-quick-sidebar-settings' id='quick_sidebar_tab_3'>
                        <div class='page-quick-sidebar-settings-list'>
                            <h3 class='list-heading'>General Settings</h3>
                            
                            <h3 class='list-heading'>System Settings</h3>
                            <ul class='list-items borderless'>
                                
                            </ul>
                            <div class='inner-content'>
                                <button class='btn btn-success'><i class='icon-settings'></i>Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class='page-footer' style='float:right; margin-top:10px '>
	<div class='page-footer-inner' style='color:#ffffff;'>
		 <!--Copyright © ETELIX Group All Rights Reserved -->
         Derechos Reservados 2014 Etelix Group - <a href='#' style='color:#ffffff'>Ayuda</a>
	</div>

</div>

                	";
                	echo $menu;
                    
                   
                }
                ?>

                <?php
                if(Yii::app()->user->isGuest)
                {
                    echo $content;
                }
                ?>


            </div><!-- mainmenu -->


        </div><!-- page -->

<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/themes/metronic/global/plugins/respond.min.js"></script>
<script src="/themes/metronic/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="/themes/metronic/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="/themes/metronic/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/themes/metronic/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="/themes/metronic/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/themes/metronic/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/themes/metronic/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/themes/metronic/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/themes/metronic/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="/themes/metronic/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/themes/metronic/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->

<script src="/themes/metronic/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="/themes/metronic/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="/themes/metronic/global/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="/themes/metronic/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="/themes/metronic/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="/themes/metronic/global/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->

<script src="/themes/metronic/admin/pages/scripts/index.js" type="text/javascript"></script>
<script src="/themes/metronic/admin/pages/scripts/tasks.js" type="text/javascript"></script>


<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/themes/metronic/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/themes/metronic/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/themes/metronic/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/themes/metronic/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/themes/metronic/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/themes/metronic/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="/themes/metronic/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="/themes/metronic/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61184507-1', 'auto');
  ga('send', 'pageview');

</script> 

<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
  Login.init();
  $('div.checker').removeClass("checker");
       // init background slide images
       $.backstretch([
        "/themes/metronic/admin/pages/media/bg/background-01prueba.png"
        ], {
          fade: 1000,
          duration: 8000
    }
    );
});
</script>
<!-- END JAVASCRIPTS -->
</div>
<!-- BEGIN MODALS -->
<!-- SORI OPTIONS -->
<div class="modal" id="sori_options" tabindex="-1" role="dialog" aria-labelledby="sori_options" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Seleccione una opción para Sori <img src="/images/sori_logo.png" alt="" width="21"></h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6 margin-bottom-10"><a href="http://sori.ribela.net" class="btn btn-block"><img src="/images/etelix.png" alt="" width="160"></a></div>
            <div class="col-md-6 margin-bottom-10"><a href="http://sorifullred.ribela.net" class="btn btn-block"><img src="/images/fullred.png" alt="" width="162"></a></div>
        </div>
        <div class="row">
            <div class="col-md-6 margin-bottom-10"><a href="http://sorilatincom.ribela.net" class="btn btn-block"><img src="/images/latincom.png" alt="" width="160"></a></div>
            <div class="col-md-6 margin-bottom-10"><a href="http://sorimitelco.ribela.net" class="btn btn-block"><img src="/images/mitelco.png" alt="" width="160"></a></div>
        </div>
        <div class="row">
            <div class="col-md-12"><a href="http://soricomvoz.ribela.net" class="btn btn-block"><img src="/images/comvoz.png" alt=""></a></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- SINE OPTIONS -->
<div class="modal" id="sine_options" tabindex="-1" role="dialog" aria-labelledby="sine_options" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Seleccione una opción para SINE <img src="/images/sine_logo.png" alt="" width="21"></h4>
      </div>
      <div class="modal-body">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6 margin-bottom-10"><a href="http://sine.ribela.net" class="btn btn-block"><img src="/images/etelix.png" alt="" width="160"></a></div>
                <div class="col-md-6 margin-bottom-10"><a href="http://sinefullred.ribela.net" class="btn btn-block"><img src="/images/fullred.png" alt="" width="162"></a></div>
            </div>
            <div class="row">
                <div class="col-md-6 margin-bottom-10"><a href="http://sinelatincom.ribela.net" class="btn btn-block"><img src="/images/latincom.png" alt="" width="160"></a></div>
                <div class="col-md-6 margin-bottom-10"><a href="http://sinemitelco.ribela.net" class="btn btn-block"><img src="/images/mitelco.png" alt="" width="160"></a></div>
            </div>
            <div class="row">
                <div class="col-md-12"><a href="http://sinecomvoz.ribela.net" class="btn btn-block"><img src="/images/comvoz.png" alt=""></a></div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- SINCA OPTIONS -->
<div class="modal" id="sinca_options" tabindex="-1" role="dialog" aria-labelledby="sinca_options" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Seleccione una opción para SINCA <img src="/images/sinca_logo.png" alt="" width="21"></h4>
      </div>
      <div class="modal-body">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6 margin-bottom-10"><a href="http://sinca.ribela.net" class="btn btn-block"><img src="/images/etelix.png" alt="" width="160"></a></div>
                <div class="col-md-6 margin-bottom-10"><a href="http://sincafullred.ribela.net" class="btn btn-block"><img src="/images/fullred.png" alt="" width="162"></a></div>
            </div>
            <div class="row">
                <div class="col-md-6 margin-bottom-10"><a href="http://sincalatincom.ribela.net" class="btn btn-block"><img src="/images/latincom.png" alt="" width="160"></a></div>
                <div class="col-md-6 margin-bottom-10"><a href="http://sincamitelco.ribela.net" class="btn btn-block"><img src="/images/mitelco.png" alt="" width="160"></a></div>
            </div>
            <div class="row">
                <div class="col-md-12"><a href="http://sincacomvoz.ribela.net" class="btn btn-block"><img src="/images/comvoz.png" alt=""></a></div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- ATC OPTIONS -->
<div class="modal" id="atc_options" tabindex="-1" role="dialog" aria-labelledby="atc_options" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Seleccione una opción para ATC <img src="/images/atc_logo.png" alt="" width="21"></h4>
      </div>
      <div class="modal-body">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6 margin-bottom-10"><a href="http://atcsacet.ribela.net" class="btn btn-block"><img src="/images/etelix.png" alt="" width="160"></a></div>
                <div class="col-md-6 margin-bottom-10"><a href="http://atcfullred.ribela.net" class="btn btn-block"><img src="/images/fullred.png" alt="" width="162"></a></div>
            </div>
            <div class="row">
                <div class="col-md-6 margin-bottom-10"><a href="http://atclatincom.ribela.net" class="btn btn-block"><img src="/images/latincom.png" alt="" width="160"></a></div>
                <div class="col-md-6 margin-bottom-10"><a href="http://atcmitelco.ribela.net" class="btn btn-block"><img src="/images/mitelco.png" alt="" width="160"></a></div>
            </div>
            <div class="row">
                <div class="col-md-12"><a href="http://atc.ribela.net" class="btn btn-block"><img src="/images/comvoz.png" alt=""></a></div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- END MODALS -->
</body>
<!-- END BODY -->
</html>