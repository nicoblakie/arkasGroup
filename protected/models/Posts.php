<?php

/**
 * This is the model class for table "posts".
 *
 * The followings are the available columns in table 'posts':
 * @property integer $idPost
 * @property string $imagen
 * @property string $fecha
 * @property string $titulo
 * @property string $contenido
 * @property string $tags
 * @property integer $secciones_idSeccion
 *
 * The followings are the available model relations:
 * @property Comentarios[] $comentarioses
 * @property Secciones $seccionesIdSeccion
 */
class Posts extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Posts the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'posts';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('imagen, fecha, titulo, contenido, tags, secciones_idSeccion', 'required'),
            array('secciones_idSeccion', 'numerical', 'integerOnly' => true),
            array('imagen', 'length', 'max' => 150, 'on' => 'insert,update'),
            array('titulo, imagen', 'length', 'max' => 150, 'on' => 'insert,update'),
            array('imagen', 'file', 'types' => 'jpg, gif, png', 'allowEmpty' => true, 'on' => 'update'),
            array('titulo', 'length', 'max' => 60),
            array('contenido', 'length', 'max' => 5000),
            array('tags', 'length', 'max' => 50),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('idPost, imagen, fecha, titulo, contenido, tags, secciones_idSeccion', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'comentarioses' => array(self::HAS_MANY, 'Comentarios', 'posts_idPost'),
            'seccionesIdSeccion' => array(self::BELONGS_TO, 'Secciones', 'secciones_idSeccion'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idPost' => 'Numero de Post',
            'imagen' => 'Imagen',
            'fecha' => 'Fecha',
            'titulo' => 'Titulo',
            'contenido' => 'Contenido',
            'tags' => 'Tags',
            'secciones_idSeccion' => 'Seccion',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('idPost', $this->idPost);
        $criteria->compare('imagen', $this->imagen, true);
        $criteria->compare('fecha', $this->fecha, true);
        $criteria->compare('titulo', $this->titulo, true);
        $criteria->compare('contenido', $this->contenido, true);
        $criteria->compare('tags', $this->tags, true);
        $criteria->compare('secciones_idSeccion', $this->secciones_idSeccion);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}