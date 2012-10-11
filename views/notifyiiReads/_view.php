<?php
/* @var $this NotifyiiReadsController */
/* @var $data NotifyiiReads */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notification_id')); ?>:</b>
	<?php echo CHtml::encode($data->notification_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('readed')); ?>:</b>
	<?php echo CHtml::encode($data->readed); ?>
	<br />


</div>