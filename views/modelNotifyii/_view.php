<?php
/* @var $this NotifyiiController */
/* @var $data Notifyii */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('expire')); ?>:</b>
    <?php echo CHtml::encode($data->expire); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('alter_after_date')); ?>:</b>
    <?php echo CHtml::encode($data->alert_after_date); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('alter_before_date')); ?>:</b>
    <?php echo CHtml::encode($data->alert_before_date); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->content), array('view', 'id' => $data->id)); ?>
    <br />

    <?php if(!(trim($data->role) === "")) : ?>
        <b><?php echo CHtml::encode($data->getAttributeLabel('role')); ?>:</b>
        <?php echo CHtml::encode($data->role); ?>
        <br />
    <?php endif; ?>

</div>
