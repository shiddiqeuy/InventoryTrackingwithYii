<?php
$this->breadcrumbs=array(
	'Beritaacaras'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Beritaacara', 'url'=>array('index')),
	array('label'=>'Create Beritaacara', 'url'=>array('create')),
	array('label'=>'Update Beritaacara', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Beritaacara', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Beritaacara', 'url'=>array('admin')),
);
?>

<h1>View Beritaacara #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tgl_order',
		'no_tlp',
		'no_speedy',
		'nama_pelanggan',
		'tgl_bon_modem',
		'mac',
		'sn_modem',
		'tipe_modem',
		'tgl_psg',
		'tgl_cabut',
		'kode_agen',
		'paket',
		'keterangan',
	),
)); ?>
<a href="javascript:window.print()">Print</a>

