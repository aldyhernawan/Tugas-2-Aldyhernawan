<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gudang-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_gudang'); ?>
		<?php echo $form->textField($model,'id_gudang',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'id_gudang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kd_roti'); ?>
		<?php echo $form->dropDownlist($model,
		'kd_roti',CHtml::listData(
		MasterRoti::model()->findAll(),
		'kd_roti','kd_roti'),
		array(
		'prompt'=>'-- Pilih --',
		'style'=>'width:100px;')); ?>
		
		<?php echo $form->error($model,'kd_roti'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stok_roti'); ?>
		<?php echo $form->textField($model,'stok_roti'); ?>
		<?php echo $form->error($model,'stok_roti'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->