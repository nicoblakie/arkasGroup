<?php
/* @var $this SeccionesController */
/* @var $model Secciones */

$this->breadcrumbs = array(
    'Secciones' => array('index'),
    $model->idSeccion,
);

$this->menu = array(
    array('label' => 'Listar Secciones', 'url' => array('index')),
    array('label' => 'Crear Secciones', 'url' => array('create')),
    array('label' => 'Modificar Secciones', 'url' => array('update', 'id' => $model->idSeccion)),
    array('label' => 'Eliminar Secciones', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idSeccion), 'Confirmar' => '¿Está seguro que desea eliminar este artículo?')),
    array('label' => 'Administrar Secciones', 'url' => array('admin')),
);
?>

<h1>Seccion <?php echo $model->nombre; ?></h1>

<!--$this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'attributes'=>array(
                'idSeccion',
                'nombre',
        ),
)); -->
<?php if ($posts) { ?>
    <?php foreach ($posts as $data) { ?>
        <div>
            <br /><h1><?php echo CHtml::link(($data->titulo), array('posts/view', 'id' => $data->idPost)); ?></h1><?php echo $data->fecha ?><br>
            <div class="imagen">
                <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/' . $data->imagen, "imagen", array("width" => 300)); ?>
                <p class="imagenp">Publicado el: <?php echo $data->fecha; ?></p>
            </div>
            <div>
                <?php 
                //ASIGNAMOS EL CONTENIDO A UNA VARIABLE $CONTENIDO PARA MOSTRAR 200 PALABRAS

                $contenido = $data->contenido;
                if($data->secciones_idSeccion == 7){
                    $NUM_PALABRAS_SHOW = "150"; //Fijo la cantidad que quiera de palabras a mostrar. En este caso del ejemplo coloque 20
                }
                else{
                    $NUM_PALABRAS_SHOW = "200";
                }
                $contenido = explode(' ', $contenido);
                $contenido = array_slice($contenido, 0, $NUM_PALABRAS_SHOW);
                $contenido = implode(' ', $contenido);
                $contenido .= "...";
                echo $contenido; ?>
            </div>
            <br>
        </div>
        <hr>
    <?php } ?>
    <?php
} else {
    echo "No hay posts que mostrar en esta seccion";
}
?>