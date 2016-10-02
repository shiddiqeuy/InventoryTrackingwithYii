<?php

$this->breadcrumbs=array(
	'Beritaacaras'=>array('index'),
	'Manage',
);



$this->menu=array(
	array('label'=>'List Beritaacara', 'url'=>array('index')),
	array('label'=>'Create Beritaacara', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('beritaacara-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

	
<h1>Manage Beritaacara</h1>




<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<div align="right">
  <form><input type="button" value=" Print this page "
onclick="window.print();return false;" /></form>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'beritaacara-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'tgl_order',
		'no_tlp',
		'no_speedy',
		'nama_pelanggan',
		'tgl_bon_modem',
		/*
		'mac',
		'sn_modem',
		'tipe_modem',
		'tgl_psg',
		'tgl_cabut',
		'kode_agen',
		'paket',
		'keterangan',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
));


 ?>
