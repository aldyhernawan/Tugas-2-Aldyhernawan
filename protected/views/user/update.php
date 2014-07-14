<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->Nomor=>array('view','id'=>$model->Nomor),
	'Update',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->Nomor)),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Update User <?php echo $model->Nomor; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>