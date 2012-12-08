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
                echo CHtml::image(Yii::app()->request->baseUrl . '/images/arkasnombre.PNG', "imagen", array("height"=> 100 ));
                echo CHtml::image(Yii::app()->request->baseUrl . '/images/logoArkas.PNG', "imagen", array("style"=> "position : absolute; right : 0px", "height"=> 100));
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
                    <li>
                        <?php
                        if (Yii::app()->user->isGuest) {
                            echo CHtml::link("Iniciar Sesion", Yii::app()->user->ui->loginUrl);
                        } else {
                            echo CHtml::link("Cerrar Sesion (" . Yii::app()->user->name . ")", Yii::app()->user->ui->logoutUrl);
                        }
                        ?>
                    </li>
                    <!--<li>
                        <form method="post" action="">
                            <fieldset>
                                <label for="search">Buscar:</label>
                                <input type="text" id="search" class="text" value="Buscar!" onfocus="if (this.value == 'Buscar!') this.value = '';" onblur="if (this.value == '') this.value = 'Buscar!';" maxlength="255" />
                                <input type="image" src="images/vimeo.com/btn_search.png" class="button" />
                            </fieldset>
                        </form>
                    </li> -->
                </ul>
            </div><!-- mainmenu -->

            <!--<?php if (isset($this->breadcrumbs)): ?>
            <?php
                            $this->widget('zii.widgets.CBreadcrumbs', array(
                                'links' => $this->breadcrumbs,
                            ));
            ?> breadcrumbs -->

            <?php endif ?>
                            <table>
                                <tr>

                    <?php
                            if (Yii::app()->user->isGuest) {
                    ?>
                                <td width="80%">
                                    <div  >
                                        <table>
                                            <tr>
                                                <td>
                                                    <div style="position: absolute; margin-top:40px; top:150px; right: 300px; left: 20px; background-color: white">
                                                        <?php echo $content; ?>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                                <td width="20%">
                        <?php
                                for ($i = 0; $i < 5; $i++) {
                                    $numero_aleatorio = rand(1, 500);
                                    $publicidades = Publicidades::model()->findAll("`idPublicidad` = $numero_aleatorio");
                                    if ($publicidades == Null) {
                                        $i--;
                                    } else {
                                        foreach ($publicidades as $data) {
                        ?>
                                            <div style="position: static; margin-top: 5px;">

                            <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/' . $data->url, $data->contenido, array("width" => 260, "height" => 260)); ?>
                                        <hr/>
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

                                                    <div class="portlet" id="yw2" style="margin-top: 30px; top: 150px; position: fixed">
                                                        <table border="2">
                                                            <tr><td colspan="2">

                                                                    <div class="portlet-content">
                                                                        <ul class="operations" id="yw3">
                                                                            <div class="portlet-decoration">
                                                                                <div class="portlet-title">Administracion</div>
                                                                            </div>
                                                                            <li><a href="index.php?r=secciones"> Secciones</a></li>

                                                                            <li><a href="index.php?r=posts"> - - - Posts </a></li>

                                                                            <li><a href="index.php?r=secciones/view&id=1">  Noticias </a></li>
                                                                            <li><a href="index.php?r=secciones/view&id=2">  Horoscopos </a></li>
                                                                            <li><a href="index.php?r=secciones/view&id=3">  Recetas </a></li>
                                                                            <li><a href="index.php?r=encuestas">  Encuestas </a></li>
                                                                            <li><a href="index.php?r=publicidades">  Publicidades </a></li>
                                                                            <br />
                                                                            <li></li>
                                                                            <li><a href="index.php?r=cruge/ui/usermanagementupdate&id=1"> Cambiar Contraseña </a></li>
                                                                            <div>
                                                                                <div id="sidebar">
                                                                        <?php
                                                                        $this->beginWidget('zii.widgets.CPortlet', array(
                                                                            'title' => 'Operations',
                                                                        ));
                                                                        $this->widget('zii.widgets.CMenu', array(
                                                                            'items' => $this->menu,
                                                                            'htmlOptions' => array('class' => 'operations'),
                                                                        ));
                                                                        $this->endWidget();
                                                                        ?>
                                                                    </div><!-- sidebar -->
                                                                </div>

                                                            </ul></div>

                                                    </td></tr>
                                            </table>
                                        </div>
                                    </td>
                                    <td width="85%"><div style="left: 300px; background-color: white"><?php echo $content; ?></div></td>
                                </tr>
                            </tr>
                        </table>
                    </td>
                    <td width="10%" >
                        <div style="position: absolute; top: 150px;">
                            <?php
                                                                        for ($i = 0; $i < 5; $i++) {
                                                                            $numero_aleatorio = rand(1, 500);
                                                                            $publicidades = Publicidades::model()->findAll("`idPublicidad` = $numero_aleatorio");
                                                                            if ($publicidades == Null) {
                                                                                $i--;
                                                                            } else {
                                                                                foreach ($publicidades as $data) {
                            ?>
                                                                                    <div>
                                <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/' . $data->url, $data->contenido, array("width" => 100, "height" => 100)); ?>
                                                                                    <hr />
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
                                                                Copyright &copy; <?php echo date('Y'); ?><br/>
                <a href="http://www.dorean.com.ar/">Dorean Soluciones Informaticas</a><br/>
                Todos los derechos reservados.<br/>
            </div><!-- footer -->
        </div><!-- page -->
    </body>
</html>
