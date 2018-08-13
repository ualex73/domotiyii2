<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_rfxcomtrx".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $tcphost
 * @property integer $tcpport
 * @property string $type
 * @property string $serialport
 * @property string $baudrate
 * @property integer $debug
 * @property integer $relayenabled
 * @property integer $relayport
 * @property integer $globalx10
 * @property integer $oldaddrfmt
 */
class SettingsRfxcomtrx extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_rfxcomtrx';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'tcpport', 'relayport'], 'integer'],
            [['enabled', 'debug', 'relayenabled', 'globalx10', 'oldaddrfmt'], 'boolean'],
            [['tcphost', 'type', 'baudrate'], 'string', 'max' => 32],
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
            'debug' => Yii::t('app', 'Debug'),
            'relayenabled' => Yii::t('app', 'Relay enabled'),
            'relayport' => Yii::t('app', 'Relay port'),
            'globalx10' => Yii::t('app', 'Globalx10'),
            'oldaddrfmt' => Yii::t('app', 'Old address format'),
        ];
    }
}
