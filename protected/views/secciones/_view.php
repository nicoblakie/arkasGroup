<?php
/* @var $this SeccionesController */
/* @var $data Secciones */
?>

<div class="view">
    <h3><?php echo CHtml::link(CHtml::encode($data->nombre), array('view', 'id' => $data->idSeccion)); ?></h3>
    <hr>
</div>