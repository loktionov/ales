<?php
/* @var $this UserExerciseController */
/* @var $model UserExercise */

$this->breadcrumbs=array(
	'User Exercises'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserExercise', 'url'=>array('index')),
	array('label'=>'Create UserExercise', 'url'=>array('create')),
	array('label'=>'View UserExercise', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserExercise', 'url'=>array('admin')),
);
?>

<h1>Update UserExercise <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>