<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_networkdetect".
 *
 * @property integer $id
 * @property integer $enabled
 * @property integer $polltime
 * @property integer $enable_ping
 * @property integer $enable_arpscan
 * @property integer $timeout
 * @property string $interface
 * @property integer $debug
 */
class SettingsNetworkdetect extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_networkdetect';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'polltime', 'timeout'], 'integer'],
            [['enabled', 'enable_ping', 'enable_arpscan', 'debug'], 'boolean'],
            [['interface'], 'string', 'max' => 16],
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
            'polltime' => Yii::t('app', 'Poll Interval'),
            'enable_ping' => Yii::t('app', 'Enable Ping'),
            'enable_arpscan' => Yii::t('app', 'Enable Arpscan'),
            'timeout' => Yii::t('app', 'Timeout'),
            'interface' => Yii::t('app', 'Interface'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
