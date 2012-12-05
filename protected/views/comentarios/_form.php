<?php
/* @var $this ComentariosController */
/* @var $model Comentarios */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'comentarios-form',
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'usuario'); ?>
        <?php echo $form->textField($model, 'usuario', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'usuario'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'contenido'); ?>
        <?php echo $form->textField($model, 'contenido', array('size' => 60, 'maxlength' => 1000)); ?>
        <?php echo $form->error($model, 'contenido'); ?>
    </div>
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <div class="row" style="visibility: hidden">
        <?php echo $form->labelEx($model, 'fecha'); ?>
        <?php echo $form->textField($model, 'fecha'); ?>
        <?php echo $form->error($model, 'fecha'); ?>
    </div>
    <div class="row" style="visibility:hidden">
        <?php echo $form->labelEx($model, 'posts_idPost'); ?>
        <?php echo $form->textField($model, 'posts_idPost', array('value' => $_SESSION['idPost'])); ?>
        <?php echo $form->error($model, 'posts_idPost'); ?>
    </div>



    <?php $this->endWidget(); ?>

</div><!-- form -->