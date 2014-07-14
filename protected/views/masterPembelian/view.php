<?php
$this->breadcrumbs=array(
	'Master Pembelians'=>array('index'),
	$model->id_beli,
);

$this->menu=array(
	array('label'=>'List MasterPembelian', 'url'=>array('index')),
	array('label'=>'Create MasterPembelian', 'url'=>array('create')),
	array('label'=>'Update MasterPembelian', 'url'=>array('update', 'id'=>$model->id_beli)),
	array('label'=>'Delete MasterPembelian', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_beli),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MasterPembelian', 'url'=>array('admin')),
);
?>

<h1>View MasterPembelian #<?php echo $model->id_beli; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_beli',
		'id_pegawai',
		'kd_bahan',
		'harga_beli',
		'banyak_beli',
		'tanggal_beli',
		'tanggal_expired',
	),
)); ?>
