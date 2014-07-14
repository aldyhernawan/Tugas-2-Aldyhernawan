<?php
$this->breadcrumbs=array(
	'Master Pembelians'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MasterPembelian', 'url'=>array('index')),
	array('label'=>'Create MasterPembelian', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('master-pembelian-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Master Pembelians</h1>

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
	'id'=>'master-pembelian-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_beli',
	
		array(
		'name'=>'id_pegawai',
		'type'=>'raw',
		'header'=>'Nama Pegawai',
		'value'=>'CHtml::encode
		($data->idpeg->nama_pegawai)',
		'htmlOptions'=>array('width'=>'120'),

		),
		
		array(
		'name'=>'kd_bahan',
		'type'=>'raw',
		'header'=>'Nama Bahan',
		'value'=>'CHtml::encode
		($data->kdbhn->nama_bahan)',
		'htmlOptions'=>array('width'=>'120'),
		),
		
		'harga_beli',
		'banyak_beli',
		'tanggal_beli',
		/*
		'tanggal_expired',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
