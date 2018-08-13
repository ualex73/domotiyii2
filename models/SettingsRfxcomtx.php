<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_rfxcomtx".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $tcphost
 * @property integer $tcpport
 * @property string $type
 * @property string $serialport
 * @property string $baudrate
 * @property integer $relayenabled
 * @property integer $handshake
 * @property integer $relayport
 * @property integer $disablex10
 * @property integer $enablearc
 * @property integer $enableharrison
 * @property integer $enablekoppla
 * @property integer $rfxmitter
 * @property integer $debug
 */
class SettingsRfxcomtx extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_rfxcomtx';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'tcpport', 'relayport'], 'integer'],
            [['enabled', 'relayenabled', 'handshake', 'disablex10', 'enablearc', 'enableharrison', 'enablekoppla', 'rfxmitter', 'debug'], 'boolean'],
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
            'relayenabled' => Yii::t('app', 'Relay enabled'),
            'handshake' => Yii::t('app', 'Handshake'),
            'relayport' => Yii::t('app', 'Relay port'),
            'disablex10' => Yii::t('app', 'Disable x10'),
            'enablearc' => Yii::t('app', 'Enable arc'),
            'enableharrison' => Yii::t('app', 'Enable harrison'),
            'enablekoppla' => Yii::t('app', 'Enable koppla'),
            'rfxmitter' => Yii::t('app', 'Rfxmitter'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
