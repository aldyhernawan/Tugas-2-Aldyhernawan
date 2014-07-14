<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'master-roti-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kd_roti'); ?>
		<?php echo $form->textField($model,'kd_roti',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'kd_roti'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_roti'); ?>
		<?php echo $form->textField($model,'nama_roti'); ?>
		<?php echo $form->error($model,'nama_roti'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_roti'); ?>
		<?php echo $form->dropDownlist($model,'jenis_roti',
					MasterRoti::JenisRoti(),
					array('prompt'=>'--Pilih--',
					'style'=>'width:152px;')); ?>
		<?php echo $form->error($model,'jenis_roti'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->