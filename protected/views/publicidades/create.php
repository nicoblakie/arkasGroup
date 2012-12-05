<?php
/* @var $this PublicidadesController */
/* @var $model Publicidades */

$this->breadcrumbs = array(
    'Publicidades' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'Listar Publicidades', 'url' => array('index')),
    array('label' => 'Administrar Publicidades', 'url' => array('admin')),
);
?>

<h1>Crear Publicidades</h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>