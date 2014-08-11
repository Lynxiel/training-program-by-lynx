<?php
/* @var $this TrainersController */
/* @var $model CTrainers */

$this->breadcrumbs=array(
	'Ctrainers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CTrainers', 'url'=>array('index')),
	array('label'=>'Manage CTrainers', 'url'=>array('admin')),
);
?>

<h1>Create CTrainers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>