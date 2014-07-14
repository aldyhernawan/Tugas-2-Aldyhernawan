<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kd_roti'); ?>
		<?php echo $form->dropDownlist($model,
		'kd_roti',CHtml::listData(
		MasterRoti::model()->findAll(),
		'kd_roti','kd_roti'),
		array(
		'prompt'=>'-- Pilih --',
		'style'=>'width:100px;')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_roti'); ?>
		<?php echo $form->textField($model,'nama_roti'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_roti'); ?>
		<?php echo $form->dropDownlist($model,'jenis_roti',
					MasterRoti::JenisRoti(),
					array('prompt'=>'--Pilih--',
					'style'=>'width:152px;')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->