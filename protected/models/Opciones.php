<?php

/**
 * This is the model class for table "opciones".
 *
 * The followings are the available columns in table 'opciones':
 * @property integer $idOpcion
 * @property string $opcion
 * @property integer $votos
 * @property integer $encuestas_idEncuesta
 *
 * The followings are the available model relations:
 * @property Encuestas $encuestasIdEncuesta
 */
class Opciones extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Opciones the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'opciones';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('opcion, encuestas_idEncuesta', 'required'),
            array('votos, encuestas_idEncuesta', 'numerical', 'integerOnly' => true),
            array('opcion', 'length', 'max' => 20),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('idOpcion, opcion, votos, encuestas_idEncuesta', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'encuestasIdEncuesta' => array(self::BELONGS_TO, 'Encuestas', 'encuestas_idEncuesta'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idOpcion' => 'Numero de Opcion',
            'opcion' => 'Opcion',
            'votos' => 'Votos',
            'encuestas_idEncuesta' => 'Encuesta',
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

        $criteria->compare('idOpcion', $this->idOpcion);
        $criteria->compare('opcion', $this->opcion, true);
        $criteria->compare('votos', $this->votos);
        $criteria->compare('encuestas_idEncuesta', $this->encuestas_idEncuesta);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}