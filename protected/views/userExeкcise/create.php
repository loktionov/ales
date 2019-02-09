<?php
/* @var $this UserExerciseController */
/* @var $model UserExercise */

$this->breadcrumbs=array(
	'User Exercises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserExercise', 'url'=>array('index')),
	array('label'=>'Manage UserExercise', 'url'=>array('admin')),
);
?>

<h1>Create UserExercise</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>