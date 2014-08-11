<?php
/* @var $this ExercisesController */
/* @var $model CExercises */

$this->breadcrumbs=array(
	'Cexercises'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List CExercises', 'url'=>array('index')),
	array('label'=>'Create CExercises', 'url'=>array('create')),
	array('label'=>'Update CExercises', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CExercises', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CExercises', 'url'=>array('admin')),
);
?>

<h1>View CExercises #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'type',
		'hardness',
	),
)); ?>
