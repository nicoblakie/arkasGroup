<?php
/* @var $this PostsController */
/* @var $model Posts */

$this->breadcrumbs = array(
    'Posts' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'Listar Posts', 'url' => array('index')),
    array('label' => 'Administrar Posts', 'url' => array('admin')),
);
?>

<h1>Crear Posts</h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>