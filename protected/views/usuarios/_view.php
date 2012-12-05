<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->idUsuario), array('view', 'id' => $data->idUsuario)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
    <?php echo CHtml::encode($data->usuario); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('pass')); ?>:</b>
    <?php echo CHtml::encode($data->pass); ?>
    <br />
    
</div>