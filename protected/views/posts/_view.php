<?php
/* @var $this PostsController */
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'posts-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),));
?>

<div class="view">

    <h1><?php echo CHtml::encode($data->titulo); ?></h1>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('idPost')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->idPost), array('view', 'id' => $data->idPost)); ?>
    <br />

    <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/' . $data->imagen, "imagen", array("width" => 300)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
    <?php echo CHtml::encode($data->fecha); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('contenido')); ?>:</b>
    <?php echo CHtml::encode($data->contenido); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('tags')); ?>:</b>
    <?php echo CHtml::encode($data->tags); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('secciones_idSeccion')); ?>:</b>
    <?php echo CHtml::encode($data->secciones_idSeccion); ?>
    <br />

</div>
<?php $this->endWidget(); ?>