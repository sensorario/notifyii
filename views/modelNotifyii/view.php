<?php
/* @var $this NotifyiiController */
/* @var $model Notifyii */

$this->breadcrumbs=array(
	'Notifyiis'=>array('index'),
	$model->content,
);

$this->menu=array(
	array('label'=>'List Notifyii', 'url'=>array('index')),
	array('label'=>'Create Notifyii', 'url'=>array('create')),
	array('label'=>'Update Notifyii', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Notifyii', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Notifyii', 'url'=>array('admin')),
);
?>

<h1>Notification: <strong><?php echo $model->content; ?></strong></h1>

<div class="box">
    <h3>In this page you can see a detail of a notification.</h3>
</div>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'expire',
        'alert_after_date',
        'alert_before_date',
        'role',
    ),
)); ?>

<div class="clear">&nbsp;</div>
<hr />

<div class="box">
    
    <h3>Readers</h3>

    <?php $readers = NotifyiiReads::model()->findAll(new CDbCriteria(array(
        'condition' => 'notification_id=:notification_id',
        'params' => array(
            'notification_id' => $model->id
        )
    ))); ?>
    <?php if(count($readers) === 0) : ?>
        <em>No readers</em>
    <?php else: ?>
        <?php foreach($readers as $reader) : ?>
            <?php echo $reader->username; ?>
        <?php endforeach; ?>
    <?php endif; ?>

</div>
