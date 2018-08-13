<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "thermostat_heating".
 *
 * @property integer $id
 * @property string $name
 * @property integer $sensor
 * @property integer $device
 * @property integer $deviceInverted
 * @property integer $deviceLatency
 * @property double $deviceOffsetBottom
 * @property double $deviceOffsetTop
 * @property integer $regulator
 * @property integer $regulatorInverted
 * @property double $regulatorOffsetBottom
 * @property double $regulatorOffsetTop
 * @property integer $secondary
 * @property string $description
 */
class ThermostatHeating extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'thermostat_heating';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sensor'], 'required'],
            [['sensor', 'device', 'deviceLatency', 'regulator'], 'integer'],
            [['deviceInverted', 'regulatorInverted', 'secondary'], 'boolean'],
            [['deviceOffsetBottom', 'deviceOffsetTop', 'regulatorOffsetBottom', 'regulatorOffsetTop'], 'number'],
            [['description'], 'string'],
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
            'sensor' => Yii::t('app', 'Sensor'),
            'device' => Yii::t('app', 'Device'),
            'deviceInverted' => Yii::t('app', 'Device Inverted'),
            'deviceLatency' => Yii::t('app', 'Device Latency'),
            'deviceOffsetBottom' => Yii::t('app', 'Device Offset Bottom'),
            'deviceOffsetTop' => Yii::t('app', 'Device Offset Top'),
            'regulator' => Yii::t('app', 'Regulator'),
            'regulatorInverted' => Yii::t('app', 'Regulator Inverted'),
            'regulatorOffsetBottom' => Yii::t('app', 'Regulator Offset Bottom'),
            'regulatorOffsetTop' => Yii::t('app', 'Regulator Offset Top'),
            'secondary' => Yii::t('app', 'Secondary'),
            'description' => Yii::t('app', 'Description'),
        ];
    }
}
