<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = [
    'Login',
];
?>

<h1>Login</h1>

<div class="form" style="width: 400px">
    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    )); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'username'); ?>
        <?php echo $form->textField($model, 'username', ['class' => 'form-control', 'placeholder' => 'login']); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password', ['class' => 'form-control', 'placeholder' => 'password']); ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>

    <div class="form-group rememberMe checkbox">
        <?php echo $form->checkBox($model, 'rememberMe'); ?>
        <?php echo $form->label($model, 'rememberMe'); ?>
        <?php echo $form->error($model, 'rememberMe'); ?>
    </div>

    <div class="buttons form-group">
        <button type="submit" class="btn btn-success btn-lg">Login</button>
    </div>

    <?php $this->endWidget(); ?>
</div><!-- form -->
