<?php
/* @var $this TextoGiraController */
/* @var $model TextoGira */

$this->breadcrumbs=array(
	'Texto Giras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TextoGira', 'url'=>array('index')),
	array('label'=>'Manage TextoGira', 'url'=>array('admin')),
);
?>

<h1>Create TextoGira</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>