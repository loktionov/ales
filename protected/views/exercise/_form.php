<?php
/* @var $this ExerciseController */
/* @var $model Exercise */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'exercise-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'name'); ?>
        <?php echo $form->textField($model, 'name', ['size' => 60, 'maxlength' => 255]); ?>
        <?php echo $form->error($model, 'name'); ?>
    </div>


    <div class="row">
        <?php echo $form->labelEx($model, 'purpose'); ?>
        <?php echo $form->textArea($model, 'purpose', ['cols' => 62, 'rows' => 5]); ?>
        <?php echo $form->error($model, 'purpose'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'description'); ?>
        <?php echo $form->textArea($model, 'description', ['cols' => 62, 'rows' => 15]); ?>
        <?php echo $form->error($model, 'description'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'level'); ?>
        <?php echo $form->textField($model, 'level'); ?>
        <?php echo $form->error($model, 'level'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'iterations'); ?>
        <?php echo $form->textField($model, 'iterations'); ?>
        <?php echo $form->error($model, 'iterations'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'alloted_time'); ?>
        <?php echo $form->textField($model, 'alloted_time'); ?>
        <?php echo $form->error($model, 'alloted_time'); ?>
        <div class="form-check">
            <input type="radio" value="minute" name="alloted_period" id="alloted_period_minute">
            <label for="alloted_period_minute"> Минуты </label>
        </div>
        <div class="form-check">
            <input type="radio" value="hour" name="alloted_period" id="alloted_period_hour">
            <label for="alloted_period_hour"> Часы </label>
        </div>
        <div class="form-check">
            <input type="radio" value="day" name="alloted_period" id="alloted_period_day">
            <label for="alloted_period_day"> Дни </label>
        </div>
        <div class="form-check">
            <input type="radio" value="week" name="alloted_period" id="alloted_period_week">
            <label for="alloted_period_week">Недели</label>
        </div>
        <div class="form-check">
            <input type="radio" value="month" name="alloted_period" id="alloted_period_month">
            <label for="alloted_period_month"> Месяцы </label>
        </div>
    </div>


    <div class="row buttons">
        <button type="submit" class="btn btn-primary"><?= $model->isNewRecord ? 'Create' : 'Save'; ?></button>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->