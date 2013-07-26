<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('username')); ?>:
	<?php echo GxHtml::encode($data->username); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('chinese_name')); ?>:
	<?php echo GxHtml::encode($data->chinese_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('passwd')); ?>:
	<?php echo GxHtml::encode($data->passwd); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_login_ip')); ?>:
	<?php echo GxHtml::encode($data->last_login_ip); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_login_time')); ?>:
	<?php echo GxHtml::encode($data->last_login_time); ?>
	<br />

</div>