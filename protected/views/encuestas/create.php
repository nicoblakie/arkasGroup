<?php
/* @var $this EncuestasController */
/* @var $model Encuestas */

$this->breadcrumbs = array(
    'Encuestas' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'Listar Encuestas', 'url' => array('index')),
    array('label' => 'Administrar Encuestas', 'url' => array('admin')),
);
?>

<h1>Crear Encuestas</h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>