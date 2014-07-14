<?php
$this->breadcrumbs=array(
	'Master Pegawais'=>array('index'),
	$model->id_pegawai=>array('view','id'=>$model->id_pegawai),
	'Update',
);

$this->menu=array(
	array('label'=>'List MasterPegawai', 'url'=>array('index')),
	array('label'=>'Create MasterPegawai', 'url'=>array('create')),
	array('label'=>'View MasterPegawai', 'url'=>array('view', 'id'=>$model->id_pegawai)),
	array('label'=>'Manage MasterPegawai', 'url'=>array('admin')),
);
?>

<h1>Update MasterPegawai <?php echo $model->id_pegawai; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>