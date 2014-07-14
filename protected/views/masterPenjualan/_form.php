<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'master-penjualan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_jual'); ?>
		<?php echo $form->textField($model,'id_jual',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'id_jual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_peg'); ?>
		<?php echo $form->dropDownlist($model,
		'id_peg',CHtml::listData(
		MasterPegawai::model()->findAll(),
		'id_pegawai','id_pegawai'),
		array(
		'prompt'=>'-- Pilih --',
		'style'=>'width:100px;')); ?>
		<?php echo $form->error($model,'id_peg'); ?>
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
		<?php echo $form->labelEx($model,'harga_jual'); ?>
		<?php echo $form->textField($model,'harga_jual'); ?>
		<?php echo $form->error($model,'harga_jual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'banyak_jual'); ?>
		<?php echo $form->textField($model,'banyak_jual'); ?>
		<?php echo $form->error($model,'banyak_jual'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->