<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_visca".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $serialport
 * @property string $baudrate
 * @property integer $cameraaddress
 * @property integer $debug
 * @property string $device
 */
class SettingsVisca extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_visca';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'cameraaddress'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['serialport'], 'string', 'max' => 128],
            [['baudrate', 'device'], 'string', 'max' => 32],
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
            'cameraaddress' => Yii::t('app', 'Camera address'),
            'debug' => Yii::t('app', 'Debug'),
            'device' => Yii::t('app', 'Device'),
        ];
    }
}
