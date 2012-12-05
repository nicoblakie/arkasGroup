<?php
/* @var $this ComentariosController */
/* @var $data Comentarios */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('idComentario')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->idComentario), array('view', 'id' => $data->idComentario)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
    <?php echo CHtml::encode($data->usuario); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('contenido')); ?>:</b>
    <?php echo CHtml::encode($data->contenido); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
    <?php echo CHtml::encode($data->fecha); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('posts_idPost')); ?>:</b>
    <?php echo CHtml::encode($data->posts_idPost); ?>
    <br />


</div>