<?php
/* @var $this OpcionesController */
/* @var $model Opciones */

$this->breadcrumbs = array(
    'Opciones' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'Listar Opciones', 'url' => array('index')),
    array('label' => 'Administrar Opciones', 'url' => array('admin')),
);
?>

<h1>Crear Opciones</h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>