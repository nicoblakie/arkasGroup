<?php
/* @var $this TextoGiraController */
/* @var $model TextoGira */

$this->breadcrumbs=array(
	'Texto Giras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista Textos', 'url'=>array('index')),
	array('label'=>'Administrar Textos', 'url'=>array('admin')),
);
?>

<h1>Create TextoGira</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>