<?php
/* @var $this SeccionesController */
/* @var $model Secciones */
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
<?php echo $form->label($model, 'idSeccion'); ?>
<?php echo $form->textField($model, 'idSeccion'); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'nombre'); ?>
<?php echo $form->textField($model, 'nombre', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->