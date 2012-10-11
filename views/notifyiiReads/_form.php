<?php
/* @var $this NotifyiiReadsController */
/* @var $model NotifyiiReads */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'notifyii-reads-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notification_id'); ?>
		<?php echo $form->textField($model,'notification_id'); ?>
		<?php echo $form->error($model,'notification_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'readed'); ?>
		<?php echo $form->textField($model,'readed'); ?>
		<?php echo $form->error($model,'readed'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->