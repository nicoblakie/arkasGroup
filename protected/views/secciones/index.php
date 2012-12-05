<?php
/* @var $this SeccionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Secciones',
);

$this->menu = array(
    array('label' => 'Crear Secciones', 'url' => array('create')),
    array('label' => 'Administrar Secciones', 'url' => array('admin')),
);
?>
<h1>Secciones</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>