<?php
/* @var $this PostsController */
/* @var $model Posts */

$this->breadcrumbs = array(
    'Posts' => array('index'),
    $model->idPost => array('view', 'id' => $model->idPost),
    'Update',
);

$this->menu = array(
    array('label' => 'Listar Posts', 'url' => array('index')),
    array('label' => 'Crear Posts', 'url' => array('create')),
    array('label' => 'Ver Posts', 'url' => array('view', 'id' => $model->idPost)),
    array('label' => 'Administrar Posts', 'url' => array('admin')),
);
?>

<h1>Modificar Posts <?php echo $model->idPost; ?></h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>