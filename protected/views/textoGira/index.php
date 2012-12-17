<?php
/* @var $this TextoGiraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Texto Giras',
);

$this->menu=array(
	array('label'=>'Crear Nuevo Texto', 'url'=>array('create')),
	array('label'=>'Administrar Textos', 'url'=>array('admin')),
);
?>

<h1>Texto Giras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
