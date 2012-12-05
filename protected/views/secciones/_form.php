<?php
/* @var $this SeccionesController */
/* @var $model Secciones */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'secciones-form',
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

        <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'nombre'); ?>
<?php echo $form->textField($model, 'nombre', array('size' => 45, 'maxlength' => 45)); ?>
<?php echo $form->error($model, 'nombre'); ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->