<?php
$this->breadcrumbs=array(
	'Beritaacaras'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Beritaacara', 'url'=>array('index')),
	array('label'=>'Create Beritaacara', 'url'=>array('create')),
	array('label'=>'View Beritaacara', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Beritaacara', 'url'=>array('admin')),
);
?>

<h1>Update Beritaacara <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>