<?php

/**
 * This is the model class for table "secciones".
 *
 * The followings are the available columns in table 'secciones':
 * @property integer $idSeccion
 * @property string $nombre
 *
 * The followings are the available model relations:
 * @property Posts[] $posts
 */
class Secciones extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Secciones the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'secciones';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('nombre', 'required'),
            array('nombre', 'length', 'max' => 45),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('idSeccion, nombre', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'posts' => array(self::HAS_MANY, 'Posts', 'secciones_idSeccion'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idSeccion' => 'Numero de Seccion',
            'nombre' => 'Nombre',
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

        $criteria->compare('idSeccion', $this->idSeccion);
        $criteria->compare('nombre', $this->nombre, true);
        $post = Posts::model()->findByPk('1');
        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}