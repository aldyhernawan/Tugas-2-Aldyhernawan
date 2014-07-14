<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_roti')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kd_roti), array('view', 'id'=>$data->kd_roti)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_roti')); ?>:</b>
	<?php echo CHtml::encode($data->nama_roti); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_roti')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_roti); ?>
	<br />


</div>