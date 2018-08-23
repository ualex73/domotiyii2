<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_genericio".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $tcphost
 * @property integer $tcpport
 * @property string $type
 * @property string $serialport
 * @property string $baudrate
 * @property integer $debug
 * @property string $regex
 * @property string $delimiter
 */
class SettingsGenericio extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_genericio';
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
            [['tcphost', 'type', 'baudrate'], 'string', 'max' => 32],
            [['serialport', 'regex', 'delimiter'], 'string', 'max' => 128],
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
            'tcphost' => Yii::t('app', 'Tcp Host'),
            'tcpport' => Yii::t('app', 'Tcp Port'),
            'type' => Yii::t('app', 'Type'),
            'serialport' => Yii::t('app', 'Serialport'),
            'baudrate' => Yii::t('app', 'Baudrate'),
            'debug' => Yii::t('app', 'Debug'),
            'regex' => Yii::t('app', 'Regex'),
            'delimiter' => Yii::t('app', 'Delimiter'),
        ];
    }
}