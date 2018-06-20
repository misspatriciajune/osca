<?php
/* @var $this SeniorController */
/* @var $model Senior */

$this->breadcrumbs=array(
	'Seniors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Senior', 'url'=>array('index')),
	array('label'=>'Create Senior', 'url'=>array('create')),
	array('label'=>'Update Senior', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Senior', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Senior', 'url'=>array('admin')),
);
?>

<h1>View Senior #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'first_name',
		'middle_name',
		'last_name',
		'birth_date',
		'birth_place',
		'gender',
		'house_no',
		'street',
		'barangay',
		'years_of_residency',
		'tel_no',
		'civil_status',
		'spouse_name',
		'spouse_age',
		'educ_attainment',
		'work_xp',
		'employed',
		'position',
		'monthly_salary',
		'employer',
		'employer_address',
		'employer_tel_no',
		'other_income',
		'other_income_value',
		'philhealth_member',
		'philhealth_member_no',
		'philhealth_dependent',
		'philhealth_dependent_name',
	),
)); ?>
