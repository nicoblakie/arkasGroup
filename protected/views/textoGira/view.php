<?php
/* @var $this TextoGiraController */
/* @var $model TextoGira */

$this->breadcrumbs=array(
	'Texto Giras'=>array('index'),
	$model->idTexto,
);

$this->menu=array(
	array('label'=>'List TextoGira', 'url'=>array('index')),
	array('label'=>'Create TextoGira', 'url'=>array('create')),
	array('label'=>'Update TextoGira', 'url'=>array('update', 'id'=>$model->idTexto)),
	array('label'=>'Delete TextoGira', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTexto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TextoGira', 'url'=>array('admin')),
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
