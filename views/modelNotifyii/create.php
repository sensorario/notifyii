<?php
/* @var $this NotifyiiController */
/* @var $model Notifyii */

$this->breadcrumbs=array(
	'Notifyiis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Notifyii', 'url'=>array('index')),
	array('label'=>'Manage Notifyii', 'url'=>array('admin')),
);
?>

<h1>Create Notifyii</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>