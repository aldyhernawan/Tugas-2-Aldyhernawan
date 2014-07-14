<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'master-bahan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kd_bahan'); ?>
		<?php echo $form->textField($model,'kd_bahan',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'kd_bahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_bahan'); ?>
		<?php echo $form->textField($model,'nama_bahan',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nama_bahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'satuan_bahan'); ?>
		<?php echo $form->dropDownlist($model,'satuan_bahan',
					MasterBahan::Satuan(),
					array('prompt'=>'--Pilih--',
					'style'=>'width:152px;')); ?>
		<?php echo $form->error($model,'satuan_bahan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->