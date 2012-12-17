<?php
/* @var $this TextoGiraController */
/* @var $data TextoGira */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTexto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTexto), array('view', 'id'=>$data->idTexto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contenido')); ?>:</b>
	<?php echo CHtml::encode($data->contenido); ?>
	<br />


</div>