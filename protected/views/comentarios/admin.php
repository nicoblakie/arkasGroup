<?php
/* @var $this ComentariosController */
/* @var $model Comentarios */

$this->breadcrumbs = array(
    'Comentarios' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'Listar Comentarios', 'url' => array('index')),
    array('label' => 'Crear Comentarios', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('comentarios-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Comentarios</h1>

<p>
    Si lo desea, puede introducir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    o <b>=</b>) al comienzo de cada uno de los valores de su búsqueda para especificar cómo la comparación se debe hacer.
</p>

<?php echo CHtml::link('Busqueda Avanzada', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'comentarios-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'idComentario',
        'usuario',
        'contenido',
        'fecha',
        'posts_idPost',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>