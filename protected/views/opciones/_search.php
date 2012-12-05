<?php
/* @var $this OpcionesController */
/* @var $model Opciones */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
            ));
    ?>

    <div class="row">
<?php echo $form->label($model, 'idOpcion'); ?>
<?php echo $form->textField($model, 'idOpcion'); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'opcion'); ?>
<?php echo $form->textField($model, 'opcion', array('size' => 20, 'maxlength' => 20)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'votos'); ?>
<?php echo $form->textField($model, 'votos'); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'encuestas_idEncuesta'); ?>
<?php echo $form->textField($model, 'encuestas_idEncuesta'); ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->