<?php
$this->breadcrumbs=array(
	'Gudangs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gudang', 'url'=>array('index')),
	array('label'=>'Manage Gudang', 'url'=>array('admin')),
);
?>

<h1>Create Gudang</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>