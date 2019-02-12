<?php
/* @var $this UserExerciseController */
/* @var $model UserExercise */

$this->breadcrumbs=array(
	'User Exercises'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserExercise', 'url'=>array('index')),
	array('label'=>'Create UserExercise', 'url'=>array('create')),
	array('label'=>'Update UserExercise', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserExercise', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserExercise', 'url'=>array('admin')),
);
?>

<h1>View UserExercise #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'exercise_id',
		'start_time',
		'end_time',
		'iteration',
		'spented_time',
	),
)); ?>
