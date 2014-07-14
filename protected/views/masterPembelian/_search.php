<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_beli'); ?>
		<?php echo $form->textField($model,'id_beli',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pegawai'); ?>
		<?php echo $form->textField($model,'id_pegawai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_bahan'); ?>
		<?php echo $form->textField($model,'kd_bahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga_beli'); ?>
		<?php echo $form->textField($model,'harga_beli'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'banyak_beli'); ?>
		<?php echo $form->textField($model,'banyak_beli'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_beli'); ?>
		<?php echo $form->textField($model,'tanggal_beli'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_expired'); ?>
		<?php echo $form->textField($model,'tanggal_expired'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->