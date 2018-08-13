<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_jeelabs".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $serialport
 * @property string $baudrate
 * @property integer $debug
 * @property string $tcphost
 * @property integer $tcpport
 * @property string $type
 */
class SettingsJeelabs extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_jeelabs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'tcpport'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['serialport'], 'string', 'max' => 128],
            [['baudrate', 'tcphost', 'type'], 'string', 'max' => 32],
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
            'baudrate' => Yii::t('app', 'Baudrate'),
            'debug' => Yii::t('app', 'Debug'),
            'tcphost' => Yii::t('app', 'Tcphost'),
            'tcpport' => Yii::t('app', 'Tcpport'),
            'type' => Yii::t('app', 'Type'),
        ];
    }
}
