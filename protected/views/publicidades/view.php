<?php
/* @var $this PublicidadesController */
/* @var $model Publicidades */

$this->breadcrumbs = array(
    'Publicidades' => array('index'),
    $model->idPublicidad,
);

$this->menu = array(
    array('label' => 'Listar Publicidades', 'url' => array('index')),
    array('label' => 'Crear Publicidades', 'url' => array('create')),
    array('label' => 'Modificar Publicidades', 'url' => array('update', 'id' => $model->idPublicidad)),
    array('label' => 'Eliminar Publicidades', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idPublicidad), 'Confirmar' => '¿Está seguro que desea eliminar este artículo?')),
    array('label' => 'Administrar Publicidades', 'url' => array('admin')),
);
?>

<h1>Vista de Publicidad <?php echo $model->contenido; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'url',
        'contenido',
    ),
));
?>
