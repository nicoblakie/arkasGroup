<?php
/* @var $this PostsController */
/* @var $model Posts */

$this->breadcrumbs = array(
    'Posts' => array('index'),
    $model->idPost,
);

$this->menu = array(
    array('label' => 'Listar Posts', 'url' => array('index')),
    array('label' => 'Crear Posts', 'url' => array('create')),
    array('label' => 'Modificar Posts', 'url' => array('update', 'id' => $model->idPost)),
    array('label' => 'Eliminar Posts', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idPost), 'Confirmar' => '¿Está seguro que desea eliminar este artículo?')),
    array('label' => 'Administrar Posts', 'url' => array('admin')),
);
?>
<div>
    <h2><center>
            <?php echo $model->titulo; ?>
        </center></h2> 
    <hr>
    <div class="imagen"><?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/' . $model->imagen, "imagen", array("width" => 500)); ?>
        <p class="imagenp">Publicado el: <?php echo $model->fecha; ?></p></div>

    <div><?php echo $model->contenido ?></div>
    <br>
    <br>
    <?php
            $_SESSION['idPost'] = $model->idPost;
    ?>
            <div style="float:right">
        <?php
            /* CODIGO PARA CREAR UN NUEVO COMENTARIO */
            echo CHtml::link('Crear Comentario', "", // Link para abrir le Dialog
                    array(
                        'style' => 'cursor: pointer; text-decoration: underline;',
                        'onclick' => "{addComentario(); $('#dialogComentario').dialog('open');}"));
        ?>
        </div>
    <?php
            $this->beginWidget('zii.widgets.jui.CJuiDialog', array(// El dialog
                'id' => 'dialogComentario',
                'options' => array(
                    'title' => 'Crear Comentario',
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

                function addComentario()
                {
<?php
            echo CHtml::ajax(array(
                'url' => array('/comentarios/create'),
                'data' => "js:$(this).serialize()",
                'type' => 'post',
                'dataType' => 'json',
                'idPost' => $model->idPost,
                'success' => "function(data)
{
if (data.status == 'failure')
{
$('#dialogComentario div.divForForm').html(data.div);
// Here is the trick: on submit-> once again this function!
$('#dialogComentario div.divForForm form').submit(addComentario);
}
else
{
//$('#dialogComentario div.divForForm').html(data.div);
setTimeout(\"$('#dialogComentario').dialog('close') \",0);
location.reload(true);
}

} ",
            ))
?>;
        return false;

        }
            </script>
            <br>
            <br>
            <br>
    <?php if ($comentario) {
    ?>

    <?php foreach ($comentario as $data) {
    ?>
            
            <p style="color: #8a1f11; font-family: fantasy; font-size: large;">
                 <?php echo $data->usuario; ?>:
            </p>
            <div style=" border: 1px solid #FFD324; ">
               
                    <p style=" float: right;">
                <?php
                    if (Yii::app()->user->isGuest) {
                        
                    } else {
                        echo CHtml::button('Borrar', array('submit' => 'index.php?r=comentarios/delete&id=' . $data->idComentario));
                    }
                    ?> 
                        </p>
                        <?php echo $data->contenido; ?><br><br><br>
                        <p style="font-style: italic; font-size: small; float: right;">
                            Publicado el dia:<?php echo $data->fecha; ?>
                        </p>
                
            </div>
            <br/>
<!--     
    <?php } ?>

    <?php
            } else {
                echo "No hay comentarios para este Post";
            }
    ?>
</div>