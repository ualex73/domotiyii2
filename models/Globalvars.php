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
}
