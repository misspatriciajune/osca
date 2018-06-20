<?php
/* @var $this SeniorController */
/* @var $model Senior */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'senior-application-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'house_no'); ?>
		<?php echo $form->textField($model,'house_no'); ?>
		<?php echo $form->error($model,'house_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'years_of_residency'); ?>
		<?php echo $form->textField($model,'years_of_residency'); ?>
		<?php echo $form->error($model,'years_of_residency'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel_no'); ?>
		<?php echo $form->textField($model,'tel_no'); ?>
		<?php echo $form->error($model,'tel_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_age'); ?>
		<?php echo $form->textField($model,'spouse_age'); ?>
		<?php echo $form->error($model,'spouse_age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employer_tel_no'); ?>
		<?php echo $form->textField($model,'employer_tel_no'); ?>
		<?php echo $form->error($model,'employer_tel_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_income_value'); ?>
		<?php echo $form->textField($model,'other_income_value'); ?>
		<?php echo $form->error($model,'other_income_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'philhealth_member_no'); ?>
		<?php echo $form->textField($model,'philhealth_member_no'); ?>
		<?php echo $form->error($model,'philhealth_member_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name'); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'middle_name'); ?>
		<?php echo $form->textField($model,'middle_name'); ?>
		<?php echo $form->error($model,'middle_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name'); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birth_place'); ?>
		<?php echo $form->textField($model,'birth_place'); ?>
		<?php echo $form->error($model,'birth_place'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'street'); ?>
		<?php echo $form->textField($model,'street'); ?>
		<?php echo $form->error($model,'street'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'barangay'); ?>
		<?php echo $form->textField($model,'barangay'); ?>
		<?php echo $form->error($model,'barangay'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'civil_status'); ?>
		<?php echo $form->textField($model,'civil_status'); ?>
		<?php echo $form->error($model,'civil_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_name'); ?>
		<?php echo $form->textField($model,'spouse_name'); ?>
		<?php echo $form->error($model,'spouse_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'educ_attainment'); ?>
		<?php echo $form->textField($model,'educ_attainment'); ?>
		<?php echo $form->error($model,'educ_attainment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'work_xp'); ?>
		<?php echo $form->textField($model,'work_xp'); ?>
		<?php echo $form->error($model,'work_xp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textField($model,'position'); ?>
		<?php echo $form->error($model,'position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monthly_salary'); ?>
		<?php echo $form->textField($model,'monthly_salary'); ?>
		<?php echo $form->error($model,'monthly_salary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employer'); ?>
		<?php echo $form->textField($model,'employer'); ?>
		<?php echo $form->error($model,'employer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employer_address'); ?>
		<?php echo $form->textField($model,'employer_address'); ?>
		<?php echo $form->error($model,'employer_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_income'); ?>
		<?php echo $form->textField($model,'other_income'); ?>
		<?php echo $form->error($model,'other_income'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'philhealth_dependent_name'); ?>
		<?php echo $form->textField($model,'philhealth_dependent_name'); ?>
		<?php echo $form->error($model,'philhealth_dependent_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender'); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employed'); ?>
		<?php echo $form->textField($model,'employed'); ?>
		<?php echo $form->error($model,'employed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'philhealth_member'); ?>
		<?php echo $form->textField($model,'philhealth_member'); ?>
		<?php echo $form->error($model,'philhealth_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'philhealth_dependent'); ?>
		<?php echo $form->textField($model,'philhealth_dependent'); ?>
		<?php echo $form->error($model,'philhealth_dependent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birth_date'); ?>
		<?php echo $form->textField($model,'birth_date'); ?>
		<?php echo $form->error($model,'birth_date'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->