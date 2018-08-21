<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "device_values_log".
 *
 * @property integer $id
 * @property integer $device_id
 * @property integer $valuenum
 * @property string $value
 * @property string $lastchanged
 */
class DeviceValuesLog extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'device_values_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['device_id', 'valuenum','value'], 'required'],
            [['device_id', 'valuenum'], 'integer'],
            [['value'], 'string'],
            [['lastchanged'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'device_id' => Yii::t('app', 'Device Number'),
            'valuenum' => Yii::t('app', 'Value Number'),
            'value' => Yii::t('app', 'Value'),
            'lastchanged' => Yii::t('app', 'Last changed'),
        ];
    }

    public function getDevice()
    {
        return $this->hasOne(Devices::className(), ['id' => 'device_id']);
    }
}
