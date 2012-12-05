<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $idUsuario
 * @property string $usuario
 * @property string $contraseña
 */
class Usuarios extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Usuarios the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'usuarios';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('usuario, pass', 'required'),
            array('usuario, pass', 'length', 'max' => 45),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('idUsuario, usuario, c', 'safe', 'on' => 'search'),
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
            'idUsuario' => 'Numero de Usuario',
            'usuario' => 'Usuario',
            'pass' => 'Contraseña',
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

        $criteria->compare('idUsuario', $this->idUsuario);
        $criteria->compare('usuario', $this->usuario, true);
        $criteria->compare('pass', $this->pass, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    public function validatePassword($password) {
        return $this->hashPassword($password) === $this->pass;
    }

    public function hashPassword($password) {
        return md5($password);
    }

}