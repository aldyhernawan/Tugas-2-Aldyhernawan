<?php
$this->breadcrumbs=array(
	'Master Penjualans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MasterPenjualan', 'url'=>array('index')),
	array('label'=>'Create MasterPenjualan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('master-penjualan-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Master Penjualans</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'master-penjualan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_jual',
		
		array(
		'name'=>'id_peg',
		'type'=>'raw',
		'header'=>'Nama Pegawai',
		'value'=>'CHtml::encode
		($data->idpeg->nama_pegawai)',
		'htmlOptions'=>array('width'=>'120'),

		),
		
		array(
		'name'=>'kd_roti',
		'type'=>'raw',
		'header'=>'Nama Roti',
		'value'=>'CHtml::encode
		($data->kdroti->nama_roti)',
		'htmlOptions'=>array('width'=>'120'),
		),
		
		'harga_jual',
		'banyak_jual',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
