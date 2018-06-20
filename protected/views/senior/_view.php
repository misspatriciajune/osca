<?php
/* @var $this SeniorController */
/* @var $data Senior */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('middle_name')); ?>:</b>
	<?php echo CHtml::encode($data->middle_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birth_date')); ?>:</b>
	<?php echo CHtml::encode($data->birth_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birth_place')); ?>:</b>
	<?php echo CHtml::encode($data->birth_place); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('house_no')); ?>:</b>
	<?php echo CHtml::encode($data->house_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('street')); ?>:</b>
	<?php echo CHtml::encode($data->street); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barangay')); ?>:</b>
	<?php echo CHtml::encode($data->barangay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('years_of_residency')); ?>:</b>
	<?php echo CHtml::encode($data->years_of_residency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_no')); ?>:</b>
	<?php echo CHtml::encode($data->tel_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('civil_status')); ?>:</b>
	<?php echo CHtml::encode($data->civil_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_name')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_age')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_age); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('educ_attainment')); ?>:</b>
	<?php echo CHtml::encode($data->educ_attainment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('work_xp')); ?>:</b>
	<?php echo CHtml::encode($data->work_xp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employed')); ?>:</b>
	<?php echo CHtml::encode($data->employed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position')); ?>:</b>
	<?php echo CHtml::encode($data->position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_salary')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_salary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employer')); ?>:</b>
	<?php echo CHtml::encode($data->employer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employer_address')); ?>:</b>
	<?php echo CHtml::encode($data->employer_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employer_tel_no')); ?>:</b>
	<?php echo CHtml::encode($data->employer_tel_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other_income')); ?>:</b>
	<?php echo CHtml::encode($data->other_income); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other_income_value')); ?>:</b>
	<?php echo CHtml::encode($data->other_income_value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('philhealth_member')); ?>:</b>
	<?php echo CHtml::encode($data->philhealth_member); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('philhealth_member_no')); ?>:</b>
	<?php echo CHtml::encode($data->philhealth_member_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('philhealth_dependent')); ?>:</b>
	<?php echo CHtml::encode($data->philhealth_dependent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('philhealth_dependent_name')); ?>:</b>
	<?php echo CHtml::encode($data->philhealth_dependent_name); ?>
	<br />

	*/ ?>

</div>