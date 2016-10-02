<?php
$this->breadcrumbs=array(
	'Beritaacaras',
);

$this->menu=array(
	array('label'=>'Create Beritaacara', 'url'=>array('create')),
	array('label'=>'Manage Beritaacara', 'url'=>array('admin')),
);
?>

<h1>Beritaacaras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
