<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_mysensors".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $type
 * @property string $tcphost
 * @property integer $tcpport
 * @property string $serialport
 * @property string $baudrate
 * @property integer $relayenabled
 * @property integer $relayport
 * @property integer $useack
 * @property integer $heartbeat
 * @property integer $debug
 */
class SettingsMysensors extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_mysensors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'tcpport', 'relayport', 'heartbeat'], 'integer'],
            [['enabled', 'relayenabled', 'useack', 'debug'], 'boolean'],
            [['type', 'tcphost', 'baudrate'], 'string', 'max' => 32],
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
            'enabled' => Yii::t('app', 'Enabled'),
            'type' => Yii::t('app', 'Type'),
            'tcphost' => Yii::t('app', 'TCP Host'),
            'tcpport' => Yii::t('app', 'TCP Port'),
            'serialport' => Yii::t('app', 'Serialport'),
            'baudrate' => Yii::t('app', 'Baud rate'),
            'relayenabled' => Yii::t('app', 'Relay enabled'),
            'relayport' => Yii::t('app', 'Relay port'),
            'useack' => Yii::t('app', 'Useack'),
            'heartbeat' => Yii::t('app', 'Heartbeat'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
