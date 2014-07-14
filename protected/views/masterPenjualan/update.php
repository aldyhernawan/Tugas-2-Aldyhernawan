<?php
$this->breadcrumbs=array(
	'Master Penjualans'=>array('index'),
	$model->id_jual=>array('view','id'=>$model->id_jual),
	'Update',
);

$this->menu=array(
	array('label'=>'List MasterPenjualan', 'url'=>array('index')),
	array('label'=>'Create MasterPenjualan', 'url'=>array('create')),
	array('label'=>'View MasterPenjualan', 'url'=>array('view', 'id'=>$model->id_jual)),
	array('label'=>'Manage MasterPenjualan', 'url'=>array('admin')),
);
?>

<h1>Update MasterPenjualan <?php echo $model->id_jual; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>