<?php
$this->breadcrumbs=array(
	'Master Pegawais'=>array('index'),
	$model->id_pegawai,
);

$this->menu=array(
	array('label'=>'List MasterPegawai', 'url'=>array('index')),
	array('label'=>'Create MasterPegawai', 'url'=>array('create')),
	array('label'=>'Update MasterPegawai', 'url'=>array('update', 'id'=>$model->id_pegawai)),
	array('label'=>'Delete MasterPegawai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pegawai),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MasterPegawai', 'url'=>array('admin')),
);
?>

<h1>View MasterPegawai #<?php echo $model->id_pegawai; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pegawai',
		'nama_pegawai',
		'jenis_kelamin',
		'tanggal_lahir',
		'alamat',
		'telepon',
	),
)); ?>
