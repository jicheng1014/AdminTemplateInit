<?php

$this->breadcrumbs = array(
	User::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . User::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . User::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(User::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 