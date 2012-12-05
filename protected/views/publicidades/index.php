<?php
/* @var $this PublicidadesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Publicidades',
);

$this->menu = array(
    array('label' => 'Crear Publicidades', 'url' => array('create')),
    array('label' => 'Administrar Publicidades', 'url' => array('admin')),
);
?>

<h1>Publicidades</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
