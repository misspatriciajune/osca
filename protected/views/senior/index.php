<?php
/* @var $this SeniorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Seniors',
);

$this->menu=array(
	array('label'=>'Create Senior', 'url'=>array('create')),
	array('label'=>'Manage Senior', 'url'=>array('admin')),
);
?>

<h1>Seniors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
