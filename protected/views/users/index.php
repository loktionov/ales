<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = [
    'Users',
];

$this->menu = [
    ['label' => 'Create Users', 'url' => ['create']],
    ['label' => 'Manage Users', 'url' => ['admin']],
];
?>

<h1>Users</h1>

<?php $this->widget('zii.widgets.CListView', [
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
]); ?>
