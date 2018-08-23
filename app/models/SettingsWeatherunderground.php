<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_weatherunderground".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $apikey
 * @property string $city
 * @property integer $polltime
 * @property integer $debug
 */
class SettingsWeatherunderground extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_weatherunderground';
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
            'apikey' => Yii::t('app', 'Weather API key'),
            'city' => Yii::t('app', 'City'),
            'polltime' => Yii::t('app', 'Update frequency'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
