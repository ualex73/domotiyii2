<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_xively".
 *
 * @property integer $id
 * @property integer $enabled
 * @property integer $feed
 * @property string $apikey
 * @property integer $pushtime
 * @property integer $debug
 */
class SettingsXively extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_xively';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'feed', 'pushtime'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['apikey'], 'string', 'max' => 128],
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
            'feed' => Yii::t('app', 'Feed'),
            'apikey' => Yii::t('app', 'Apikey'),
            'pushtime' => Yii::t('app', 'Pushtime'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
