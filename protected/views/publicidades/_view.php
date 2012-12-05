<?php
/* @var $this PublicidadesController */
/* @var $data Publicidades */
?>

<div class="view">

    <?php echo CHtml::link((CHtml::image(Yii::app()->request->baseUrl . '/images/' . $data->url,"imagen", array("width"=>191, "height"=>191))), array('/publicidades/view', 'id' =>$data->idPublicidad)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('Titulo')); ?>:</b>
    <?php echo CHtml::encode($data->contenido); ?>
    <br />

</div>