<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_gps".
 *
 * @property integer $id
 * @property integer $polltime
 * @property integer $enabled
 * @property string $serialport
 * @property integer $baudrate
 * @property integer $debug
 */
class SettingsGps extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_gps';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'polltime', 'baudrate'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
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
            'polltime' => Yii::t('app', 'Poll Interval'),
            'enabled' => Yii::t('app', 'Enabled'),
            'serialport' => Yii::t('app', 'Serial port'),
            'baudrate' => Yii::t('app', 'Baud rate'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
