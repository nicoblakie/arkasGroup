<?php
/* @var $this PostsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Posts',
);

$this->menu = array(
    array('label' => 'Crear Posts', 'url' => array('create')),
    array('label' => 'Administrar Posts', 'url' => array('admin')),
);
?>

<h1>Posts</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>

