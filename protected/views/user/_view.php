<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nomor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Nomor), array('view', 'id'=>$data->Nomor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nama')); ?>:</b>
	<?php echo CHtml::encode($data->Nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level_id')); ?>:</b>
	<?php echo CHtml::encode($data->level_id); ?>
	<br />


</div>