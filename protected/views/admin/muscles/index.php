<?php
/* @var $this MusclesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cmuscles',
);

$this->menu=array(
	array('label'=>'Create CMuscles', 'url'=>array('create')),
	array('label'=>'Manage CMuscles', 'url'=>array('admin')),
);
?>

<h1>Cmuscles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
