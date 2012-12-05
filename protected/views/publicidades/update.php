<?php
/* @var $this PublicidadesController */
/* @var $model Publicidades */

$this->breadcrumbs = array(
    'Publicidades' => array('index'),
    $model->idPublicidad => array('view', 'id' => $model->idPublicidad),
    'Update',
);

$this->menu = array(
    array('label' => 'Listar Publicidades', 'url' => array('index')),
    array('label' => 'Crear Publicidades', 'url' => array('create')),
    array('label' => 'Ver Publicidades', 'url' => array('view', 'id' => $model->idPublicidad)),
    array('label' => 'Administrar Publicidades', 'url' => array('admin')),
);
?>

<h1>Modificar Publicidades <?php echo $model->idPublicidad; ?></h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>