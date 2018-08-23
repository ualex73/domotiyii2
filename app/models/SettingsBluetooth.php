<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_bluetooth".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $device
 * @property integer $threshold
 * @property integer $polltime
 * @property integer $debug
 */
class SettingsBluetooth extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_bluetooth';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'threshold', 'polltime'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['device'], 'string', 'max' => 32],
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
            'device' => Yii::t('app', 'Device'),
            'threshold' => Yii::t('app', 'Threshold'),
            'polltime' => Yii::t('app', 'Polltime'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
