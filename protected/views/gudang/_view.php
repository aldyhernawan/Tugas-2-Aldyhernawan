<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_gudang')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_gudang), array('view', 'id'=>$data->id_gudang)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_roti')); ?>:</b>
	<?php echo CHtml::encode($data->kd_roti); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stok_roti')); ?>:</b>
	<?php echo CHtml::encode($data->stok_roti); ?>
	<br />


</div>