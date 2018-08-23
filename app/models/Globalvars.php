<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "globalvars".
 *
 * @property integer $id
 * @property string $var
 * @property string $value
 * @property integer $datatype
 */
class Globalvars extends \app\components\ActiveRecord
{
    /**
     * Define datatypes
     */
    private $datatypes = array(
        '1' => 'Boolean',
        '2' => 'Byte',
        '3' => 'Integer',
        '4' => 'Integer',
        '5' => 'Long',
        '6' => 'Single',
        '7' => 'Float',
        '8' => 'Date',
        '9' => 'String',
        '11' => 'Variant',
        '15' => 'Null',
        '16' => 'Object',
    );

    /**
     * @return array with all datatypes
     */
    public function getAllDataTypes()
    {
        return $this->datatypes;
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'globalvars';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value'], 'string'],
            [['datatype'], 'boolean'],
            [['datatype'], 'required'],
            [['var'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'var' => Yii::t('app', 'Var'),
            'value' => Yii::t('app', 'Value'),
            'datatype' => Yii::t('app', 'Datatype'),
        ];
    }
    public function getDataTypeName()
    {
        if (!empty($this->datatype)) { return $this->datatypes[$this->datatype]; }
    }
}
