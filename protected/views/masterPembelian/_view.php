<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_beli')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_beli), array('view', 'id'=>$data->id_beli)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pegawai')); ?>:</b>
	<?php echo CHtml::encode($data->id_pegawai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_bahan')); ?>:</b>
	<?php echo CHtml::encode($data->kd_bahan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_beli')); ?>:</b>
	<?php echo CHtml::encode($data->harga_beli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banyak_beli')); ?>:</b>
	<?php echo CHtml::encode($data->banyak_beli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_beli')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_beli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_expired')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_expired); ?>
	<br />


</div>