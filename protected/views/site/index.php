<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<?php if ($noticias) {
    ?>
    <?php foreach ($noticias as $data) {
        ?>
        <div>
            <br /><h1><?php echo CHtml::link(($data->titulo), array('posts/view', 'id' => $data->idPost)); ?></h1>
            <div class="imagen">
                <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/' . $data->imagen, "imagen", array("width" => 300, "height"=> 191)); ?>
                <p class="imagenp">Publicado el: <?php echo $data->fecha; ?></p></div>

            <div>
                <?php
                //ASIGNAMOS EL CONTENIDO A UNA VARIABLE $CONTENIDO PARA MOSTRAR 200 PALABRAS
                $contenido = $data->contenido;
                $NUM_PALABRAS_SHOW = "200"; //Fijo la cantidad que quiera de palabras a mostrar. En este caso del ejemplo coloque 20
                $contenido = explode(' ', $contenido);
                $contenido = array_slice($contenido, 0, $NUM_PALABRAS_SHOW);
                $contenido = implode(' ', $contenido);
                $contenido .= "...";
                echo $contenido;
                //echo $data->contenido;
                ?>
            </div>
            <br>
        </div>
        <hr>
    <?php } ?>
    <?php
} else {
    echo "No hay Noticias que Mostrar";
}
?>

