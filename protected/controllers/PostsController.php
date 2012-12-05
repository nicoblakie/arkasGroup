<?php

class PostsController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        /* $this->render('view', array(
          'model' => $this->loadModel($id),
          )); */

        $comentario = Comentarios::model()->findAll(array('order' => 'fecha DESC', 'condition' => "`posts_idPost` = $id"));
        $this->render('view', array('comentario' => $comentario, 'model' => $this->loadModel($id)));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Posts;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        if ($model->fecha == '') {
            $model->fecha = NULL;
        }

        if (isset($_POST['Posts'])) {
            $model->attributes = $_POST['Posts'];
            //$Seccion = activeDropDownList::getInstance($model,'Secciones[idSeccion]');

            $uploadedFile = CUploadedFile::getInstance($model, 'imagen');
            $fileName = "$uploadedFile";
            $model->imagen = $fileName;
            //$model->Secciones_idSeccion = $Seccion;
            if ($model->save()) {
                if (!empty($uploadedFile)) {
                    $uploadedFile->saveAs(Yii::app()->basePath . '/../images/' . $fileName);  // image will uplode to rootDirectory/banner/
                }
                $this->redirect(array('view', 'id' => $model->idPost));
            }
        }
        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Posts'])) {
            $_POST['Posts']['imagen'] = $model->imagen;
            $model->attributes = $_POST['Posts'];
            $uploadedFile = CUploadedFile::getInstance($model, 'imagen');
            $fileName = "$uploadedFile";
            $model->imagen = $fileName;
            if ($model->save()) {
                if (!empty($uploadedFile)) {  // check if uploaded file is set or not
                    $uploadedFile->saveAs(Yii::app()->basePath . '/../images/' . $model->imagen);
                }
                $this->redirect(array('view', 'id' => $model->idPost));
            }

            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idPost));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    public function actionDeleteAjax($id) {
        //$this->loadModel($id)->delete();
        Comentarios::model()->loadModel($id)->delete();
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {

        $model = Posts::model()->findAll();
        $dataProvider = new CActiveDataProvider('Posts');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Posts('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Posts']))
            $model->attributes = $_GET['Posts'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Posts::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'La página solicitada no existe.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'posts-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
