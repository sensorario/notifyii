<?php
/* @var $this NotifyiiReadsController */
/* @var $model NotifyiiReads */

$this->breadcrumbs=array(
	'Notifyii Reads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NotifyiiReads', 'url'=>array('index')),
	array('label'=>'Manage NotifyiiReads', 'url'=>array('admin')),
);
?>

<h1>Create NotifyiiReads</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>