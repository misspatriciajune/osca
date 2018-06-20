<?php
/* @var $this SeniorController */
/* @var $model Senior */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'middle_name'); ?>
		<?php echo $form->textField($model,'middle_name',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'birth_date'); ?>
		<?php echo $form->textField($model,'birth_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'birth_place'); ?>
		<?php echo $form->textField($model,'birth_place',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'house_no'); ?>
		<?php echo $form->textField($model,'house_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'street'); ?>
		<?php echo $form->textField($model,'street',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'barangay'); ?>
		<?php echo $form->textField($model,'barangay',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'years_of_residency'); ?>
		<?php echo $form->textField($model,'years_of_residency'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel_no'); ?>
		<?php echo $form->textField($model,'tel_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'civil_status'); ?>
		<?php echo $form->textField($model,'civil_status',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_name'); ?>
		<?php echo $form->textField($model,'spouse_name',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_age'); ?>
		<?php echo $form->textField($model,'spouse_age'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'educ_attainment'); ?>
		<?php echo $form->textField($model,'educ_attainment',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'work_xp'); ?>
		<?php echo $form->textField($model,'work_xp',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employed'); ?>
		<?php echo $form->textField($model,'employed',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_salary'); ?>
		<?php echo $form->textField($model,'monthly_salary',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employer'); ?>
		<?php echo $form->textField($model,'employer',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employer_address'); ?>
		<?php echo $form->textField($model,'employer_address',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employer_tel_no'); ?>
		<?php echo $form->textField($model,'employer_tel_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'other_income'); ?>
		<?php echo $form->textField($model,'other_income',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'other_income_value'); ?>
		<?php echo $form->textField($model,'other_income_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'philhealth_member'); ?>
		<?php echo $form->textField($model,'philhealth_member',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'philhealth_member_no'); ?>
		<?php echo $form->textField($model,'philhealth_member_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'philhealth_dependent'); ?>
		<?php echo $form->textField($model,'philhealth_dependent',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'philhealth_dependent_name'); ?>
		<?php echo $form->textField($model,'philhealth_dependent_name',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->