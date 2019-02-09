<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs = [
    'Users' => ['index'],
    'Create',
];

$this->menu = [
    ['label' => 'List Users', 'url' => ['index']],
    ['label' => 'Manage Users', 'url' => ['admin']],
];
?>

    <h1>Create Users</h1>

<?php $this->renderPartial('_form', ['model' => $model]); ?>