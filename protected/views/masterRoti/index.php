<?php
$this->breadcrumbs=array(
	'Master Rotis',
);

$this->menu=array(
	array('label'=>'Create MasterRoti', 'url'=>array('create')),
	array('label'=>'Manage MasterRoti', 'url'=>array('admin')),
);
?>

<h1>Master Rotis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
