<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_forecastio".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $apikey
 * @property string $latitude
 * @property string $longitude
 * @property string $city
 * @property integer $polltime
 * @property integer $debug
 */
class SettingsForecastio extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_forecastio';
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
            [['apikey', 'city'], 'string', 'max' => 128],
            [['latitude', 'longitude'], 'string', 'max' => 32],
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
            'apikey' => Yii::t('app', 'Apikey'),
            'latitude' => Yii::t('app', 'Latitude'),
            'longitude' => Yii::t('app', 'Longitude'),
            'city' => Yii::t('app', 'City'),
            'polltime' => Yii::t('app', 'Polltime'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
