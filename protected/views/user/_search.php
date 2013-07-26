<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'username'); ?>
		<?php echo $form->textField($model, 'username', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'chinese_name'); ?>
		<?php echo $form->textField($model, 'chinese_name', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'passwd'); ?>
		<?php echo $form->passwordField($model, 'passwd', array('maxlength' => 300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'last_login_ip'); ?>
		<?php echo $form->textField($model, 'last_login_ip', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'last_login_time'); ?>
		<?php echo $form->textField($model, 'last_login_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
