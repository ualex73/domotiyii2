<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_temperaturnu".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $city
 * @property string $apikey
 * @property integer $pushtime
 * @property integer $debug
 * @property integer $deviceid
 * @property string $devicevalue
 */
class SettingsTemperaturnu extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_temperaturnu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'deviceid', 'devicevalue'], 'required'],
            [['id', 'pushtime', 'deviceid'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['city', 'apikey'], 'string', 'max' => 64],
            [['devicevalue'], 'string', 'max' => 8],
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
            'city' => Yii::t('app', 'City'),
            'apikey' => Yii::t('app', 'Apikey'),
            'pushtime' => Yii::t('app', 'Pushtime'),
            'debug' => Yii::t('app', 'Debug'),
            'deviceid' => Yii::t('app', 'Deviceid'),
            'devicevalue' => Yii::t('app', 'Devicevalue'),
        ];
    }
}
