<?php
/* @var $this ComentariosController */
/* @var $model Comentarios */

$this->breadcrumbs = array(
    'Comentarios' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List Comentarios', 'url' => array('index')),
    array('label' => 'Manage Comentarios', 'url' => array('admin')),
);
?>

<h1>Crear Comentarios</h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>