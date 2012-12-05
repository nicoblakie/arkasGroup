<?php
/* @var $this PostsController */
/* @var $model Posts */
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
<?php echo $form->label($model, 'idPost'); ?>
<?php echo $form->textField($model, 'idPost'); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'imagen'); ?>
<?php echo $form->textField($model, 'imagen', array('size' => 50, 'maxlength' => 50)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'fecha'); ?>
<?php echo $form->textField($model, 'fecha'); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'titulo'); ?>
<?php echo $form->textField($model, 'titulo', array('size' => 60, 'maxlength' => 60)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'contenido'); ?>
<?php echo $form->textField($model, 'contenido', array('size' => 60, 'maxlength' => 255)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'tags'); ?>
<?php echo $form->textField($model, 'tags', array('size' => 50, 'maxlength' => 50)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'secciones_idSeccion'); ?>
<?php echo $form->textField($model, 'secciones_idSeccion'); ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->