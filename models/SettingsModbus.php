<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_modbus".
 *
 * @property integer $id
 * @property string $modbustype
 * @property integer $enabled
 * @property string $tcphost
 * @property integer $tcpport
 * @property string $type
 * @property string $serialport
 * @property string $baudrate
 * @property integer $stopbits
 * @property integer $databits
 * @property integer $parity
 * @property integer $debug
 * @property integer $polltime
 */
class SettingsModbus extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_modbus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'tcpport', 'stopbits', 'databits', 'parity', 'polltime'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['modbustype', 'tcphost', 'type', 'baudrate'], 'string', 'max' => 32],
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
            'modbustype' => Yii::t('app', 'Modbus type'),
            'enabled' => Yii::t('app', 'Enabled'),
            'tcphost' => Yii::t('app', 'TCP Host'),
            'tcpport' => Yii::t('app', 'TCP Port'),
            'type' => Yii::t('app', 'Type'),
            'serialport' => Yii::t('app', 'Serialport'),
            'baudrate' => Yii::t('app', 'Baud rate'),
            'stopbits' => Yii::t('app', 'Stopbits'),
            'databits' => Yii::t('app', 'Databits'),
            'parity' => Yii::t('app', 'Parity'),
            'debug' => Yii::t('app', 'Debug'),
            'polltime' => Yii::t('app', 'Poll Interval'),
        ];
    }
}
