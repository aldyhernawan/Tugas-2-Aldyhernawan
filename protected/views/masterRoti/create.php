<?php
$this->breadcrumbs=array(
	'Master Rotis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MasterRoti', 'url'=>array('index')),
	array('label'=>'Manage MasterRoti', 'url'=>array('admin')),
);
?>

<h1>Create MasterRoti</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>