<?php
$this->breadcrumbs=array(
	'Master Pembelians'=>array('index'),
	$model->id_beli=>array('view','id'=>$model->id_beli),
	'Update',
);

$this->menu=array(
	array('label'=>'List MasterPembelian', 'url'=>array('index')),
	array('label'=>'Create MasterPembelian', 'url'=>array('create')),
	array('label'=>'View MasterPembelian', 'url'=>array('view', 'id'=>$model->id_beli)),
	array('label'=>'Manage MasterPembelian', 'url'=>array('admin')),
);
?>

<h1>Update MasterPembelian <?php echo $model->id_beli; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>