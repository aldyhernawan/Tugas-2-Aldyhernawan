<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_bahan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kd_bahan), array('view', 'id'=>$data->kd_bahan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_bahan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_bahan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('satuan_bahan')); ?>:</b>
	<?php echo CHtml::encode($data->satuan_bahan); ?>
	<br />


</div>