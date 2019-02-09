<?php
/* @var $this ExerciseController */

use helpers\DateTimeHelper;

/* @var $model Exercise */

$this->breadcrumbs = array(
    'Exercises' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Exercise', 'url' => array('index')),
    array('label' => 'Create Exercise', 'url' => array('create')),
    array('label' => 'Update Exercise', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Exercise', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Exercise', 'url' => array('admin')),
);
?>

<h1>View Exercise #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'name',
        'description',
        'level',
        'iterations',
        [
            'name' => 'alloted_time',
            'value' => function ($data) {
                return DateTimeHelper::getSecondsToTimeString($data->alloted_time);
            }
        ],
        'purpose',
    ),
)); ?>
