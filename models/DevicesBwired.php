<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "devices_bwired".
 *
 * @property integer $id
 * @property string $description
 * @property string $devicename
 * @property integer $deviceid
 * @property string $devicelabel
 * @property string $value
 */
class DevicesBwired extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'devices_bwired';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deviceid'], 'integer'],
            [['value'], 'string'],
            [['description'], 'string', 'max' => 64],
            [['devicename'], 'string', 'max' => 32],
            [['devicelabel'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'description' => Yii::t('app', 'Description'),
            'devicename' => Yii::t('app', 'Devicename'),
            'deviceid' => Yii::t('app', 'Deviceid'),
            'devicelabel' => Yii::t('app', 'Devicelabel'),
            'value' => Yii::t('app', 'Value'),
        ];
    }
}
