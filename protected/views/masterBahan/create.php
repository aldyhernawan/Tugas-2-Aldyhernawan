<?php
$this->breadcrumbs=array(
	'Master Bahans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MasterBahan', 'url'=>array('index')),
	array('label'=>'Manage MasterBahan', 'url'=>array('admin')),
);
?>

<h1>Create MasterBahan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>