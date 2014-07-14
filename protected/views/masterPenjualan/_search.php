<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_jual'); ?>
		<?php echo $form->textField($model,'id_jual',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_peg'); ?>
		<?php echo $form->textField($model,'id_peg',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_roti'); ?>
		<?php echo $form->textField($model,'kd_roti',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga_jual'); ?>
		<?php echo $form->textField($model,'harga_jual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'banyak_jual'); ?>
		<?php echo $form->textField($model,'banyak_jual'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->