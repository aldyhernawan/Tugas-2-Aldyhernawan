<?php
$this->breadcrumbs=array(
	'Master Penjualans'=>array('index'),
	$model->id_jual,
);

$this->menu=array(
	array('label'=>'List MasterPenjualan', 'url'=>array('index')),
	array('label'=>'Create MasterPenjualan', 'url'=>array('create')),
	array('label'=>'Update MasterPenjualan', 'url'=>array('update', 'id'=>$model->id_jual)),
	array('label'=>'Delete MasterPenjualan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_jual),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MasterPenjualan', 'url'=>array('admin')),
);
?>

<h1>View MasterPenjualan #<?php echo $model->id_jual; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_jual',
		'id_peg',
		'kd_roti',
		'harga_jual',
		'banyak_jual',
	),
)); ?>
