<?php
/* @var $this TextoGiraController */
/* @var $model TextoGira */

$this->breadcrumbs=array(
	'Texto Giras'=>array('index'),
	$model->idTexto=>array('view','id'=>$model->idTexto),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Textos', 'url'=>array('index')),
	array('label'=>'Crear Nuevo Texto', 'url'=>array('create')),
	array('label'=>'Ver Texto', 'url'=>array('view', 'id'=>$model->idTexto)),
	array('label'=>'Administrar Textos', 'url'=>array('admin')),
);
?>

<h1>Update TextoGira <?php echo $model->idTexto; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>