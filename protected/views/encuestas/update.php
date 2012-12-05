<?php
/* @var $this EncuestasController */
/* @var $model Encuestas */

$this->breadcrumbs = array(
    'Encuestas' => array('index'),
    $model->idEncuesta => array('view', 'id' => $model->idEncuesta),
    'Update',
);

$this->menu = array(
    array('label' => 'Listar Encuestas', 'url' => array('index')),
    array('label' => 'Crear Encuestas', 'url' => array('create')),
    array('label' => 'Ver Encuestas', 'url' => array('view', 'id' => $model->idEncuesta)),
    array('label' => 'Administrar Encuestas', 'url' => array('admin')),
);
?>

<h1>Modificar Encuestas <?php echo $model->idEncuesta; ?></h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>