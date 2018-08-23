<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "device_valuetypes".
 *
 * @property integer $id
 * @property string $type
 * @property string $units
 * @property string $description
 * @property integer $control
 */
class DeviceValuetypes extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'device_valuetypes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['control'], 'boolean'],
            [['type', 'units'], 'string', 'max' => 16],
            [['description'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'type' => Yii::t('app', 'Type'),
            'units' => Yii::t('app', 'Units'),
            'description' => Yii::t('app', 'Description'),
            'control' => Yii::t('app', 'Control'),
        ];
    }
}
