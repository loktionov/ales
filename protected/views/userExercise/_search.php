<?php
/* @var $this UserExerciseController */
/* @var $model UserExercise */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    )); ?>

    <div class="row">
        <?php echo $form->label($model, 'id'); ?>
        <?php echo $form->textField($model, 'id'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'user_id'); ?>
        <?php echo $form->textField($model, 'user_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'exercise_id'); ?>
        <?php echo $form->textField($model, 'exercise_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'start_time'); ?>
        <?php echo $form->textField($model, 'start_time'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'end_time'); ?>
        <?php echo $form->textField($model, 'end_time'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'iteration'); ?>
        <?php echo $form->textField($model, 'iteration'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'spented_time'); ?>
        <?php echo $form->textField($model, 'spented_time'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->