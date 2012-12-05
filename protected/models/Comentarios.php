<?php

/**
 * This is the model class for table "comentarios".
 *
 * The followings are the available columns in table 'comentarios':
 * @property integer $idComentario
 * @property string $usuario
 * @property string $contenido
 * @property string $fecha
 * @property integer $posts_idPost
 *
 * The followings are the available model relations:
 * @property Posts $postsIdPost
 */
class Comentarios extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Comentarios the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'comentarios';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
// NOTE: you should only define rules for those attributes that
// will receive user inputs.
        return array(
            array('usuario, contenido, posts_idPost', 'required'),
            array('posts_idPost', 'numerical', 'integerOnly' => true),
            array('usuario', 'length', 'max' => 45),
            array('contenido', 'length', 'max' => 1000),
            array('fecha', 'safe'),
            // The following rule is used by search().
// Please remove those attributes that should not be searched.
            array('idComentario, usuario, contenido, fecha, posts_idPost', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
// NOTE: you may need to adjust the relation name and the related
// class name for the relations automatically generated below.
        return array(
            'postsIdPost' => array(self::BELONGS_TO, 'Posts', 'posts_idPost'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idComentario' => 'Numero de Comentario',
            'usuario' => 'Usuario',
            'contenido' => 'Contenido',
            'fecha' => 'Fecha',
            'posts_idPost' => 'Post',
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

        $criteria->compare('idComentario', $this->idComentario);
        $criteria->compare('usuario', $this->usuario, true);
        $criteria->compare('contenido', $this->contenido, true);
        $criteria->compare('fecha', $this->fecha, true);
        $criteria->compare('posts_idPost', $this->posts_idPost);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    public function behaviors() {
        return array(
            'CTimestampBehavior' => array(
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'fecha',
                'updateAttribute' => 'fecha',
                'setUpdateOnCreate' => true,
            ),
                //'BlameableBehavior' => array(
                //    'class' => 'application.components.behaviors.BlameableBehavior',
                //    'createdByColumn' => 'created_by',
                //    'updatedByColumn' => 'modified_by',
                //),
        );
    }

}
