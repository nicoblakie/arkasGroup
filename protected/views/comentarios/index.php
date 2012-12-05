<?php
/* @var $this ComentariosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Comentarios',
);

$this->menu = array(
    array('label' => 'Crear Comentarios', 'url' => array('create')),
    array('label' => 'Administrar Comentarios', 'url' => array('admin')),
);
?>

<h1>Comentarios</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
