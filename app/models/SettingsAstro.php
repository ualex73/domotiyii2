<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_astro".
 *
 * @property integer $id
 * @property string $latitude
 * @property string $longitude
 * @property integer $timezone
 * @property string $twilight
 * @property string $seasons
 * @property string $seasonstarts
 * @property integer $debug
 * @property string $temperature
 * @property string $currency
 * @property integer $dst
 */
class SettingsAstro extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_astro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'timezone', 'debug', 'dst'], 'integer'],
            [['latitude', 'longitude', 'twilight', 'seasons', 'seasonstarts'], 'string', 'max' => 32],
            [['temperature', 'currency'], 'string', 'max' => 6],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'latitude' => Yii::t('app', 'Latitude'),
            'longitude' => Yii::t('app', 'Longitude'),
            'timezone' => Yii::t('app', 'Timezone'),
            'twilight' => Yii::t('app', 'Twilight'),
            'seasons' => Yii::t('app', 'Seasons'),
            'seasonstarts' => Yii::t('app', 'Seasonstarts'),
            'debug' => Yii::t('app', 'Debug'),
            'temperature' => Yii::t('app', 'Temperature'),
            'currency' => Yii::t('app', 'Currency'),
            'dst' => Yii::t('app', 'Dst'),
        ];
    }
}
