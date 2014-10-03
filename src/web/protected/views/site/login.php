<body class="login">

    <div class="menu-toggler sidebar-toggler">
    </div>

</body>


<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
?>

<body class="login">

    <style>
        #circulo { 
            width: 106px;
            height: 104px;
            margin-top: -67px;
            /*margin-left: -26px;*/
            margin-right: -14px;

            /* webkit-border y moz-border son estilo adicionales para hacerlo compatible con la mayoria de los nevegadores */

            background-color: rgba(0,0,0,0.2) !important; 

            -moz-border-radius: 70px !important; 
            -webkit-border-radius: 70px !important; 
            border-radius: 70px !important;
        }


    </style>



    <!-- BEGIN LOGO -->
    <div class="logo">
        <a href="#"> <img src="/themes/metronic/admin/pages/media/bg/ribela_logo.png" alt="logo" class="logo-default" style="width: 175px; margin-top: -60px"></a>
    </div>
    <form class="login-form" method="post" >
        <div class="content" style="margin-top:-36px">

            <div class="form">
<?php
$form = $this->beginWidget('CActiveForm', array(
//	'id'=>'login-form',
//	'enableClientValidation'=>true,
//	'clientOptions'=>array(
//		'validateOnSubmit'=>true,
//	),
        ));
?>


<!--    <span style="font-size: 15px; margin-left: 63px; color:#BDBDBD">Iniciar Sesión en Rivela</span>-->


                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> </span>
                </div>

                <table align="center" style="margin-top: 51px; width: 112%" border="0">
                    <tr>
                        <td colspan="2"> </td>

                    </tr>
                    <tr>
                        <td colspan="2"><br></td>
                    </tr>
                    <tr>
                        <td colspan="2"><span style="font-size: 18px; color:#ffffff; margin-left: 98px">Login</span></td>
                    </tr>
                    <tr>
                        <td rowspan="3">
                            <div id="circulo">

                                <img src="/themes/metronic/admin/pages/media/bg/candado.png" style="width: 50px; margin-top: 9px; margin-left: 28px;">
                            </div>

                        </td>
                        <td> <div class="form-group" style=" margin-left: 22px;">
                                <div class="input-icon">
                                    <i class="fa fa-user" style="margin-top: 28px"></i>
                                    <?php echo $form->labelEx($model, ''); ?>
                                    <?php echo $form->textField($model, 'username', array('placeholder' => 'Username', 'class' => 'form-control placeholder-no-fix', 'style' => 'border-radius: 15px 15px 15px 15px !important; background-color:#000000;background-color: rgba(0,0,0,0.2) !important;  ; color:#ffffff; border-color:#6E6E6E; border:none !important;')); ?>
                                    <?php echo $form->error($model, 'username'); ?>
                                </div>
                            </div></td>
                    </tr>
                    <tr>
                        <td> <div class="form-group">
                                <div class="input-icon" style=" margin-top: -28px; margin-left: 22px;">
                                    <i class="fa fa-lock" style="margin-top: 28px"></i>
                                    <?php echo $form->labelEx($model, ''); ?>
                                    <?php echo $form->passwordField($model, 'password', array('placeholder' => 'Password', 'class' => 'form-control placeholder-no-fix', 'style' => 'border-radius: 15px 15px 15px 15px !important; background-color:#000000; background-color: rgba(0,0,0,0.2) !important;  ; color:#ffffff; border-color:#6E6E6E; border:none !important;')); ?>

                                    <button type="submit" class=" pull-right" style="border-radius: 15px 15px 15px 15px !important; background-color: rgba(0,0,0,0.01) !important; border:none !important;margin-top: -31px; height: 27px; width: 38px; z-index: 9999; position: relative; border-bottom-color: none !important;;" >
                                        <i class="m-icon-swapright m-icon-white"></i>
                                    </button>
                                    <?php echo $form->error($model, 'password'); ?>
                                </div>
                            </div></td>
                    </tr>
                    <tr>
                        <td><div class="form-actions" style="margin-top:-17px">
                                <label class="checkbox" style="margin-top: -33px; font-size: 11px; margin-left: 54px">
                                    <input type="checkbox" name="remember" value="1" style="border-radius: 15px 15px 15px 15px !important; opacity: 0.2;"/><span>Stay Connected</span> </label>
                            </div></td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                    </tr>
                </table>



                <?php $this->endWidget(); ?>

            </div><!-- form --></form>
</div>

<div style="margin-top:190px; text-align: center; color:#ffffff; font-size: 11px"  >
    <a id="" href="#" style="color:#ffffff">¿Olvido Su Contraseña?</a> - Copyrigth © 2014 - Etelix Group  <a style="color:#ffffff">Ayuda</a></a>
</div>
</body>
