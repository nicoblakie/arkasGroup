<?php
/* @var $this TextoGiraController */
/* @var $model TextoGira */

$this->breadcrumbs=array(
	'Texto Giras'=>array('index'),
	$model->idTexto=>array('view','id'=>$model->idTexto),
	'Update',
);

$this->menu=array(
	array('label'=>'List TextoGira', 'url'=>array('index')),
	array('label'=>'Create TextoGira', 'url'=>array('create')),
	array('label'=>'View TextoGira', 'url'=>array('view', 'id'=>$model->idTexto)),
	array('label'=>'Manage TextoGira', 'url'=>array('admin')),
);
?>

<h1>Update TextoGira <?php echo $model->idTexto; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>