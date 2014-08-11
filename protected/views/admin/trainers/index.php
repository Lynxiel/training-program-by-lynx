<?php
/* @var $this TrainersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ctrainers',
);

$this->menu=array(
	array('label'=>'Create CTrainers', 'url'=>array('create')),
	array('label'=>'Manage CTrainers', 'url'=>array('admin')),
);
?>

<h1>Ctrainers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
