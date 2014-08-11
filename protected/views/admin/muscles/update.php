<?php
/* @var $this MusclesController */
/* @var $model CMuscles */

$this->breadcrumbs=array(
	'Cmuscles'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CMuscles', 'url'=>array('index')),
	array('label'=>'Create CMuscles', 'url'=>array('create')),
	array('label'=>'View CMuscles', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CMuscles', 'url'=>array('admin')),
);
?>

<h1>Update CMuscles <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>