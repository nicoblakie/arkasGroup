<?php
/* @var $this PostsController */
/* @var $model Posts */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'posts-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
        ),
            ));
    ?>

    <p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'imagen'); ?>
        <?php echo CHtml::activeFileField($model, 'imagen'); ?>
        <?php echo $form->error($model, 'imagen'); ?>
    </div>
    <?php if ($model->isNewRecord != '1') {
        ?>
        <div class="row">
            <?php
            echo CHtml::image(Yii::app()->request->baseUrl . '/images/' . $model->imagen, "imagen", array("width" => 200));
        }
        ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'fecha'); ?>
        <?php
        if ($model->fecha != '') {
            $model->fecha = date('d-m-Y', strtotime($model->fecha));
        }
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'fecha',
            'value' => $model->fecha,
            'language' => 'es',
            'htmlOptions' => array('readonly' => "readonly"),
            'options' => array(
                'autoSize' => true,
                'defaultDate' => $model->fecha,
                'dateFormat' => 'yy-mm-dd',
                'buttonImage' => Yii::app()->baseUrl . '/images/calendar.png',
                'buttonImageOnly' => true,
                'buttonText' => 'Fecha',
                'selectOtherMonths' => true,
                'showAnim' => 'slide',
                'showButtonPanel' => true,
                'showOn' => 'button',
                'showOtherMonths' => true,
                'changeMonth' => 'true',
                'changeYear' => 'true',
            ),
        ));
        ?>
<?php echo $form->error($model, 'fecha'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'titulo'); ?>
        <?php echo $form->textField($model, 'titulo', array('size' => 60, 'maxlength' => 60)); ?>
<?php echo $form->error($model, 'titulo'); ?>
    </div>

    <div class="row">
        <?php echo $form->error($model, 'contenido'); ?>
        <?php $form->widget('application.extensions.TheCKEditor.theCKEditorWidget',array(
            'model'=>$model,                # Data-Model (form model)
            'attribute'=>'contenido',         # Attribute in the Data-Model
            'height'=>'400px',
            'width'=>'98%',
            'toolbarSet'=>'Basic',          # EXISTING(!) Toolbar (see: ckeditor.js)
            'ckeditor'=>Yii::app()->basePath.'/../ckeditor/ckeditor.php',
                                            # Path to ckeditor.php
            'ckBasePath'=>Yii::app()->baseUrl.'/ckeditor/',
                                            # Relative Path to the Editor (from Web-Root)
            'config' => array('toolbar'=>array(
             array( 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ),
             array( 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ),
             array( 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ),
             array( 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ),
             array( 'Styles','Format','Font','FontSize'  ),
             array( 'TextColor','BGColor'  ),),'resize_enabled' => 'false', 'skin' => 'kama'))); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'tags'); ?>
        <?php echo $form->textField($model, 'tags', array('size' => 50, 'maxlength' => 50)); ?>
<?php echo $form->error($model, 'tags'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'secciones_idSeccion'); ?>
        <?php echo $form->dropDownList($model, 'secciones_idSeccion', CHtml::listData(Secciones::model()->findAll(), 'idSeccion', 'nombre'), array('empty' => array(NULL => '-- Seleccione --')));
        ?>
<?php echo $form->error($model, 'secciones_idSeccion'); ?>
    </div>

    <div class="row buttons">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->