<?php
/* @var $this MusclesController */
/* @var $model CMuscles */

$this->breadcrumbs=array(
	'Cmuscles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CMuscles', 'url'=>array('index')),
	array('label'=>'Manage CMuscles', 'url'=>array('admin')),
);
?>

<h1>Create CMuscles</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>