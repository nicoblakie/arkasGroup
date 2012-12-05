<?php
/* @var $this SeccionesController */
/* @var $model Secciones */

$this->breadcrumbs = array(
    'Secciones' => array('index'),
    $model->idSeccion => array('view', 'id' => $model->idSeccion),
    'Update',
);

$this->menu = array(
    array('label' => 'Listar Secciones', 'url' => array('index')),
    array('label' => 'Crear Secciones', 'url' => array('create')),
    array('label' => 'Ver Secciones', 'url' => array('view', 'id' => $model->idSeccion)),
    array('label' => 'Administrar Secciones', 'url' => array('admin')),
);
?>

<h1>Modificar Secciones <?php echo $model->idSeccion; ?></h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>