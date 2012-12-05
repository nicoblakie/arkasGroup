<?php
/* @var $this EncuestasController */
/* @var $model Encuestas */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'encuestas-form',
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

        <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'pregunta'); ?>
<?php echo $form->textField($model, 'pregunta', array('size' => 50, 'maxlength' => 50)); ?>
<?php echo $form->error($model, 'pregunta'); ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->