<?php
/* @var $this OpcionesController */
/* @var $model Opciones */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'opciones-form',
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

        <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'opcion'); ?>
<?php echo $form->textField($model, 'opcion', array('size' => 20, 'maxlength' => 20)); ?>
<?php echo $form->error($model, 'opcion'); ?>
    </div>

    <div class="row" style="visibility:hidden">
        <?php echo $form->labelEx($model, 'votos'); ?>
<?php echo $form->textField($model, 'votos'); ?>
<?php echo $form->error($model, 'votos'); ?>
    </div>	

    <div class="row" style="visibility:hidden">
        <?php echo $form->labelEx($model, 'encuestas_idEncuesta'); ?>
<?php echo $form->textField($model, 'encuestas_idEncuesta', array('value' => $_SESSION['idEncuesta'])); ?>
<?php echo $form->error($model, 'encuestas_idEncuesta'); ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->