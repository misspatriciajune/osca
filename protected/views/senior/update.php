<?php
/* @var $this SeniorController */
/* @var $model Senior */

$this->breadcrumbs=array(
	'Seniors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Senior', 'url'=>array('index')),
	array('label'=>'Create Senior', 'url'=>array('create')),
	array('label'=>'View Senior', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Senior', 'url'=>array('admin')),
);
?>

<h1>Update Senior <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>