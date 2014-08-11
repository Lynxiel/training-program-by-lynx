<?php
/* @var $this ExercisesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cexercises',
);

$this->menu=array(
	array('label'=>'Create CExercises', 'url'=>array('create')),
	array('label'=>'Manage CExercises', 'url'=>array('admin')),
);
?>

<h1>Cexercises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
