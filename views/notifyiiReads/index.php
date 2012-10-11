<?php
/* @var $this NotifyiiReadsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Notifyii Reads',
);

$this->menu=array(
	array('label'=>'Create NotifyiiReads', 'url'=>array('create')),
	array('label'=>'Manage NotifyiiReads', 'url'=>array('admin')),
);
?>

<h1>Notifyii Reads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
