<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'master-pegawai-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pegawai'); ?>
		<?php echo $form->textField($model,'id_pegawai',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'id_pegawai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_pegawai'); ?>
		<?php echo $form->textField($model,'nama_pegawai'); ?>
		<?php echo $form->error($model,'nama_pegawai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_kelamin'); ?>
		<?php echo $form->dropDownlist($model,'jenis_kelamin',
					MasterPegawai::Kelamin(),
					array('prompt'=>'--Pilih--',
					'style'=>'width:152px;')); ?>
		<?php echo $form->error($model,'jenis_kelamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_lahir'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
		array(
			'model'=>$model,
			'attribute'=>'tanggal_lahir',
			'value'=>$model->tanggal_lahir,
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
		<?php echo $form->error($model,'tanggal_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telepon'); ?>
		<?php echo $form->textField($model,'telepon',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telepon'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->