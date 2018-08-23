<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_smartmeter".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $tcphost
 * @property integer $tcpport
 * @property string $type
 * @property string $serialport
 * @property string $baudrate
 * @property integer $databits
 * @property integer $stopbits
 * @property integer $parity
 * @property string $requestline
 * @property integer $debug
 */
class SettingsSmartmeter extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_smartmeter';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'tcpport', 'databits', 'stopbits', 'parity'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['tcphost', 'type', 'baudrate', 'requestline'], 'string', 'max' => 32],
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
            'tcphost' => Yii::t('app', 'TCP Host'),
            'tcpport' => Yii::t('app', 'TCP Port'),
            'type' => Yii::t('app', 'Type'),
            'serialport' => Yii::t('app', 'Serial port'),
            'baudrate' => Yii::t('app', 'Baud rate'),
            'databits' => Yii::t('app', 'Data bits'),
            'stopbits' => Yii::t('app', 'Stop bits'),
            'parity' => Yii::t('app', 'Parity'),
            'requestline' => Yii::t('app', 'Request line'),
            'updateinterval' => Yii::t('app', 'Update Interval'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
