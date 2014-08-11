<?php
/* @var $this MusclesController */
/* @var $model CMuscles */

$this->breadcrumbs=array(
	'Cmuscles'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List CMuscles', 'url'=>array('index')),
	array('label'=>'Create CMuscles', 'url'=>array('create')),
	array('label'=>'Update CMuscles', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CMuscles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CMuscles', 'url'=>array('admin')),
);
?>

<h1>View CMuscles #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'group_id',
		'size',
	),
)); ?>
