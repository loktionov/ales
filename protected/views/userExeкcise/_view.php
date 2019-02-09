<?php
/* @var $this UserExerciseController */
/* @var $data UserExercise */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('exercise_id')); ?>:</b>
	<?php echo CHtml::encode($data->exercise_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_time')); ?>:</b>
	<?php echo CHtml::encode($data->start_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_time')); ?>:</b>
	<?php echo CHtml::encode($data->end_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iteration')); ?>:</b>
	<?php echo CHtml::encode($data->iteration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spented_time')); ?>:</b>
	<?php echo CHtml::encode($data->spented_time); ?>
	<br />


</div>