<?php
$this->breadcrumbs=array(
	'Master Rotis'=>array('index'),
	$model->kd_roti=>array('view','id'=>$model->kd_roti),
	'Update',
);

$this->menu=array(
	array('label'=>'List MasterRoti', 'url'=>array('index')),
	array('label'=>'Create MasterRoti', 'url'=>array('create')),
	array('label'=>'View MasterRoti', 'url'=>array('view', 'id'=>$model->kd_roti)),
	array('label'=>'Manage MasterRoti', 'url'=>array('admin')),
);
?>

<h1>Update MasterRoti <?php echo $model->kd_roti; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>