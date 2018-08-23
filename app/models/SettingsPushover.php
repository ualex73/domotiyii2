<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_pushover".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $token
 * @property string $user
 * @property string $device
 * @property integer $debug
 */
class SettingsPushover extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_pushover';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['token', 'user', 'device'], 'string', 'max' => 64],
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
            'token' => Yii::t('app', 'Token'),
            'user' => Yii::t('app', 'User'),
            'device' => Yii::t('app', 'Device'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
