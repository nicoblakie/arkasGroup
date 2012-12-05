<?php
/* @var $this OpcionesController */
/* @var $data Opciones */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('idOpcion')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->idOpcion), array('view', 'id' => $data->idOpcion)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('opcion')); ?>:</b>
    <?php echo CHtml::encode($data->opcion); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('votos')); ?>:</b>
    <?php echo CHtml::encode($data->votos); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('encuestas_idEncuesta')); ?>:</b>
    <?php echo CHtml::encode($data->encuestas_idEncuesta); ?>
    <br />


</div>