<?php
/* @var $this UserExerciseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Exercises',
);

$this->menu=array(
	array('label'=>'Create UserExercise', 'url'=>array('create')),
	array('label'=>'Manage UserExercise', 'url'=>array('admin')),
);
?>

<h1>User Exercises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
