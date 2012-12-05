<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
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
        <?php echo $form->label($model, 'idUsuario'); ?>
        <?php echo $form->textField($model, 'idUsuario'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'usuario'); ?>
        <?php echo $form->textField($model, 'usuario', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'pass'); ?>
        <?php echo $form->textField($model, 'pass', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->