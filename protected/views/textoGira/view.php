<?php
/* @var $this TextoGiraController */
/* @var $model TextoGira */

$this->breadcrumbs=array(
	'Texto Giras'=>array('index'),
	$model->idTexto,
);

$this->menu=array(
	array('label'=>'Lista Textos', 'url'=>array('index')),
	array('label'=>'Crear Texto', 'url'=>array('create')),
	array('label'=>'Actualizar Texto', 'url'=>array('update', 'id'=>$model->idTexto)),
	array('label'=>'Eliminar Texto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTexto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Textos', 'url'=>array('admin')),
);
?>

<h1>View TextoGira #<?php echo $model->idTexto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTexto',
		'contenido',
	),
)); ?>
