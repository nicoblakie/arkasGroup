<?php
/* @var $this SeccionesController */
/* @var $model Secciones */

$this->breadcrumbs = array(
    'Secciones' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'Listar Secciones', 'url' => array('index')),
    array('label' => 'Administrar Secciones', 'url' => array('admin')),
);
?>

<h1>Crear Secciones</h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>