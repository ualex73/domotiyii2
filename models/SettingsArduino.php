<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_arduino".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $serialport
 * @property string $baudrate
 * @property integer $polltime
 * @property integer $debug
 */
class SettingsArduino extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_arduino';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'enabled', 'polltime', 'debug'], 'integer'],
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
            'serialport' => Yii::t('app', 'Serialport'),
            'baudrate' => Yii::t('app', 'Baudrate'),
            'polltime' => Yii::t('app', 'Polltime'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
