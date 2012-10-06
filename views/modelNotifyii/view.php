<?php
/* @var $this NotifyiiController */
/* @var $model Notifyii */

$this->breadcrumbs=array(
	'Notifyiis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Notifyii', 'url'=>array('index')),
	array('label'=>'Create Notifyii', 'url'=>array('create')),
	array('label'=>'Update Notifyii', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Notifyii', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Notifyii', 'url'=>array('admin')),
);
?>

<h1>View Notifyii #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'expire',
	),
)); ?>
