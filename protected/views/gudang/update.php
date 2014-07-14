<?php
$this->breadcrumbs=array(
	'Gudangs'=>array('index'),
	$model->id_gudang=>array('view','id'=>$model->id_gudang),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gudang', 'url'=>array('index')),
	array('label'=>'Create Gudang', 'url'=>array('create')),
	array('label'=>'View Gudang', 'url'=>array('view', 'id'=>$model->id_gudang)),
	array('label'=>'Manage Gudang', 'url'=>array('admin')),
);
?>

<h1>Update Gudang <?php echo $model->id_gudang; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>