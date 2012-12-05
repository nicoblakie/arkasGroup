<?php
/* @var $this OpcionesController */
/* @var $model Opciones */

$this->breadcrumbs = array(
    'Opciones' => array('index'),
    $model->idOpcion,
);

$this->menu = array(
    array('label' => 'Listar Opciones', 'url' => array('index')),
    array('label' => 'Crear Opciones', 'url' => array('create')),
    array('label' => 'Modificar Opciones', 'url' => array('update', 'id' => $model->idOpcion)),
    array('label' => 'Eliminar Opciones', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idOpcion), 'Confirmar' => '¿Está seguro que desea eliminar este artículo?')),
    array('label' => 'Administrar Opciones', 'url' => array('admin')),
);
?>

<h1>Vista de Opcion <?php echo $model->idOpcion; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'idOpcion',
        'opcion',
        'votos',
        'encuestas_idEncuesta',
    ),
));
?>
