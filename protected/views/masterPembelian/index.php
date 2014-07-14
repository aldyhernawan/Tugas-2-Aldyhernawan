<?php
$this->breadcrumbs=array(
	'Master Pembelians',
);

$this->menu=array(
	array('label'=>'Create MasterPembelian', 'url'=>array('create')),
	array('label'=>'Manage MasterPembelian', 'url'=>array('admin')),
);
?>

<h1>Master Pembelians</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
