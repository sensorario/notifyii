<?php
/* @var $this NotifyiiReadsController */
/* @var $model NotifyiiReads */

$this->breadcrumbs=array(
	'Notifyii Reads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NotifyiiReads', 'url'=>array('index')),
	array('label'=>'Create NotifyiiReads', 'url'=>array('create')),
	array('label'=>'View NotifyiiReads', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NotifyiiReads', 'url'=>array('admin')),
);
?>

<h1>Update NotifyiiReads <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>