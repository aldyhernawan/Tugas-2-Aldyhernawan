<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jual')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_jual), array('view', 'id'=>$data->id_jual)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_peg')); ?>:</b>
	<?php echo CHtml::encode($data->id_peg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_roti')); ?>:</b>
	<?php echo CHtml::encode($data->kd_roti); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_jual')); ?>:</b>
	<?php echo CHtml::encode($data->harga_jual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banyak_jual')); ?>:</b>
	<?php echo CHtml::encode($data->banyak_jual); ?>
	<br />


</div>