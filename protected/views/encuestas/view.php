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

<h1>Encuesta <?php echo $model->pregunta; ?></h1>

<?php
//$this->widget('zii.widgets.CDetailView', array(
//    'data' => $model,
//    'attributes' => array(
//        'idEncuesta',
//        'pregunta',
//    ),
//));
//?>
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
                    //$('#dialogOpcion div.divForForm').html(data.div);
                    setTimeout(\"$('#dialogOpcion').dialog('close') \",0);
                    location.reload(true);
                }
            }",
    ))
?>;
            return false;
        }
    </script>
    <br/>
    <br/>
<?php if ($opcion) {
 ?>
<?php foreach ($opcion as $data) { ?>
    
    <div style=" border: 1px solid #FFD324;">
        <div style="color: #8a1f11; font-family: serif; font-size: large;">
            <?php echo $data->opcion; ?>
        </div>
        
        
            <div style=" float: right;">
                <?php echo CHtml::button('Borrar', array('submit' => 'index.php?r=opciones/delete&id=' . $data->idOpcion)); ?>
            </div>
            <br/>
            <div style="font-style: italic; font-size: small;">
                Cantidad de votos:<?php echo $data->votos; ?> 
            </div>
        
    </div>
        
            
<?php } ?>
<?php
    } else {
        echo "No hay opciones para esta Encuesta!";
    }
?>
