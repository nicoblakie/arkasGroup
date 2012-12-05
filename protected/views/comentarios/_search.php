<?php
/* @var $this ComentariosController */
/* @var $model Comentarios */
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
<?php echo $form->label($model, 'idComentario'); ?>
<?php echo $form->textField($model, 'idComentario'); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'usuario'); ?>
<?php echo $form->textField($model, 'usuario', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'contenido'); ?>
<?php echo $form->textField($model, 'contenido', array('size' => 60, 'maxlength' => 150)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'fecha'); ?>
<?php echo $form->textField($model, 'fecha'); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'posts_idPost'); ?>
<?php echo $form->textField($model, 'posts_idPost'); ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->