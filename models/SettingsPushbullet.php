<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_pushbullet".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $token
 * @property string $device
 * @property integer $debug
 */
class SettingsPushbullet extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_pushbullet';
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
            [['token', 'device'], 'string', 'max' => 64],
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
            'device' => Yii::t('app', 'Device'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
