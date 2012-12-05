<?php
/* @var $this OpcionesController */
/* @var $model Opciones */

$this->breadcrumbs = array(
    'Opciones' => array('index'),
    $model->idOpcion => array('view', 'id' => $model->idOpcion),
    'Update',
);

$this->menu = array(
    array('label' => 'Listar Opciones', 'url' => array('index')),
    array('label' => 'Crear Opciones', 'url' => array('create')),
    array('label' => 'Ver Opciones', 'url' => array('view', 'id' => $model->idOpcion)),
    array('label' => 'Administrar Opciones', 'url' => array('admin')),
);
?>

<h1>Modificar Opciones <?php echo $model->idOpcion; ?></h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>