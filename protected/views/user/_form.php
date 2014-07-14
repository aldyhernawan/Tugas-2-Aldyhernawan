<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nomor'); ?>
		<?php echo $form->textField($model,'Nomor',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Nomor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nama'); ?>
		<?php echo $form->textField($model,'Nama',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'level_id'); ?>
		<?php echo $form->textField($model,'level_id'); ?>
		<?php echo $form->error($model,'level_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->