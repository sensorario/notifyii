<?php
/* @var $this NotifyiiReadsController */
/* @var $model NotifyiiReads */

$this->breadcrumbs=array(
	'Notifyii Reads'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List NotifyiiReads', 'url'=>array('index')),
	array('label'=>'Create NotifyiiReads', 'url'=>array('create')),
	array('label'=>'Update NotifyiiReads', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete NotifyiiReads', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NotifyiiReads', 'url'=>array('admin')),
);
?>

<h1>View NotifyiiReads #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'notification_id',
		'readed',
	),
)); ?>
