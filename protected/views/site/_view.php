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

    <b><?php echo CHtml::encode($data->getAttributeLabel('idPost')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->idPost), array('posts/view', 'id' => $data->idPost)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
    <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/' . $data->imagen); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
    <?php echo CHtml::encode($data->fecha); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
    <?php echo CHtml::encode($data->titulo); ?>
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