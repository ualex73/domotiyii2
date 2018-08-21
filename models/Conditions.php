<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "conditions".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $formula
 */
class Conditions extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'conditions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'formula'], 'string'],
            [['name'], 'string', 'max' => 64],
            [['name','formula'],'required'],
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
            'description' => Yii::t('app', 'Description'),
            'formula' => Yii::t('app', 'Formula'),
        ];
    }
}
