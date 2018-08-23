<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_buienradar".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $urlbuienradar
 * @property string $latitude
 * @property string $longitude
 * @property string $city
 * @property integer $polltime
 * @property integer $debug
 * @property integer $outputprecision
 * @property string $output
 * @property integer $devmaxvalue
 * @property integer $devtimevalue
 */
class SettingsBuienradar extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_buienradar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'polltime', 'outputprecision', 'devmaxvalue', 'devtimevalue'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['urlbuienradar', 'city'], 'string', 'max' => 128],
            [['latitude', 'longitude', 'output'], 'string', 'max' => 32],
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
            'urlbuienradar' => Yii::t('app', 'Base URL'),
            'latitude' => Yii::t('app', 'Latitude'),
            'longitude' => Yii::t('app', 'Longitude'),
            'city' => Yii::t('app', 'City'),
            'polltime' => Yii::t('app', 'Update frequency'),
            'debug' => Yii::t('app', 'Debug'),
            'outputprecision' => Yii::t('app', 'Output precision'),
            'output' => Yii::t('app', 'Output format'),
            'devmaxvalue' => Yii::t('app', 'Number of value(s)'),
            'devtimevalue' => Yii::t('app', 'Place of time value'),
        ];
    }
}
