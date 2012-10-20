<?php
/* @var $this NotifyiiController */
/* @var $model Notifyii */

$this->breadcrumbs=array(
	'Notifyii'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Notifyii', 'url'=>array('index')),
	array('label'=>'Manage Notifyii', 'url'=>array('admin')),
);
?>

<h1>Create Notifyii</h1>

<div class="box">
    <h3>In this page you can create your notitication.</h3>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
