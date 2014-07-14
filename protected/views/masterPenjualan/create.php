<?php
$this->breadcrumbs=array(
	'Master Penjualans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MasterPenjualan', 'url'=>array('index')),
	array('label'=>'Manage MasterPenjualan', 'url'=>array('admin')),
);
?>

<h1>Create MasterPenjualan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>