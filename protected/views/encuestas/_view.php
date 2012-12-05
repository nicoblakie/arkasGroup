<?php
/* @var $this EncuestasController */
/* @var $data Encuestas */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('idEncuesta')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->idEncuesta), array('view', 'id' => $data->idEncuesta)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('pregunta')); ?>:</b>
    <?php echo CHtml::encode($data->pregunta); ?>
    <br />
    
</div>