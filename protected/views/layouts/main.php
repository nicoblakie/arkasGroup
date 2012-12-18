<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="es" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link href="css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="css/dropdown/themes/vimeo.com/default.advanced.css" media="screen" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    </head>
    <body>
        <div class="container" id="page">
            <div id="header">
                <?php
                echo CHtml::image(Yii::app()->request->baseUrl . '/images/arkasnombre.gif', "imagen", array("height"=> 100 ));
                echo CHtml::image(Yii::app()->request->baseUrl . '/images/logoArkas.gif', "imagen", array("style"=> "position : absolute; right : 110px", "height"=> 100));
                ?>

            </div><!-- header -->

            <div id="cssmenu">
                
                <ul>
                    <li><?php echo CHtml::link("Inicio", array('/site/index')); ?></li>
                    <li class='has-sub '><?php echo CHtml::link("Secciones", array('/secciones/index')); ?>
                        <ul>
                            <?php
                                $secciones= Secciones::model()->findAll();
                                foreach ($secciones as $sec) {
                            ?>
                                    <li><?php echo CHtml::link($sec->nombre, array('/secciones/view', 'id' => $sec->idSeccion)); ?></li>
                                    <?php
                                }
                            ?>
                        </ul>
                    </li>
                    <li>
                        <?php echo CHtml::link("Contacto", array('/site/contact')); ?>
                    </li>
                     <li class='centroitem'>    
                            <?php
                            $texto = "";
                            $cont = 0;
                            for ($i = 0; $i < 5; $i++) {
                                
                                $textoGira = TextoGira::model()->findAll(array('order' => 'idTexto DESC', 'limit' => 5));
                                if ($textoGira == Null) {
                                    $i--;
                                } else {
                                    
                                }
                            }
                            foreach ($textoGira as $dataTe) {
                                $texto = $texto . "| <<  " . $dataTe->contenido . "  >> |";
                            }
                            ?>
                            <input type="text" id="marquesina" disabled="true" style="color: white; border: none; background:none; width: 700px ;height: 40px; margin-top:3px ;margin-left: 50px; margin-right: 80px;" />
                            <script type="text/javascript">
                            <!--

                            texto = "<?php echo $texto ?>"
                            function mueveTexto(){


                                    texto = texto.substring(1, texto.length) + texto.charAt(0)

                                    document.getElementById('marquesina').value = texto

                                    tiempo = setTimeout('mueveTexto()',200)

                            }

                            -->

                            </script>
                            <script type="text/javascript">

                            <!--

                            mueveTexto();

                            -->

                            </script>
                           </li> 
                    
                    <li class='ultitem'>
                        
                        <form method="post" action="" style="margin-top:8px" >
                            <fieldset>
                                <input type="text" id="search" class="text" value="Buscar!" onfocus="if (this.value == 'Buscar!') this.value = '';" onblur="if (this.value == '') this.value = 'Buscar!';" maxlength="255" />
                                <input type="image" src="images/search.png" class="button" />
                            </fieldset>
                        </form>
                    </li>
                </ul>
            </div><!-- mainmenu -->

                            <table>
                                <tr>

                    <?php
                    if(!isset($_SESSION)) {
                        session_start();
                    }
                    else if(!isset($_SESSION['vot'])){
                        $_SESSION['vot'] = 0;
                    }
                    else if($_SESSION['vot']==1){
                        $_SESSION['vot']=1;
                    }
                    if (Yii::app()->user->isGuest) {
                    ?>
                                <td width="80%">
                                    <div  >
                                        <table>
                                            <tr>
                                                <td>
                                                    <div style="position: absolute; top:190px; right: 300px; left: 20px; background-color: white">
                                                        <?php echo $content; ?>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                                <td width="20%">
                        <?php
                                for ($i = 0; $i < 11; $i++) {
                                    $numero_aleatorio = rand(1, 500);
                                    $publicidades = Publicidades::model()->findAll("`idPublicidad` = $numero_aleatorio");
                                    if ($publicidades == Null) {
                                        $i--;
                                    } else {
                                        foreach ($publicidades as $data) {
                       
                                    if($i==2){?>
                                        <div style="position: static; margin-top: 5px; color: white;">
                                            <p>
                                            <?php

                                            $encuesta = Encuestas::model()->findAll(array('order' => 'idEncuesta DESC', 'limit' => 1));
                                            foreach ($encuesta as $dataE){
                                                echo $dataE->pregunta;
                                                $_SESSION['idEncuesta'] = $dataE->idEncuesta;
                                                $opciones = Opciones::model()->findAll(array('order' => 'idOpcion DESC', 'condition' => "`encuestas_idEncuesta` = $dataE->idEncuesta"));
                                                ?><ul><?php
                                                foreach($opciones as $dataO){
                                                    ?><li><?php
                                                    echo $dataO->opcion;
                                                    if(!isset($_SESSION)) {
                                                        session_start();
                                                    }
                                                    else if (!isset($_SESSION['vot'])){
                                                        $_SESSION['vot'] = 0;
                                                        echo CHtml::button('+', array('submit' => 'index.php?r=opciones/update&id=' . $dataO->idOpcion, 'style'=> "position: absolute; right: 15px;"));
                                                    }
                                                    else if($_SESSION['vot']==1){
                                                        echo "   - Votos: ";
                                                        echo $dataO->votos;
                                                        $_SESSION['vot']=1;
                                                    }
                                                    else if($_SESSION['vot']!=1){
                                                        echo CHtml::button('+', array('submit' => 'index.php?r=opciones/update&id=' . $dataO->idOpcion, 'style'=> "position: absolute; right: 15px;"));
                                                    }
                                                    ?></li><?php
                                                }
                                                ?></ul><?php
                                            }
                                            ?>
                                                </p>
                                        </div>
                                    <?php }?>
                                            <div style="position: static; margin-top: 5px;">

                            <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/' . $data->url, $data->contenido, array("width" => 260, "height" => 260)); ?>
                                        <br/>
                                        </div>
                        <?php
                                        }
                                    }
                                }
                        ?>
                            </td>

                    <?php
                            } else {
                    ?>
                                <td width="90%">
                                    <table>
                                        <tr>
                                            <tr>
                                                <td width="20%">
                                                    <div class="portlet" id="yw2" style="top: 179px; position: fixed">
                                                        <table border="2">
                                                            <tr>
                                                                <td colspan="2">

                                                                    <div class="portlet-content">
                                                                        <ul class="operations" id="yw3">
                                                                            <div class="portlet-decoration">
                                                                                <div class="portlet-title">Panel Administrador</div>
                                                                            </div>
                                                                            <li><a href="index.php?r=secciones">Secciones</a></li>
                                                                            <li><a href="index.php?r=posts">Post's</a></li>
                                                                            <li><a href="index.php?r=encuestas">Encuestas</a></li>
                                                                            <li><a href="index.php?r=publicidades">Publicidades</a></li>
                                                                            <li><a href="index.php?r=textoGira">Texto Animado en Menu</a></li>
                                                                            <li><br/></li>
                                                                            <div class="portlet-decoration">
                                                                                <div class="portlet-title">Opciones Adicionales</div>
                                                                            </div>
                                                                            <li><a href="index.php?r=cruge/ui/usermanagementupdate&id=1">Cambiar Contraseña </a></li>
                                                                            <div id="sidebar">
                                                                            <?php
                                                                            $this->beginWidget('zii.widgets.CPortlet', array(
                                                                                'title' => 'Funciones Administrativas',
                                                                                'htmlOptions' => array('class' => 'portlet-title'),
                                                                            ));
                                                                            $this->widget('zii.widgets.CMenu', array(
                                                                                'items' => $this->menu,
                                                                                'htmlOptions' => array('class' => 'operations'),
                                                                            ));
                                                                            $this->endWidget();
                                                                            ?>
                                                                            </div><!-- sidebar -->
                                                                         </ul>
                                                                    </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                    <td width="85%"><div style="left: 300px; background-color: white"><?php echo $content; ?></div></td>
                                </tr>
                            </tr>
                        </table>
                    </td>
                    <td width="10%" >
                        <div style="position: absolute; top: 182px;">
                            <?php
                                                                        for ($i = 0; $i < 5; $i++) {

                                                                            $numero_aleatorio = rand(1, 500);
                                                                            $publicidades = Publicidades::model()->findAll("`idPublicidad` = $numero_aleatorio");
                                                                            if ($publicidades == Null) {
                                                                                $i--;
                                                                            } else {
                                                                                foreach ($publicidades as $data) {
                          if($i==2){?>
                                        <div style="position: static; margin-top: 5px; background-color: white">
                                            <p>
                                            <?php

                                            $encuesta = Encuestas::model()->findAll(array('order' => 'idEncuesta DESC', 'limit' => 1));
                                            foreach ($encuesta as $dataE){
                                                echo $dataE->pregunta;
                                                $_SESSION['idEncuesta'] = $dataE->idEncuesta;
                                                $opciones = Opciones::model()->findAll(array('order' => 'idOpcion DESC', 'condition' => "`encuestas_idEncuesta` = $dataE->idEncuesta"));
                                                ?><ul><?php
                                                foreach($opciones as $dataO){
                                                    ?><li><?php
                                                    echo $dataO->opcion;
                                                    if(!isset($_SESSION)) {
                                                        session_start();
                                                    }
                                                    else if (!isset($_SESSION['vot'])){
                                                        $_SESSION['vot'] = 0;
                                                        echo CHtml::button('+', array('submit' => 'index.php?r=opciones/update&id=' . $dataO->idOpcion, 'style'=> "position: absolute; right: 15px;"));
                                                    }
                                                    else if($_SESSION['vot']==1){
                                                        echo "   - Votos: ";
                                                        echo $dataO->votos;
                                                        $_SESSION['vot']=1;
                                                    }
                                                    else if($_SESSION['vot']!=1){
                                                        echo CHtml::button('+', array('submit' => 'index.php?r=opciones/update&id=' . $dataO->idOpcion, 'style'=> "position: absolute; right: 15px;"));
                                                    }
                                                    ?></li><?php
                                                }
                                                ?></ul><?php
                                            }
                                            ?>
                                                </p>
                                        </div>
                                    <?php }?>
                                                                                    <div>
                                <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/' . $data->url, $data->contenido, array("width" => 100, "height" => 100)); ?>
                                                                                    <br/>
                                                                                </div>
                            <?php
                                                                                }
                                                                            }
                                                                        }
                            ?>
                                                                    </div>
                                                                </td>
                    <?php } ?>
                                                                </tr>
                                                            </table>
                                                            <div class="clear"></div>
                                                            <div id="footer">
                                                                <br/><br/>
                                                                                        <?php
                        if (Yii::app()->user->isGuest) {
                            echo CHtml::link("Iniciar Sesion", Yii::app()->user->ui->loginUrl);
                        } else {
                            echo CHtml::link("Cerrar Sesion (" . Yii::app()->user->name . ")", Yii::app()->user->ui->logoutUrl);
                        }
                        ?>
                        <br/><br/>
                                                                Copyright &copy; <?php echo date('Y'); ?><br/>
                <a href="http://www.dorean.com.ar/">Dorean Soluciones Informaticas</a><br/>
                Todos los derechos reservados.<br/>
            </div><!-- footer -->
        </div><!-- page -->
    </body>
</html>
