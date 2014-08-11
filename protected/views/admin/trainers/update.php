<?php
/* @var $this TrainersController */
/* @var $model CTrainers */

$this->breadcrumbs=array(
	'Ctrainers'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CTrainers', 'url'=>array('index')),
	array('label'=>'Create CTrainers', 'url'=>array('create')),
	array('label'=>'View CTrainers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CTrainers', 'url'=>array('admin')),
);
?>

<h1>Update CTrainers <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>