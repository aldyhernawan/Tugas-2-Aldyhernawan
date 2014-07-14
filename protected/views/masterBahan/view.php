<?php
$this->breadcrumbs=array(
	'Master Bahans'=>array('index'),
	$model->kd_bahan,
);

$this->menu=array(
	array('label'=>'List MasterBahan', 'url'=>array('index')),
	array('label'=>'Create MasterBahan', 'url'=>array('create')),
	array('label'=>'Update MasterBahan', 'url'=>array('update', 'id'=>$model->kd_bahan)),
	array('label'=>'Delete MasterBahan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kd_bahan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MasterBahan', 'url'=>array('admin')),
);
?>

<h1>View MasterBahan #<?php echo $model->kd_bahan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kd_bahan',
		'nama_bahan',
		'satuan_bahan',
	),
)); ?>
