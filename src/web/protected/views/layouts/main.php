<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	 <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />-->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/global/plugins/font-awesome/css/font-awesome.min.css" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/metronic/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>



	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<!--<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>-->
	</div><!-- header -->

	<div id="mainmenu">

			<?php if (!Yii::app()->user->isGuest)
                {

                	$menu="
            

<body class='page-header-fixed page-quick-sidebar-over-content'>
<!-- BEGIN HEADER -->
<div class='page-header navbar navbar-fixed-top'>
	<!-- BEGIN HEADER INNER -->
	<div class='page-header-inner'>
		<!-- BEGIN LOGO -->
		<div class='page-logo bajar'>
		
			<font class='work'>Work</font><font class='flow'>Flow</font>
			
		
			<div class='menu-toggler sidebar-toggler hide'>
				<!-- DOC: Remove the above 'hide' to enable the sidebar toggler button on header -->
			</div>
		</div>
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
					<a href='#' class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown' data-close-others='true'>
					<i class='icon-bell'></i>
				
					</a>
					<ul class='dropdown-menu'>
						
					</ul>
				</li>
				<!-- END NOTIFICATION DROPDOWN -->
				<!-- BEGIN INBOX DROPDOWN -->
				<li class='dropdown dropdown-extended dropdown-inbox' id='header_inbox_bar'>
					<a href='#' class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown' data-close-others='true'>
					<i class='icon-envelope-open'></i>
				
					</a>
					<ul class='dropdown-menu'>
						
					</ul>
				</li>
				
				<li class='dropdown dropdown-extended dropdown-tasks' id='header_task_bar'>
					<a href='#' class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown' data-close-others='true'>
					<i class='icon-calendar'></i>
				
					</a>
					<ul class='dropdown-menu extended tasks'>
						
					</ul>
				</li>
				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class='dropdown dropdown-user'>
					<a href='#' class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown' data-close-others='true'>
					<img alt='' class='img-circle' src='../../assets/admin/layout/img/avatar3_small.jpg'/>
					<span class='username'>".Yii::app()->user->name."</span>
					<i class='fa fa-angle-down'></i>
					</a>
					<ul class='dropdown-menu'>
						
						<li class='divider'>
						</li>
						<li>
							<a href='extra_lock.html'>
							<i class='icon-lock'></i> Lock Screen </a>
						</li>
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
<div class='page-container'>
	<!-- BEGIN SIDEBAR -->
	<div class='page-sidebar-wrapper'>
	
		<div class='page-sidebar navbar-collapse collapse'>
			<!-- BEGIN SIDEBAR MENU -->
			<ul class='page-sidebar-menu' data-auto-scroll='true' data-slide-speed='200'>
								<li class='sidebar-toggler-wrapper'>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class='sidebar-toggler'>
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below 'sidebar-search-wrapper' LI element -->
				<li class='sidebar-search-wrapper hidden-xs'>
					
					<form class='sidebar-search' action='extra_search.html' method='POST'>
						<a href='javascript:;' class='remove'>
						<i class='icon-close'></i>
						</a>
						
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class='start active '>
					<a href='index.html'>
					<i class='icon-home'></i>
					<span class='title'>Inicio</span>
					<span class='selected'></span>
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class='page-content-wrapper'>
		<div class='page-content'>". $content ."</div>
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
<div class='page-footer'>
	<div class='page-footer-inner'>
		 Copyright © ETELIX Group All Rights Reserved 
	</div>
	<div class='page-footer-tools'>
		<span class='go-top'>
		<i class='fa fa-angle-up'></i>
		</span>
	</div>
</div>

                	";
                	echo $menu;


                } ?>

 <?php if (Yii::app()->user->isGuest){ echo $content; }?>


	</div><!-- mainmenu -->
	

</div><!-- page -->

<script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/themes/metronic/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
		jQuery(document).ready(function() {     
		  Metronic.init(); // init metronic core components
          Layout.init(); // init current layout
          QuickSidebar.init() // init quick sidebar
		  Login.init();
		});
	</script>
</body>
</html>