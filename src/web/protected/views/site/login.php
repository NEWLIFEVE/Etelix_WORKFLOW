<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';

?>
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.1.1
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
<html lang="en" >
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Login Options - Login Form 2</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->


<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="/"><font class='work'>Work</font><font class='flow'>Flow</font></a>
</div>
 <form class="login-form" method="post">
<div class="content">
	 
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	
<h3 class="form-title">Ingrese a su Cuenta</h3>


<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span> </span>
		</div>

	<div class="form-group">
            <div class="input-icon">
              <i class="fa fa-user"></i>
                 <?php echo $form->labelEx($model,''); ?>
                 <?php echo $form->textField($model,'username',array('placeholder' => 'usuario', 'class' => 'form-control placeholder-no-fix')); ?>
                <?php echo $form->error($model,'username'); ?>
            </div>
    </div>


    <div class="form-group">
             <div class="input-icon">
                 <i class="fa fa-lock"></i>
                    <?php echo $form->labelEx($model,''); ?>
                    <?php echo $form->passwordField($model,'password',array('placeholder' => 'contraseña', 'class'=>'form-control placeholder-no-fix')); ?>
                    <?php echo $form->error($model,'password'); ?>
             </div>
             
    </div>

		<div class="form-actions">
			<label class="checkbox">
			<input type="checkbox" name="remember" value="1"/> Remember me </label>
			<button type="submit" class="btn blue pull-right">
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	
		

<?php $this->endWidget(); ?>

</div><!-- form --></form>
</div>

</body>

<div class="copyright">
	 Copyrigth 2014 by <a id="enlacerenoc" href="http://www.etelix.com/">www.etelix.com</a> Legal privacy 
</div>
</html>