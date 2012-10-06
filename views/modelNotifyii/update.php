<?php
/* @var $this NotifyiiController */
/* @var $model Notifyii */

$this->breadcrumbs=array(
	'Notifyiis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Notifyii', 'url'=>array('index')),
	array('label'=>'Create Notifyii', 'url'=>array('create')),
	array('label'=>'View Notifyii', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Notifyii', 'url'=>array('admin')),
);
?>

<h1>Update Notifyii <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>