<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs = [
    'Users' => ['index'],
    $model->id => ['view', 'id' => $model->id],
    'Update',
];

$this->menu = [
    ['label' => 'List Users', 'url' => ['index']],
    ['label' => 'Create Users', 'url' => ['create']],
    ['label' => 'View Users', 'url' => ['view', 'id' => $model->id]],
    ['label' => 'Manage Users', 'url' => ['admin']],
];
?>

    <h1>Update Users <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', ['model' => $model]); ?>