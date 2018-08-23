<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_opentherm".
 *
 * @property integer $id
 * @property string $temperatureoverride
 * @property integer $syncclock
 * @property integer $enabled
 * @property string $serialport
 * @property integer $polltime
 * @property string $thermostat
 * @property string $tcphost
 * @property integer $tcpport
 * @property string $type
 * @property integer $relayenabled
 * @property integer $relayport
 * @property integer $debug
 */
class SettingsOpentherm extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_opentherm';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'polltime', 'tcpport', 'relayport'], 'integer'],
            [['syncclock', 'enabled', 'relayenabled', 'debug'], 'boolean'],
            [['temperatureoverride', 'thermostat', 'tcphost', 'type'], 'string', 'max' => 32],
            [['serialport'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'temperatureoverride' => Yii::t('app', 'Temperatureoverride'),
            'syncclock' => Yii::t('app', 'Sync clock'),
            'enabled' => Yii::t('app', 'Enabled'),
            'serialport' => Yii::t('app', 'Serial Port'),
            'polltime' => Yii::t('app', 'Poll Interval'),
            'thermostat' => Yii::t('app', 'Thermostat'),
            'tcphost' => Yii::t('app', 'TCP Host'),
            'tcpport' => Yii::t('app', 'TCP Port'),
            'type' => Yii::t('app', 'Type'),
            'relayenabled' => Yii::t('app', 'Relay enabled'),
            'relayport' => Yii::t('app', 'Relay Port'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
