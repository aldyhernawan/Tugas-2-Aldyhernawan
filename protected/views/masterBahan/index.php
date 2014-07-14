<?php
$this->breadcrumbs=array(
	'Master Bahans',
);

$this->menu=array(
	array('label'=>'Create MasterBahan', 'url'=>array('create')),
	array('label'=>'Manage MasterBahan', 'url'=>array('admin')),
);
?>

<h1>Master Bahans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
