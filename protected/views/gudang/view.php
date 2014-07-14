<?php
$this->breadcrumbs=array(
	'Gudangs'=>array('index'),
	$model->id_gudang,
);

$this->menu=array(
	array('label'=>'List Gudang', 'url'=>array('index')),
	array('label'=>'Create Gudang', 'url'=>array('create')),
	array('label'=>'Update Gudang', 'url'=>array('update', 'id'=>$model->id_gudang)),
	array('label'=>'Delete Gudang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_gudang),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gudang', 'url'=>array('admin')),
);
?>

<h1>View Gudang #<?php echo $model->id_gudang; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_gudang',
		'kd_roti',
		'stok_roti',
	),
)); ?>
