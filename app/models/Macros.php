<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "macros".
 *
 * @property integer $id
 * @property string $name
 * @property string $formula
 */
class Macros extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'macros';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['formula'], 'string'],
            [['name'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'formula' => Yii::t('app', 'Formula'),
        ];
    }
}
