<?php
/* @var $this PublicidadesController */
/* @var $model Publicidades */
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
<?php echo $form->label($model, 'idPublicidad'); ?>
<?php echo $form->textField($model, 'idPublicidad'); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'url'); ?>
<?php echo $form->textField($model, 'url', array('size' => 60, 'maxlength' => 255)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'contenido'); ?>
<?php echo $form->textField($model, 'contenido', array('size' => 60, 'maxlength' => 255)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'posicion'); ?>
<?php echo $form->textField($model, 'posicion'); ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->