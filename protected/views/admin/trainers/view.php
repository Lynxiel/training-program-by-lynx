<?php
/* @var $this TrainersController */
/* @var $model CTrainers */

$this->breadcrumbs=array(
	'Ctrainers'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List CTrainers', 'url'=>array('index')),
	array('label'=>'Create CTrainers', 'url'=>array('create')),
	array('label'=>'Update CTrainers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CTrainers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CTrainers', 'url'=>array('admin')),
);
?>

<h1>View CTrainers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
	),
)); ?>
