<?php
$form = new CForm(array(
			'elements'=>array(
				'username'=>array(
					'type'=>'text',
					'maxlength'=>32,
					),
				'password'=>array(
					'type'=>'password',
					'maxlength'=>32,
					),
				'rememberMe'=>array(
					'type'=>'checkbox',
					)
				),

			'buttons'=>array(
				'login'=>array(
					'type'=>'submit',
					'label'=>'Login',
					),
				),
			), $model);
?>

<?php
$this->pageTitle = Yum::t('Login');
$this->title = Yum::t('Login');
$this->breadcrumbs=array(Yum::t('Login'));?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login</title>
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">

        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css">
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/Font-awesome/magic/magic.css">
    </head>
    <body>
        <div class="container">
            <div class="text-center">
                <img src="assets/img/logo.png" alt="Metis Logo">
            </div>
            <div class="tab-content">
                <div id="login" class="tab-pane active">


					<?php
					echo CHtml::beginForm(array('//user/auth/login'),"post",array("class"=>"form-signin"));  

					if(isset($_GET['action']))
						echo CHtml::hiddenField('returnUrl', urldecode($_GET['action']));

					?>



					<?php if($model->hasErrors()) { ?>
					<div class="alert">
					<?php echo CHtml::errorSummary($model); ?>
					</div>
					<?php } ?>


					
					<p class="muted text-center" > 在此处输入您的登录账户并输入密码: </p>

					


					<?php echo CHtml::activeTextField($model,'username',array("placeholder"=>'登录账户',"class"=>'input-block-level')) ?>
					<?php echo CHtml::activePasswordField($model,'password',array("placeholder"=>'密码',"class"=>'input-block-level')); ?>
		
					<?php echo CHtml::submitButton(Yum::t('Login'), array('class' => 'btn btn-large btn-primary btn-block')); ?>
							
							<?php if ($model->scenario == 'captcha' && CCaptcha::checkRequirements()) { ?>
								<div class="row">
									<?php echo CHtml::activeLabel($model, 'verifyCode'); ?>
										<div>
											<?php $this->widget('CCaptcha'); ?>
											<?php echo CHtml::activeTextField($model, 'verifyCode'); ?>
									</div>
									<?php echo CHtml::error($model, 'verifyCode'); ?>
								</div>
							<?php } ?>

					
					<?php echo CHtml::endForm(); ?>
				</div>
			</div>
		</div>
	</body>
	</html>
		
			


