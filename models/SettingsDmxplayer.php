<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_dmxplayer".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $serialport
 * @property string $baudrate
 * @property integer $debug
 */
class SettingsDmxplayer extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_dmxplayer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['serialport'], 'string', 'max' => 128],
            [['baudrate'], 'string', 'max' => 32],
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
            'serialport' => Yii::t('app', 'Serial port'),
            'baudrate' => Yii::t('app', 'Baud rate'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
