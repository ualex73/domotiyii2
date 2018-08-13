<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_devicediscover".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $multicasthost
 * @property integer $multicastport
 * @property integer $listenonly
 * @property integer $broadcastinterval
 * @property integer $debug
 */
class SettingsDevicediscover extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_devicediscover';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'multicastport', 'broadcastinterval'], 'integer'],
            [['enabled', 'listenonly', 'debug'], 'boolean'],
            [['multicasthost'], 'string', 'max' => 32],
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
            'multicasthost' => Yii::t('app', 'Multicasthost'),
            'multicastport' => Yii::t('app', 'Multicastport'),
            'listenonly' => Yii::t('app', 'Listenonly'),
            'broadcastinterval' => Yii::t('app', 'Broadcastinterval'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
