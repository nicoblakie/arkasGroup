<?php
/* @var $this EncuestasController */
/* @var $model Encuestas */
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
<?php echo $form->label($model, 'idEncuesta'); ?>
<?php echo $form->textField($model, 'idEncuesta'); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'pregunta'); ?>
<?php echo $form->textField($model, 'pregunta', array('size' => 50, 'maxlength' => 50)); ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->