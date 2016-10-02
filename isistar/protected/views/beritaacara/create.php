<?php
$this->breadcrumbs=array(
	'Beritaacaras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Beritaacara', 'url'=>array('index')),
	array('label'=>'Manage Beritaacara', 'url'=>array('admin')),
);
?>

<h1>Create Beritaacara</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>