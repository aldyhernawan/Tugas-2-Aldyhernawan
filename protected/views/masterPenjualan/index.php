<?php
$this->breadcrumbs=array(
	'Master Penjualans',
);

$this->menu=array(
	array('label'=>'Create MasterPenjualan', 'url'=>array('create')),
	array('label'=>'Manage MasterPenjualan', 'url'=>array('admin')),
);
?>

<h1>Master Penjualans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
