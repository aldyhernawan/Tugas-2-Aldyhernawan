<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'master-pembelian-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_beli'); ?>
		<?php echo $form->textField($model,'id_beli',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'id_beli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pegawai'); ?>
		<?php echo $form->dropDownlist($model,
		'id_pegawai',CHtml::listData(
		MasterPegawai::model()->findAll(),
		'id_pegawai','id_pegawai'),
		array(
		'prompt'=>'-- Pilih --',
		'style'=>'width:100px;')); ?>
		<?php echo $form->error($model,'id_pegawai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kd_bahan'); ?>
		<?php echo $form->dropDownlist($model,
		'kd_bahan',CHtml::listData(
		MasterBahan::model()->findAll(),
		'kd_bahan','kd_bahan'),
		array(
		'prompt'=>'-- Pilih --',
		'style'=>'width:100px;')); ?>
		<?php echo $form->error($model,'kd_bahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_beli'); ?>
		<?php echo $form->textField($model,'harga_beli'); ?>
		<?php echo $form->error($model,'harga_beli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'banyak_beli'); ?>
		<?php echo $form->textField($model,'banyak_beli'); ?>
		<?php echo $form->error($model,'banyak_beli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_beli'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
		array(
			'model'=>$model,
			'attribute'=>'tanggal_beli',
			'value'=>$model->tanggal_beli,
			'options'=>array(
					'dateFormat'=>'yy-mm-dd',
					'shownOn'=>'button',
					'yearRange'=>'-60',
					'changeMonth'=>'true',
					'changeYear'=>'true',
					'constrainInput'=>'false',
					'duration'=>'fast',
					'showAnim'=>'slide',
					),
					'htmlOptions'=>array('size'=>20),
					)
					); ?>
		<?php echo $form->error($model,'tanggal_beli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_expired'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
		array(
			'model'=>$model,
			'attribute'=>'tanggal_expired',
			'value'=>$model->tanggal_expired,
			'options'=>array(
					'dateFormat'=>'yy-mm-dd',
					'shownOn'=>'button',
					'yearRange'=>'-60',
					'changeMonth'=>'true',
					'changeYear'=>'true',
					'constrainInput'=>'false',
					'duration'=>'fast',
					'showAnim'=>'slide',
					),
					'htmlOptions'=>array('size'=>20),
					)
					); ?>
		<?php echo $form->error($model,'tanggal_expired'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->