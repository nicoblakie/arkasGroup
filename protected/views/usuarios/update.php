<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs = array(
    'Usuarios' => array('index'),
    $model->idUsuario => array('view', 'id' => $model->idUsuario),
    'Update',
);
?>

<h1>Cambiar Contraseña</h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>