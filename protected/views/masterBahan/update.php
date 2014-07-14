<?php
$this->breadcrumbs=array(
	'Master Bahans'=>array('index'),
	$model->kd_bahan=>array('view','id'=>$model->kd_bahan),
	'Update',
);

$this->menu=array(
	array('label'=>'List MasterBahan', 'url'=>array('index')),
	array('label'=>'Create MasterBahan', 'url'=>array('create')),
	array('label'=>'View MasterBahan', 'url'=>array('view', 'id'=>$model->kd_bahan)),
	array('label'=>'Manage MasterBahan', 'url'=>array('admin')),
);
?>

<h1>Update MasterBahan <?php echo $model->kd_bahan; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>