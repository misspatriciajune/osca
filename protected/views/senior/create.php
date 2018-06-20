<?php
/* @var $this SeniorController */
/* @var $model Senior */

$this->breadcrumbs=array(
	'Seniors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Senior', 'url'=>array('index')),
	array('label'=>'Manage Senior', 'url'=>array('admin')),
);
?>

<h1>Create Senior</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>