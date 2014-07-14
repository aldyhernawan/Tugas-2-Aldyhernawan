<?php
$this->breadcrumbs=array(
	'Master Pembelians'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MasterPembelian', 'url'=>array('index')),
	array('label'=>'Manage MasterPembelian', 'url'=>array('admin')),
);
?>

<h1>Create MasterPembelian</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>