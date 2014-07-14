<?php
$this->breadcrumbs=array(
	'Master Rotis'=>array('index'),
	$model->kd_roti,
);

$this->menu=array(
	array('label'=>'List MasterRoti', 'url'=>array('index')),
	array('label'=>'Create MasterRoti', 'url'=>array('create')),
	array('label'=>'Update MasterRoti', 'url'=>array('update', 'id'=>$model->kd_roti)),
	array('label'=>'Delete MasterRoti', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kd_roti),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MasterRoti', 'url'=>array('admin')),
);
?>

<h1>View MasterRoti #<?php echo $model->kd_roti; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kd_roti',
		'nama_roti',
		'jenis_roti',
	),
)); ?>
