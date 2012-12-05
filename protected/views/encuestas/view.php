<?php
/* @var $this EncuestasController */
/* @var $model Encuestas */

$this->breadcrumbs = array(
    'Encuestas' => array('index'),
    $model->idEncuesta,
);

$this->menu = array(
    array('label' => 'Listar Encuestas', 'url' => array('index')),
    array('label' => 'Crear Encuestas', 'url' => array('create')),
    array('label' => 'Modificar Encuestas', 'url' => array('update', 'id' => $model->idEncuesta)),
    array('label' => 'Eliminar Encuestas', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idEncuesta), 'Confirmar' => '¿Está seguro que desea eliminar este artículo?')),
    array('label' => 'Administrar Encuestas', 'url' => array('admin')),
);
?>

<h1>Vista de Encuesta <?php echo $model->idEncuesta; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'idEncuesta',
        'pregunta',
    ),
));
?>
<?php
$_SESSION['idEncuesta'] = $model->idEncuesta;
?>
<div style="float:right">
    <?php
    /* CODIGO PARA CREAR UNA NUEVA OPCION */
    echo CHtml::link('Crear Opcion', "", // Link para abrir le Dialog
            array(
        'style' => 'cursor: pointer; text-decoration: underline;',
        'onclick' => "{addOpcion(); $('#dialogOpcion').dialog('open');}"));
    ?>
</div>
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(// El dialog
    'id' => 'dialogOpcion',
    'options' => array(
        'title' => 'Crear Opcion',
        'autoOpen' => false,
        'modal' => true,
        'width' => 550,
        'height' => 370,
    ),
));
?>
<div class="divForForm"></div>

<?php $this->endWidget(); ?>

<script type="text/javascript">

    function addOpcion()
    {
<?php
echo CHtml::ajax(array(
    'url' => array('/opciones/create'),
    'data' => "js:$(this).serialize()",
    'type' => 'post',
    'dataType' => 'json',
    'idEncuesta' => $model->idEncuesta,
    'success' => "function(data)
            {
                if (data.status == 'failure')
                {
                    $('#dialogOpcion div.divForForm').html(data.div);
                          // Here is the trick: on submit-> once again this function!
                    $('#dialogOpcion div.divForForm form').submit(addOpcion);
                }
                else
                {
                    $('#dialogOpcion div.divForForm').html(data.div);
                    setTimeout(\"$('#dialogOpcion').dialog('close') \",30000);
                } 
            } ",
))
?>;
        return false;
    }
</script>
<?php if ($opcion) { ?>
    <?php foreach ($opcion as $data) { ?>
        <br /><br /><?php echo $data->opcion; ?><br />
        <div>
          <?php  echo CHtml::button('Borrar', array('submit' => 'index.php?r=opciones/delete&id=' . $data->idOpcion));?>
        </div>
        <div class="view"><?php echo $data->votos; ?> </div>
    <?php } ?>
    <?php
} else {
    echo "No hay opciones para esta Encuesta!";
}
?>
<a href="http://criaderolodejose.com.ar/index.php?r=opciones/admin">Administrar Opciones</a><br>
<!--<a href="http://criaderolodejose.com.ar/index.php?r=posts/delete&id="> borrar </a>-->
