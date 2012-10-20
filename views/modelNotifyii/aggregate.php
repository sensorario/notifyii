<?php
/* @var $this NotifyiiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Notifyii',
);

$this->menu=array(
    array('label'=>'Create Notifyii', 'url'=>array('create')),
    array('label'=>'Manage Notifyii', 'url'=>array('admin')),
);
?>

<h1>Notifyiis</h1>

<div class="box">
    <h3>In this page you can see all notification created.</h3>
</div>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view_aggregate',
)); ?>
