<?php
/* @var $this PublicidadesController */
/* @var $model Publicidades */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'publicidades-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
        ),
            ));
    ?>

    <p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'url'); ?>
        <?php echo CHtml::activeFileField($model, 'url'); ?>	
        <?php echo $form->error($model, 'url'); ?>
    </div>
    <?php if ($model->isNewRecord != '1') { ?>
        <div class="row">
            <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/' . $model->url, "url", array("width" => 200));
        } ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'contenido'); ?>
        <?php echo $form->textField($model, 'contenido', array('size' => 60, 'maxlength' => 255)); ?>
<?php echo $form->error($model, 'contenido'); ?>
    </div>

<!--    <div class="row">
        <?php //echo $form->labelEx($model, 'posicion'); ?>
        <?php //echo $form->dropDownList($model, 'posicion', array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9')); ?>
<?php //echo $form->error($model, 'posicion'); ?>
    </div>-->

    <div class="row buttons">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->