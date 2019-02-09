<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs = [
    'Users' => ['index'],
    $model->id,
];

$this->menu = [
    ['label' => 'List Users', 'url' => ['index']],
    ['label' => 'Create Users', 'url' => ['create']],
    ['label' => 'Update Users', 'url' => ['update', 'id' => $model->id]],
    ['label' => 'Delete Users', 'url' => '#', 'linkOptions' => ['submit' => ['delete', 'id' => $model->id], 'confirm' => 'Are you sure you want to delete this item?']],
    ['label' => 'Manage Users', 'url' => ['admin']],
];
?>

<h1>View Users #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', [
    'data' => $model,
    'attributes' => [
        'id',
        'login',
        'password',
    ],
]); ?>
