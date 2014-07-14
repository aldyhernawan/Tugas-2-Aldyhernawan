<?php
$this->breadcrumbs=array(
	'Master Pegawais',
);

$this->menu=array(
	array('label'=>'Create MasterPegawai', 'url'=>array('create')),
	array('label'=>'Manage MasterPegawai', 'url'=>array('admin')),
);
?>

<h1>Master Pegawais</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
