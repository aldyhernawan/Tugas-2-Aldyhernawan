<?php
$this->breadcrumbs=array(
	'Master Pegawais'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MasterPegawai', 'url'=>array('index')),
	array('label'=>'Manage MasterPegawai', 'url'=>array('admin')),
);
?>

<h1>Create MasterPegawai</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>