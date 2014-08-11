<?php
/* @var $this ExercisesController */
/* @var $model CExercises */

$this->breadcrumbs=array(
	'Cexercises'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CExercises', 'url'=>array('index')),
	array('label'=>'Create CExercises', 'url'=>array('create')),
	array('label'=>'View CExercises', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CExercises', 'url'=>array('admin')),
);
?>

<h1>Update CExercises <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>