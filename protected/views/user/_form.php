<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'user-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model, 'username', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'username'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'chinese_name'); ?>
		<?php echo $form->textField($model, 'chinese_name', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'chinese_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'passwd'); ?>
		<?php echo $form->passwordField($model, 'passwd', array('maxlength' => 300)); ?>
		<?php echo $form->error($model,'passwd'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'last_login_ip'); ?>
		<?php echo $form->textField($model, 'last_login_ip', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'last_login_ip'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'last_login_time'); ?>
		<?php echo $form->textField($model, 'last_login_time'); ?>
		<?php echo $form->error($model,'last_login_time'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('clients')); ?></label>
		<?php echo $form->checkBoxList($model, 'clients', GxHtml::encodeEx(GxHtml::listDataEx(Client::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</div><!-- form -->