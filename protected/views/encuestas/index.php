<?php
/* @var $this EncuestasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Encuestas',
);

$this->menu = array(
    array('label' => 'Crear Encuestas', 'url' => array('create')),
    array('label' => 'Administrar Encuestas', 'url' => array('admin')),
);
?>

<h1>Encuestas</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
