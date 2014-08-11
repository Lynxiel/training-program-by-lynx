<?php
/* @var $this ExercisesController */
/* @var $model CExercises */

$this->breadcrumbs=array(
	'Cexercises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CExercises', 'url'=>array('index')),
	array('label'=>'Manage CExercises', 'url'=>array('admin')),
);
?>

<h1>Create CExercises</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>