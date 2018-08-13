<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_velbus".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $serialport
 * @property string $tcphost
 * @property integer $tcpport
 * @property string $type
 * @property integer $relayenabled
 * @property integer $relayport
 * @property integer $debug
 * @property string $baudrate
 */
class SettingsVelbus extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_velbus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'tcpport', 'relayport'], 'integer'],
            [['enabled', 'relayenabled', 'debug'], 'boolean'],
            [['serialport'], 'string', 'max' => 128],
            [['tcphost', 'type', 'baudrate'], 'string', 'max' => 32],
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
            'serialport' => Yii::t('app', 'Serialport'),
            'tcphost' => Yii::t('app', 'Tcphost'),
            'tcpport' => Yii::t('app', 'Tcpport'),
            'type' => Yii::t('app', 'Type'),
            'relayenabled' => Yii::t('app', 'Relayenabled'),
            'relayport' => Yii::t('app', 'Relayport'),
            'debug' => Yii::t('app', 'Debug'),
            'baudrate' => Yii::t('app', 'Baudrate'),
        ];
    }
}
