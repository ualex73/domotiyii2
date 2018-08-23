<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_sms".
 *
 * @property integer $id
 * @property integer $polltime
 * @property integer $enabled
 * @property string $serialport
 * @property string $baudrate
 * @property string $pin
 * @property string $servicecentre
 * @property string $contact
 * @property integer $debug
 */
class SettingsSms extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_sms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'polltime'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['serialport'], 'string', 'max' => 128],
            [['baudrate', 'pin', 'servicecentre', 'contact'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'polltime' => Yii::t('app', 'Poll Interval'),
            'enabled' => Yii::t('app', 'Enabled'),
            'serialport' => Yii::t('app', 'Serial port'),
            'baudrate' => Yii::t('app', 'Baud rate'),
            'pin' => Yii::t('app', 'Pin'),
            'servicecentre' => Yii::t('app', 'Service centre'),
            'contact' => Yii::t('app', 'Contact'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
