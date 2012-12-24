<?php

/**
 * This is the model class for table "publicidades".
 *
 * The followings are the available columns in table 'publicidades':
 * @property integer $idPublicidad
 * @property string $url
 * @property string $contenido
 * @property integer $posicion
 */
class Publicidades extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Publicidades the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'publicidades';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('url', 'required'),
            array('posicion', 'numerical', 'integerOnly' => true),
            array('url, contenido', 'length', 'max' => 255, 'on' => 'insert, update'),
            array('url', 'file', 'types' => 'jpg, gif, png', 'allowEmpty' => true, 'on' => 'update'),
            array('idPublicidad, url, contenido, posicion', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idPublicidad' => 'Numero de Publicidad',
            'url' => 'Url',
            'contenido' => 'Contenido',
            'posicion' => 'Posicion',
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

        $criteria->compare('idPublicidad', $this->idPublicidad);
        $criteria->compare('url', $this->url, true);
        $criteria->compare('contenido', $this->contenido, true);
        $criteria->compare('posicion', $this->posicion);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}