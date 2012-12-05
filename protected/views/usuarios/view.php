<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs = array(
    'Usuarios' => array('index'),
    $model->idUsuario,
);

$this->menu = array(
    array('label' => 'Listar Usuarios', 'url' => array('index')),
    array('label' => 'Crear Usuarios', 'url' => array('create')),
    array('label' => 'Modificar Usuarios', 'url' => array('update', 'id' => $model->idUsuario)),
    array('label' => 'Eliminar Usuarios', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idUsuario), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Administrar Usuarios', 'url' => array('admin')),
);
?>

<h1>Vista de Usuario <?php echo $model->idUsuario; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'idUsuario',
        'usuario',
        'pass',
    ),
));
?>
